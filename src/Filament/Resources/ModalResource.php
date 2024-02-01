<?php

namespace HugoBachmann\FilamentModal\Filament\Resources;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource\CreateModal;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource\EditModal;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource\ListModal;
use HugoBachmann\FilamentModal\Models\Modal;
use PhpParser\Node\Stmt\Block;

class ModalResource extends Resource
{
    public static function getModel(): string
    {
        return Modal::class;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informations générales')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nom')
                            ->required()
                            ->placeholder('Nom du modal'),

                        Builder::make('content')
                            ->label('Contenu')
                            ->schema([
                                Builder\Block::make('text')
                                    ->label('Texte')
                                    ->schema([
                                       RichEditor::make('content')
                                            ->label('Contenu'),
                                    ]),

                                Builder\Block::make('image')
                                    ->label('Image')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Image'),
                                        TextInput::make('alt')
                                            ->label('Texte alternatif'),
                                    ]),

                                Builder\Block::make('link')
                                    ->label('Lien')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label'),
                                        TextInput::make('link')
                                            ->label('Lien'),
                                    ]),
                            ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()->requiresConfirmation(),
            ]);

    }

    public static function getPages(): array
    {
        return [
            'index' => ListModal::route('/'),
            'create' => CreateModal::route('/create'),
            'edit' => EditModal::route('/{record}/edit'),
        ];
    }
}