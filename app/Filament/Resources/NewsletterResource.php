<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterResource\Pages;
use App\Filament\Resources\NewsletterResource\RelationManagers;
use App\Models\Newsletter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;
// protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Newsletters';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                 Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => 
                        $set('slug', Str::slug($state))
                    ),

                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                Forms\Components\FileUpload::make('banner')
                    ->label('Banner Image')
                    ->image()
                    ->directory('newsletters/banners')
                    ->maxSize(2048),

                Forms\Components\FileUpload::make('file')
                    ->label('PDF File')
                    ->directory('newsletters/files')
                    ->acceptedFileTypes(['application/pdf'])
                     ->maxSize(30720),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                 Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->limit(30),
                Tables\Columns\ImageColumn::make('banner')->label('Banner'),
                Tables\Columns\TextColumn::make('created_at')->dateTime('Y-m-d H:i')->label('Uploaded'),
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
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}
