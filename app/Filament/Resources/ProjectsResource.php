<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectsResource\Pages;
use App\Filament\Resources\ProjectsResource\RelationManagers;
use App\Models\Projects;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;

class ProjectsResource extends Resource
{
    protected static ?string $model = Projects::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
        TextInput::make('title')->required(),
        Textarea::make('description')->rows(5),
        TextInput::make('location'),
        DatePicker::make('project_date'),
        FileUpload::make('main_photo')
            ->image()
            ->directory('project-main')
            ->preserveFilenames(),
        FileUpload::make('photos')
            ->multiple()
            ->directory('project-gallery')
            ->reorderable()
            ->preserveFilenames()
            ->maxFiles(5),
        TextInput::make('facebook_link')->url(),
        Toggle::make('is_public')->label('Publicly Visible'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('main_photo')
                ->label('Main Photo')
                ->circular(),

            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('location')
                ->sortable()
                ->toggleable(),

            TextColumn::make('project_date')
                ->date()
                ->label('Date')
                ->sortable(),

            IconColumn::make('is_public')
                ->boolean()
                ->label('Public'),

            TextColumn::make('facebook_link')
                ->label('Facebook')
                ->url(fn ($record) => $record->facebook_link)
                ->openUrlInNewTab()
                ->toggleable(),

            TextColumn::make('created_at')
                ->dateTime()
                ->label('Created')
                ->sortable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProjects::route('/create'),
            'edit' => Pages\EditProjects::route('/{record}/edit'),
        ];
    }
}
