<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeaturedToursResource\Pages;
use App\Filament\Resources\FeaturedToursResource\RelationManagers;
use App\Models\FeaturedTour;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeaturedToursResource extends Resource
{
    protected static ?string $model = FeaturedTour::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tour_packages_id')
                    ->label('Tour Name')
                    ->relationship('tourPackage', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tourPackage.name')
                    ->searchable()
                    // ->relationship('tourPackage', 'name')
                    ->label('Organizer Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFeaturedTours::route('/'),
            'create' => Pages\CreateFeaturedTours::route('/create'),
            'edit' => Pages\EditFeaturedTours::route('/{record}/edit'),
        ];
    }
}
