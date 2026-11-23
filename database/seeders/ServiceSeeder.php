<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['slug' => 'law-firms', 'name_ar' => 'مكاتب المحاماة', 'name_en' => 'Law Firms', 'icon' => 'scale-balanced', 'color' => '#006c35', 'color_end' => '#00843d'],
            ['slug' => 'follow-up-offices', 'name_ar' => 'مكاتب الخدمات والتعقيب', 'name_en' => 'Service & Follow-up Offices', 'icon' => 'briefcase', 'color' => '#bd15c0', 'color_end' => '#c71ee5'],
            ['slug' => 'customs-clearance', 'name_ar' => 'شركات التخليص الجمركي', 'name_en' => 'Customs Clearance', 'icon' => 'address-book', 'color' => '#2182f0', 'color_end' => '#0688eb'],
            ['slug' => 'financial-consulting', 'name_ar' => 'الاستشارات المالية والضريبية', 'name_en' => 'Financial & Tax Consulting', 'icon' => 'calculator', 'color' => '#2207a7', 'color_end' => '#0b05d1'],
            ['slug' => 'engineering-consulting', 'name_ar' => 'الاستشارات الهندسية', 'name_en' => 'Engineering Consulting', 'icon' => 'building', 'color' => '#f69d03', 'color_end' => '#e9a403'],
            ['slug' => 'freelancers', 'name_ar' => 'أصحاب المهن الحرة', 'name_en' => 'Freelance Professionals', 'icon' => 'user', 'color' => '#00695c', 'color_end' => '#00897b'],
        ];

        foreach ($services as $index => $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                [...$service, 'sort_order' => $index + 1],
            );
        }
    }
}
