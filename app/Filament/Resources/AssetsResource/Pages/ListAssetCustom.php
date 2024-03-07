<?php

namespace App\Filament\Resources\AssetsResource\Pages;

use App\Filament\Resources\AssetsResource;
use App\Models\Assets;
use Filament\Resources\Pages\Page;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Support\Assets\Asset;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;

class ListAssetCustom extends Page implements HasTable
{
    use InteractsWithTable;

    protected static ?string $title = "List";

    protected ?string $heading = "Daftar Keuangan";


    protected static string $resource = AssetsResource::class;


    protected static string $view = 'filament.resources.assets-resource.pages.list-asset-custom';

    protected function getViewData(): array
    {

        return [
            'total' => number_format(Assets::sum('amount'), 2, ',', '.')
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Assets::query())
            ->columns([
                TextColumn::make('date')->label('Tanggal')->date('d-F-Y')->searchable(),
                TextColumn::make('description')->label('Keterangan'),
                TextColumn::make('amount')->money('IDR'),
                TextColumn::make('payment')
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make('edit')
                    ->action(function (Assets $record) {
                        // dump('admin/assets/' . $record->id . '/edit');
                        return redirect()->to('admin/assets/' . $record->id . '/edit');
                    }),
                DeleteAction::make('delete')
                    ->action(function (Assets $record) {
                        return redirect()->to('admin/assets/' . $record->id . '/delete');
                    })
            ])
            ->bulkActions([
                // ...
            ])
            ->emptyStateActions([
                CreateAction::make(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Tambah Keuangan')
                    ->color('success')
                    ->action(function () {
                        return redirect()->to('admin/assets/create');
                    })
            ]);
    }




    public static function getPages(): array
    {
        return [
            'create' => CreateAssets::route('/create'),
            'edit' => EditAssets::route('/{record}/edit'),
        ];
    }

    // public function render(): View
    // {
    //     return view('livewire.list-products');
    // }
}
