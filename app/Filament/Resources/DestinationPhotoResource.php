<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DestinationPhoto;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DestinationPhotoResource\Pages;
use App\Filament\Resources\DestinationPhotoResource\RelationManagers;

class DestinationPhotoResource extends Resource
{
    protected static ?string $model = DestinationPhoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('destination_id')
                    ->relationship('destination', 'id')
                    ->relationship('destination', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('photo_url')
                    ->label('Photo')
                    ->directory('images/destinations')
                    ->openable()
                    ->multiple()
                    ->maxSize(2048)
                    ->reorderable()
                    ->appendFiles()
                    ->image() // Ini sudah mengonfirmasi bahwa hanya gambar yang bisa diunggah
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif']) // Menambahkan validasi tipe file
                    ->image()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('destination_id')
                    // ->relationship('destination', 'name')
                    ->numeric()
                    ->sortable(),
                ImageColumn::make('photo_url')
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
            'index' => Pages\ListDestinationPhotos::route('/'),
            'create' => Pages\CreateDestinationPhoto::route('/create'),
            'edit' => Pages\EditDestinationPhoto::route('/{record}/edit'),
        ];
    }
}
