<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\MenuItem;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentView;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use App\Models\Consultation;
use Illuminate\Support\Facades\Blade;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('Nhà máy in 3TF')
            ->brandLogo(fn() => \App\Models\Setting::get()->logo ? asset('storage/' . \App\Models\Setting::get()->logo) : asset('favicon.svg'))
            ->brandLogoHeight('2rem')
            ->favicon(fn() => \App\Models\Setting::get()->logo ? asset('storage/' . \App\Models\Setting::get()->logo) : asset('favicon.svg'))
            ->userMenuItems([
                MenuItem::make()
                    ->label('Cài đặt')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/admin/settings'),
            ])
            ->colors([
                'primary' => Color::Amber,
            ])
            ->renderHook('panels::user-menu.before', fn () => Blade::render('
                @php $count = \App\Models\Consultation::where("status", 1)->count(); @endphp
                <a href="/admin/consultations" style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:32px;height:32px;margin-right:8px;overflow:visible;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color:#7c3aed;overflow:visible;">
                        <path d="M14 21H10M18 8C18 6.4087 17.3679 4.88258 16.2427 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.8826 2.63214 7.75738 3.75736C6.63216 4.88258 6.00002 6.4087 6.00002 8C6.00002 11.0902 5.22049 13.206 4.34968 14.6054C3.61515 15.7859 3.24788 16.3761 3.26134 16.5408C3.27626 16.7231 3.31488 16.7926 3.46179 16.9016C3.59448 17 4.19261 17 5.38887 17H18.6112C19.8074 17 20.4056 17 20.5382 16.9016C20.6852 16.7926 20.7238 16.7231 20.7387 16.5408C20.7522 16.3761 20.3849 15.7859 19.6504 14.6054C18.7795 13.206 18 11.0902 18 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    @if($count > 0)
                    <span style="position:absolute;top:-6px;right:-8px;display:flex;align-items:center;justify-content:center;width:16px;height:16px;background:#ef4444;border-radius:50%;color:#fff;font-size:9px;font-weight:700;line-height:1;z-index:10;">{{ $count }}</span>
                    @endif
                </a>
            '))
            ->discoverResources(in: app_path('Filament/Admin/Resources'), for: 'App\Filament\Admin\Resources')
            ->discoverPages(in: app_path('Filament/Admin/Pages'), for: 'App\Filament\Admin\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Admin/Widgets'), for: 'App\Filament\Admin\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
