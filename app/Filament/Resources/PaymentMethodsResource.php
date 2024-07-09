<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PaymentMethod;
use App\Models\PaymentMethods;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PaymentMethodsResource\Pages;
use App\Filament\Resources\PaymentMethodsResource\RelationManagers;

class PaymentMethodsResource extends Resource
{
    protected static ?string $model = PaymentMethod::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Payment Name')
                    ->required(),

                Forms\Components\Select::make('status')
                    ->options([
                    'active' => 'active',
                    'deactive' => 'deactive',
                ]),
                Forms\Components\Select::make('type')
                    ->options([
                    'percent' => 'Percent (%)',
                    'nominal' => 'Nominal (Rp)',
                ]),

                Forms\Components\TextInput::make('cost')
                    ->label('Payment Gateway Fee')
                    ->numeric()
                    ->required(),
                    
                Forms\Components\TextInput::make('additional_cost')
                    ->label('Payment Gateway additional Fee')
                    ->numeric()
                    ->prefix('IDR'),

                Forms\Components\TextInput::make('type_code')
                    ->label('Type Code Payment')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('bank_code')
                    ->label('Bank Code')
                    ->required(),

                Forms\Components\Select::make('created_by')
                    ->label('Created By')
                    ->relationship('createdBy', 'name') // Gunakan 'createdBy' sebagai nama relasi
                    ->searchable()
                    ->preload()
                    ->required(),
                
                Forms\Components\Select::make('updated_by')
                    ->label('Updated By')
                    ->relationship('updatedBy', 'name') // Gunakan 'updatedBy' sebagai nama relasi
                    ->searchable()
                    ->preload()
                    ->required(),
                    
                Forms\Components\RichEditor::make('description')
                    ->label('Description')
                    ->required(),  
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Payment Name'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('type')->label('Type'),
                Tables\Columns\TextColumn::make('cost')->label('Payment Gateway Fee'),
                Tables\Columns\TextColumn::make('additional_cost')->label('Payment Gateway Additional Fee'),
                Tables\Columns\TextColumn::make('type_code')->label('Type Code Payment'),
                Tables\Columns\TextColumn::make('bank_code')->label('Bank Code'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('updated_by')->label('Updated By'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
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
            'index' => Pages\ListPaymentMethods::route('/'),
            'create' => Pages\CreatePaymentMethods::route('/create'),
            'edit' => Pages\EditPaymentMethods::route('/{record}/edit'),
        ];
    }
}
