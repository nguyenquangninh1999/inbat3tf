<?php

namespace App\Filament\Admin\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Tên sản phẩm')
                    ->required()
                    ->maxLength(255),

                TextInput::make('price')
                    ->label('Giá')
                    ->required()
                    ->numeric()
                    ->prefix('₫'),

                Textarea::make('description')
                    ->label('Mô tả')
                    ->rows(4)
                    ->columnSpanFull(),

                TextInput::make('link_video')
                    ->label('Link video')
                    ->url()
                    ->placeholder('https://...')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Ảnh sản phẩm')
                    ->image()
                    ->disk('public')
                    ->directory('products')
                    ->columnSpanFull(),
            ]);
    }
}
