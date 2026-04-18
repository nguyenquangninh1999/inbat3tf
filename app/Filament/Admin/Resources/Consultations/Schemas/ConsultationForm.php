<?php

namespace App\Filament\Admin\Resources\Consultations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ConsultationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Tên')->required()->maxLength(255),
                TextInput::make('phone')->label('Số điện thoại')->required()->maxLength(20),
                TextInput::make('email')->label('Email')->email()->maxLength(255),
                Textarea::make('note')->label('Ghi chú')->rows(3)->columnSpanFull(),
                Select::make('status')
                    ->label('Trạng thái')
                    ->options([1 => 'Chưa tư vấn', 2 => 'Đã tư vấn'])
                    ->default(1)
                    ->required(),
            ]);
    }
}
