<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticaleResource\Pages;
use App\Filament\Resources\ArticaleResource\RelationManagers;
use App\Models\Articale;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticaleResource extends Resource
{
    protected static ?string $model = Articale::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->label('Title'),
                Select::make('category_id')->options(Category::all()->pluck('name','id'))->searchable()->required()->label('Select Category'),
                TextInput::make('author')->required()->label('Author'),
                Select::make('status')->options([
                    1 => 'Active',
                    0 => 'Inactive'
                    ])->required(),
                RichEditor::make('content')->columnSpan(2),
                FileUpload::make('image')->columnSpan(2),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->width(100),
                TextColumn::make('title')->label('Title')->searchable(),
                TextColumn::make('author')->label('Author'),
                TextColumn::make('status')->label('Status'),
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
            'index' => Pages\ListArticales::route('/'),
            'create' => Pages\CreateArticale::route('/create'),
            'edit' => Pages\EditArticale::route('/{record}/edit'),
        ];
    }
}
