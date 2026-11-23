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
            ->assertSee('الوزارات');
    }

    public function test_english_home_page_renders_left_to_right(): void
    {
        $this->get('/en')
            ->assertOk()
            ->assertSee('dir="ltr"', false)
            ->assertSee('Ministries');
    }
}
