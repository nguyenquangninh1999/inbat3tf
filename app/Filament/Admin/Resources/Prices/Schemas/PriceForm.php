<?php

namespace App\Filament\Admin\Resources\Prices\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PriceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Tên')
                    ->required()
                    ->maxLength(255),

                TextInput::make('price')
                    ->label('Giá')
                    ->required()
                    ->numeric()
                    ->prefix('₫'),
            ]);
    }
}
