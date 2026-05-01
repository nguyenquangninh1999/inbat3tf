<?php

namespace App\Filament\Admin\Pages;

use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static ?string $navigationLabel = 'Cài đặt';
    protected static ?string $title = 'Cài đặt hệ thống';
    protected static bool $shouldRegisterNavigation = true;
    protected string $view = 'filament.admin.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::get();
        $this->form->fill($setting->toArray());
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->components([
                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->disk('public')
                    ->directory('settings'),

                TextInput::make('phone')
                    ->label('Số điện thoại')
                    ->maxLength(20),

                TextInput::make('zalo')
                    ->label('Zalo')
                    ->maxLength(20),

                TextInput::make('send_email')
                    ->label('Email nhận tư vấn')
                    ->email()
                    ->maxLength(191),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $setting = Setting::get();
        $setting->update($this->form->getState());

        Notification::make()
            ->title('Lưu cài đặt thành công')
            ->success()
            ->send();
    }
}
