<?php

namespace App\Filament\Admin\Resources\Promotions\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PromotionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Tiêu đề')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Mô tả')
                    ->maxLength(500)
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
