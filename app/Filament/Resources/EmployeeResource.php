<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(200),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('office')
                    ->required()
                    ->maxLength(5),
                Forms\Components\TextInput::make('presence')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('departureTime'),
                Forms\Components\TextInput::make('returnTime'),
                Forms\Components\TextInput::make('reason')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('office'),
                Tables\Columns\TextColumn::make('presence'),
                Tables\Columns\TextColumn::make('departureTime'),
                Tables\Columns\TextColumn::make('returnTime'),
                Tables\Columns\TextColumn::make('reason'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
