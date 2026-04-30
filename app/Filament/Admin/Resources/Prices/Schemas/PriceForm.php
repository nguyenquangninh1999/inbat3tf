<?php

namespace App\Filament\Admin\Resources\Prices\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PriceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('table_prices')
                    ->label('Bảng giá')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
