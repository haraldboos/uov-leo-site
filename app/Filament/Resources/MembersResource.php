<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembersResource\Pages;
use App\Filament\Resources\MembersResource\RelationManagers;
use App\Models\Members;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembersResource extends Resource
{
    protected static ?string $model = Members::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                        Forms\Components\TextInput::make('name')->required()->maxLength(255),
        Forms\Components\TextInput::make('position')->required()->maxLength(255),
        Forms\Components\TextInput::make('email')->email()->maxLength(255),
        Forms\Components\TextInput::make('phone')->maxLength(20),
        Forms\Components\TextInput::make('year')->required()->maxLength(20),
        Forms\Components\Select::make('category')
            ->required()
            ->options([
                'Executive Committee' => 'Executive Committee',
                'Board of Directors' => 'Board of Directors',
            ]),

Forms\Components\FileUpload::make('image')
    ->image()
    ->directory('members')
    ->preserveFilenames()
    ->maxSize(2048)
    ->imageCropAspectRatio('1:1')
    ->imagePreviewHeight('150')
    ->label('Profile Photo'),

        Forms\Components\TextInput::make('order_number')->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('order_number')->label('#')->sortable(),
        Tables\Columns\TextColumn::make('name')->searchable(),
        Tables\Columns\ImageColumn::make('image')
    ->label('Photo')
    ->rounded()
    ->height(50),
        Tables\Columns\TextColumn::make('position'),
        Tables\Columns\TextColumn::make('category'),
        Tables\Columns\TextColumn::make('year')->sortable(),
        Tables\Columns\TextColumn::make('email')->toggleable()->limit(20),
        Tables\Columns\TextColumn::make('phone')->toggleable()->limit(20),
            ])
              ->defaultSort('order_number')
            ->filters([
                //
                Tables\Filters\SelectFilter::make('year')
        ->label('Year')
        ->options(fn () => Members::query()->distinct()->pluck('year', 'year')->toArray())
        ->attribute('year'),

    Tables\Filters\SelectFilter::make('category')
        ->label('Category')
        ->options([
            'Executive Committee' => 'Executive Committee',
            'Board of Directors' => 'Board of Directors',
            'Club Advisor' => 'Club Advisor',
        ])
        ->attribute('category'),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMembers::route('/create'),
            'edit' => Pages\EditMembers::route('/{record}/edit'),
        ];
    }
}
