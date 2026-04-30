<?php

namespace App\Filament\Admin\Resources\Promotions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PromotionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Mô tả')
                    ->limit(80),
                TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->recordActions([
                EditAction::make()->label('Sửa'),
                DeleteAction::make()->label('Xóa'),
            ])
            ->actionsColumnLabel('Thao tác')
            ->toolbarActions([
                BulkActionGroup::make([DeleteBulkAction::make()]),
            ]);
    }
}
