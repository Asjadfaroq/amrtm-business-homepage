<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            ['slug' => 'afaq', 'name_ar' => 'آفاق الأعمال', 'name_en' => 'Afaq Business', 'icon' => 'graph-up'],
            ['slug' => 'rawafed', 'name_ar' => 'روافد التقنية', 'name_en' => 'Rawafed Tech', 'icon' => 'code-square'],
            ['slug' => 'madar', 'name_ar' => 'مدار للاستشارات', 'name_en' => 'Madar Consulting', 'icon' => 'compass-fill'],
            ['slug' => 'jusoor', 'name_ar' => 'جسور للخدمات', 'name_en' => 'Jusoor Services', 'icon' => 'hand-thumbs-up-fill'],
        ];

        foreach ($partners as $index => $partner) {
            Partner::updateOrCreate(
                ['slug' => $partner['slug']],
                [...$partner, 'sort_order' => $index + 1],
            );
        }
    }
}
