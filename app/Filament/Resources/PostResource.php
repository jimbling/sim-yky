<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    // protected static ?string $navigationGroup = 'Konten Website';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $modelLabel = 'Artikel & Postingan';


    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(
                    fn($state, callable $set) =>
                    $set('slug', \Str::slug($state))
                ),

            TextInput::make('slug')
                ->disabled()
                ->placeholder('Slug akan di-generate otomatis dari Judul.')
                ->required(),

            Select::make('post_type')
                ->options([
                    'article' => 'Artikel',
                    'tutorial' => 'Tutorial',
                ])
                ->required(),

            FileUpload::make('cover')
                ->image()
                ->directory('posts/covers'),

            // RICHTEXT full width
            RichEditor::make('content')
                ->required()
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('posts/editor')
                ->columnSpan('full'),

            // Toggle di bawahnya
            Toggle::make('published')
                ->label('Publish?'),
        ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('post_type')->label('Jenis')->sortable(),
                ImageColumn::make('cover')
                    ->label('Cover')
                    ->disk('public') // atau disk lain yang kamu gunakan
                    ->size(60),
                \Filament\Tables\Columns\IconColumn::make('published')
                    ->label('Publish')
                    ->boolean(),
                TextColumn::make('created_at')->label('Dibuat')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
