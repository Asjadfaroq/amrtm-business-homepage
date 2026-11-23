<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_arabic_home_page_renders_right_to_left(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('dir="rtl"', false)
            ->assertSee('الوزارات')
            ->assertSee('مكاتب المحاماة')
            ->assertSee('آفاق الأعمال')
            ->assertSee('id="mobile-menu"', false);
    }

    public function test_english_home_page_renders_left_to_right(): void
    {
        $this->get('/en')
            ->assertOk()
            ->assertSee('dir="ltr"', false)
            ->assertSee('Ministries')
            ->assertSee('Law Firms')
            ->assertSee('Afaq Business')
            ->assertSee('id="mobile-menu"', false);
    }

    public function test_inner_pages_resolve_in_both_locales(): void
    {
        $this->get('/services')->assertOk()->assertSee('الخدمات');
        $this->get('/en/about')->assertOk()->assertSee('About');
    }

    public function test_unknown_pages_return_not_found(): void
    {
        $this->get('/unknown')->assertNotFound();
    }
}
