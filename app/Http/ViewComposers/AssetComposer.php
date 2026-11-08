<?php

namespace Pterodactyl\Http\ViewComposers;

use Illuminate\View\View;
use Pterodactyl\Services\Helpers\AssetHashService;

class AssetComposer
{
    /**
     * AssetComposer constructor.
     */
    public function __construct(private AssetHashService $assetHashService)
    {
    }

    /**
     * Provide access to the asset service in the views.
     */
    public function compose(View $view): void
    {
        $themePreset = in_array(config('branding.theme_preset'), ['arix', 'makima', 'blue'], true)
            ? config('branding.theme_preset')
            : 'arix';

        $view->with('asset', $this->assetHashService);
        $view->with('siteConfiguration', [
            'name' => config('app.name') ?? 'BHUWAN',
            'locale' => config('app.locale') ?? 'en',
            'branding' => [
                'owner' => config('branding.owner', 'Bhuwan RKA'),
                'url' => config('branding.url', ''),
                'mark' => config('branding.mark', 'BH'),
                'logo' => config('branding.logo', ''),
                'startYear' => config('branding.start_year', 2026),
                'dashboardTitle' => config('branding.dashboard_title', 'Your servers. Your control.'),
                'dashboardSubtitle' => config('branding.dashboard_subtitle', 'Welcome back, {username}.'),
                'dashboardImage' => config('branding.dashboard_image', ''),
                'themePreset' => $themePreset,
                'accentColor' => config('branding.accent_color', '#8b5cf6'),
                'accent' => $themePreset === 'blue' ? '#5b8cff' : ($themePreset === 'arix' ? config('branding.accent_color', '#8b5cf6') : '#c94f59'),
                'glassStrength' => (int) config('branding.glass_strength', 18),
                'cardRadius' => (int) config('branding.card_radius', 12),
                'motionEnabled' => (bool) config('branding.motion_enabled', true),
                'loginMedia' => config('branding.login_media', ''),
                'loginTitle' => config('branding.login_title', 'Welcome to BHUWAN'),
                'loginSubtitle' => config('branding.login_subtitle', 'Sign in to manage your infrastructure.'),
                'consoleBackground' => config('branding.console_background', ''),
                'consoleBackgroundOpacity' => (int) config('branding.console_background_opacity', 18),
                'consoleFontSize' => (int) config('branding.console_font_size', 12),
                'consoleScanlines' => (bool) config('branding.console_scanlines', false),
                'statusEnabled' => (bool) config('branding.status_enabled', true),
                'statusTitle' => config('branding.status_title', 'Systems operational'),
                'statusMessage' => config('branding.status_message', 'Infrastructure is online and operating normally.'),
                'statusShowNodes' => (bool) config('branding.status_show_nodes', true),
                'statusNodeMode' => config('branding.status_node_mode', 'all'),
                'announcementEnabled' => (bool) config('branding.announcement_enabled', false),
                'announcementMessage' => config('branding.announcement_message', ''),
                'announcementType' => config('branding.announcement_type', 'notice'),
                'announcementLink' => config('branding.announcement_link', ''),
            ],
            'recaptcha' => [
                'enabled' => config('recaptcha.enabled', false),
                'siteKey' => config('recaptcha.website_key') ?? '',
            ],
        ]);
    }
}
