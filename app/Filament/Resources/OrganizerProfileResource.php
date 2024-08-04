<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizerProfileResource\Pages;
use App\Filament\Resources\OrganizerProfileResource\RelationManagers;
use App\Models\OrganizerProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizerProfileResource extends Resource
{
    protected static ?string $model = OrganizerProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Organizer Name')
                    ->required(),

                Forms\Components\Select::make('user_id')
                    ->label('Owner Name')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->maxlength(255)
                    ->unique(ignoreRecord: true)
                    ->required(),

                Forms\Components\TextInput::make('phone')
                    ->label('Phone Number')
                    ->required()
                    ->tel(),

                Forms\Components\TextInput::make('address')
                    ->label('Address')
                    ->required(),

                Forms\Components\TextInput::make('city')
                    ->label('City')
                    ->required(),

                Forms\Components\TextInput::make('state')
                    ->label('State')
                    ->required(),

                Forms\Components\TextInput::make('zip')
                    ->label('Zip Code')
                    ->required()
                    ->numeric(),

                Forms\Components\TextInput::make('country')
                    ->label('Country')
                    ->required(),

                Forms\Components\TextInput::make('website')
                    ->label('Website')
                    ->nullable(),

                Forms\Components\TextInput::make('facebook')
                    ->label('Facebook Url')
                    ->nullable(),

                Forms\Components\TextInput::make('twitter')
                    ->label('Twitter Url')
                    ->nullable(),

                Forms\Components\TextInput::make('instagram')
                    ->label('Instagram Url')
                    ->nullable(),
                Forms\Components\RichEditor::make('about')
                    ->label('About Organizer')
                    ->nullable(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('images/organizer_profiles')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Organizer Name'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Owner Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('zip'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('twitter'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Created At'),
                    Tables\Columns\ImageColumn::make('images/organizer_profiles'),
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
            'index' => Pages\ListOrganizerProfiles::route('/'),
            'create' => Pages\CreateOrganizerProfile::route('/create'),
            'edit' => Pages\EditOrganizerProfile::route('/{record}/edit'),
        ];
    }
}
