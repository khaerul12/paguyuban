<?php

namespace App\Filament\Resources\Anggota;

use App\Filament\Resources\Anggota\BiodataResource\Pages;
use App\Filament\Resources\Anggota\BiodataResource\RelationManagers;
use App\Models\Biodata;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BiodataResource extends Resource
{
    protected static ?string $model = Biodata::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = "Anggota Keluarga";

    protected static ?string $pluralModelLabel = 'Daftar Anggota Keluarga';
    protected static ?string $label = 'Anggota Keluarga';

    protected static ?string $slug = 'daftar-anggota-keluarga';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Pribadi')->schema([
                    Section::make()->schema([
                        Select::make('kk')->label('No. KK')
                            ->options(Biodata::all()->pluck('kk', 'kk'))
                            ->searchable(),
                        TextInput::make('nik')->label('NIK')->numeric()->required(),
                        TextInput::make('full_name')->name('Nama Lengkap')->required(),
                        Forms\Components\Grid::make(2)->schema([
                            Select::make('gender')->name('Jenis Kelamin')->required()
                                ->options([
                                    'laki-laki' => 'Laki-Laki',
                                    'perempuan' => 'Perempuan',
                                ])->native(false),
                            TextInput::make('blood')->name('Golongan Darah'),
                        ]),
                        // Select::make('religion')->name('Agama')->required()
                        //     ->options([
                        //         'islam' => 'Islam',
                        //         'protestan' => 'Protestan',
                        //         'katolik' => 'Katolik',
                        //         'buddha' => 'Buddha',
                        //         'khonghucu' => 'Khonghucu',
                        //     ])->native(false),
                        // Select::make('status')->name('Status Pernikahan')->required()
                        //     ->options([
                        //         'balum kawain' => 'Belum Kawin',
                        //         'kawin' => 'Kawin'
                        //     ])->native(false),
                        TextInput::make('profession')->name('Pekerjaan')->required(),
                        // Textarea::make('note')->name('Catatan')->required(),
                    ])->columnSpan(8),
                    Section::make()->schema([
                        FileUpload::make('image')
                            ->image()->name('Upload Foto Kamu')->required(),
                        DatePicker::make('birth_date')
                            ->displayFormat('d-F-Y')
                            ->native(false)
                            ->required(),
                        // Radio::make('condition')->label('Kondisi')
                        //     ->options([
                        //         'Sejahtera' => 'Sejahtera',
                        //         'Pra Sejahtera' => 'Pra Sejahtera'
                        //     ])
                    ])->columnSpan(4),
                ])->columns(12),


                Section::make('Alamat Tempat Tinggal')->relationship('address')
                    ->schema([
                        TextInput::make('street')->required(),
                        Forms\Components\Grid::make(2)->schema([
                            Select::make('city_id')
                                ->relationship('city', 'name')
                                ->searchable()
                                ->required(),
                            Select::make('province_id')
                                ->relationship('province', 'name')
                                ->searchable()
                                ->required(),
                        ]),
                        TextInput::make('sub_district')->required(),
                        TextInput::make('regency')->required(),
                    ]),

                Section::make('Pendidikan')->relationship('education')
                    ->schema([
                        TextInput::make('sd')->label('SD'),
                        TextInput::make('smp')->label('SMP'),
                        TextInput::make('smk')->label('SMK'),
                        TextInput::make('college')->label('Kuliah'),
                    ]),

                Section::make('Kontak Person')->schema([
                    TextInput::make('numbers')->numeric()->maxLength(12),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Foto'),
                Tables\Columns\TextColumn::make('nik')->label('NIK')
                    ->searchable(),
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
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
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
