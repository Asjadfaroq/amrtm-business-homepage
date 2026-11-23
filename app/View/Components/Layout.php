<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public string $locale;

    public string $direction;

    public array $fonts;

    public function __construct(public string $title)
    {
        $this->locale = app()->getLocale();
        $this->direction = in_array($this->locale, config('platform.rtl'), true) ? 'rtl' : 'ltr';
        $this->fonts = [
            ...config("platform.fonts.{$this->locale}"),
            ...config('platform.fonts.icons'),
        ];
    }

    public function render(): View
    {
        return view('components.layout');
    }
}
