<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BiodataResource\Pages;
use App\Filament\Resources\BiodataResource\RelationManagers;
use App\Models\Address;
use App\Models\Biodata;
use App\Models\City;
use App\Models\Province;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Ramsey\Uuid\Type\Integer;

class BiodataResource extends Resource
{
    protected static ?string $model = Biodata::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel= "Anggota";

    protected static ?string $pluralModelLabel = 'Daftar Anggota';
    protected static ?string $label = 'Anggota';


    protected static ?string $slug = 'daftar-anggota';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make('Data Pribadi')->schema([
                   Section::make()->schema([
                       TextInput::make('full_name')->name('Nama Lengkap')->required(),
                       Forms\Components\Grid::make(2)->schema([
                           Select::make('gender')->name('Jenis Kelamin')->required()
                               ->options([
                                   'laki-laki' => 'Laki-Laki',
                                   'perempuan' => 'Perempuan',
                               ])->native(false),
                           TextInput::make('blood')->name('Golongan Darah')->required(),
                       ]),
                       Select::make('religion')->name('Agama')->required()
                           ->options([
                               'islam' => 'Islam',
                               'protestan' => 'Protestan',
                               'katolik' => 'Katolik',
                               'buddha' => 'Buddha',
                               'khonghucu' => 'Khonghucu',
                           ])->native(false),
                       Select::make('status')->name('Status Pernikahan')->required()
                           ->options([
                               'balum kawain' => 'Belum Kawin',
                               'kawin' => 'Kawin'
                           ])->native(false),
                       TextInput::make('profession')->name('Pekerjaan')->required(),
                   ])->columnSpan(8),
                   Section::make()->schema([
                       FileUpload::make('image')
                           ->image()->name('Upload Foto Kamu')->required(),
                       DatePicker::make('birth_date')
                           ->displayFormat('d-F-Y')
                           ->native(false)
                           ->required(),
                   ])->columnSpan(4),
               ])->columns(12),


                Section::make('Alamat Tempat Tinggal')->relationship('address')
                    ->schema([
                        TextInput::make('street')->required(),
                        Forms\Components\Grid::make(2)->schema([
                            Select::make('city_id')
                                ->relationship('city','name')
                                ->searchable()
                                ->required(),
                            Select::make('province_id')
                                ->relationship('province','name')
                                ->searchable()
                                ->required(),
                        ]),
                        TextInput::make('sub_district')->required(),
                        TextInput::make('regency')->required(),
                ]),

                Section::make('Pendidikan')->relationship('education')
                    ->schema([
                        TextInput::make('sd'),
                        TextInput::make('smp'),
                        TextInput::make('smk'),
                        TextInput::make('college'),
                    ]),

                Section::make('Kontak Person')->schema([
                    TextInput::make('numbers')->numeric()->maxLength(12),
                    TextInput::make('email')->email(),
                    TextInput::make('facebook'),
                    TextInput::make('instagram'),
                    TextInput::make('twitter'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Foto'),
                Tables\Columns\TextColumn::make('full_name')->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_date')->label('Tanggal Lahir')
                    ->date('d-F-Y')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')->label('Jenis Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address.city.name')->label('Kota')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address.province.name')->label('Provinsi')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()->before(function ($record){
                    self::beforDelete($record);
                })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()->label('Tambah Anggota'),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }




    public static function beforDelete($record): void
    {
        $address = Address::where('biodata_id',$record->id)->get();
        $city = City::find($address[0]['city_id']);
        $city->count = $city->count - 1;
        $city->update();

        $province = Province::find($address[0]['province_id']);
        $province->count = $province->count - 1;
        $province->update();
//        dd($address);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBiodatas::route('/'),
            'create' => Pages\CreateBiodata::route('/create'),
            'edit' => Pages\EditBiodata::route('/{record}/edit'),
        ];
    }
}
