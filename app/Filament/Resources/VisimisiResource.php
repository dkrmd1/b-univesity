<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisimisiResource\Pages;
use App\Filament\Resources\VisimisiResource\RelationManagers;
use App\Models\Visimisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;

class VisimisiResource extends Resource
{
    protected static ?string $model = Visimisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TinyEditor::make('visi')
                ->required()
                ->columnSpanFull(),
    
            TinyEditor::make('misi')
                ->required()
                ->columnSpanFull(),
    
            Forms\Components\FileUpload::make('image')
                ->image() // Ensures only image files are uploaded
                ->multiple() // Allows uploading multiple files
                ->required() // Makes the field mandatory
                ->minFiles(3) // Minimum 3 files must be uploaded
                ->maxFiles(3) // Maximum 3 files can be uploaded
                ->columnSpanFull(),
        ]);
    } 

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
            ->wrap() // Ensures long text wraps within the column
            ->html() // Renders the text as HTML
            ->searchable(), // Allows the column to be searchable

            Tables\Columns\TextColumn::make('misi')
            ->wrap()
            ->html()
            ->searchable(),

        Tables\Columns\ImageColumn::make('image'), // Displays an image in the column

        Tables\Columns\TextColumn::make('created_at')
            ->dateTime() // Formats the value as a datetime
            ->sortable() // Allows sorting by this column
            ->toggleable(isToggledHiddenByDefault: true), // Hides column by default

        Tables\Columns\TextColumn::make('updated_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListVisimisis::route('/'),
            'create' => Pages\CreateVisimisi::route('/create'),
            'edit' => Pages\EditVisimisi::route('/{record}/edit'),
        ];
    }
}
