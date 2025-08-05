<?php

namespace App\Filament\Resources;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use App\Filament\Resources\AnnounsmentResource\Pages;
use App\Filament\Resources\AnnounsmentResource\RelationManagers;
use App\Models\Announsment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class AnnounsmentResource extends Resource
{
    protected static ?string $model = Announsment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                 TextInput::make('title')->required(),
        DatePicker::make('date_created'),
        DatePicker::make('deadline'),
        FileUpload::make('image')
            ->image()
            ->directory('announcement-images')
            ->preserveFilenames(),
        TextInput::make('link')->url()->label('General Link'),
        TextInput::make('google_form_link')->url()->label('Google Form'),
        TextInput::make('facebook_link')->url()->label('Facebook Post'),
        Textarea::make('description')->rows(5),
        Toggle::make('is_active')->label('Active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->circular(),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('deadline')->date()->sortable(),
                IconColumn::make('is_active')->boolean()->label('Active'),
                TextColumn::make('created_at')->dateTime()->label('Created'),
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
            'index' => Pages\ListAnnounsments::route('/'),
            'create' => Pages\CreateAnnounsment::route('/create'),
            'edit' => Pages\EditAnnounsment::route('/{record}/edit'),
        ];
    }
}
