<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TourPackageResource\Pages;
use App\Filament\Resources\TourPackageResource\RelationManagers;
use App\Models\TourPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TourPackageResource extends Resource
{
    protected static ?string $model = TourPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Tour Name')
                    ->required(),

                Forms\Components\Select::make('organizer_profiles_id')
                    ->label('Organizer Name')
                    ->relationship('organizer_profiles', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required()
                    ->prefix('IDR'),

                Forms\Components\DatePicker::make('date')
                    ->required()
                    ->label('Date'),
                    
                Forms\Components\RichEditor::make('facilities')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),    

                Forms\Components\FileUpload::make('image')
                    ->directory('images/tour_packages')
                    ->openable()
                    ->multiple()
                    ->image() 
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif']) // Menambahkan validasi tipe file
                    ->columnSpanFull(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('organizer_profiles.name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('description'),

                Tables\Columns\TextColumn::make('price')
                    ->searchable(),

                Tables\Columns\TextColumn::make('date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTourPackages::route('/'),
            'create' => Pages\CreateTourPackage::route('/create'),
            'edit' => Pages\EditTourPackage::route('/{record}/edit'),
        ];
    }
}
