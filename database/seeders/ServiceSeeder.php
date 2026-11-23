<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['slug' => 'law-firms', 'name_ar' => 'مكاتب المحاماة', 'name_en' => 'Law Firms', 'icon' => 'bank2', 'color' => '#0a7d3e'],
            ['slug' => 'follow-up-offices', 'name_ar' => 'مكاتب الخدمات والتعقيب', 'name_en' => 'Service & Follow-up Offices', 'icon' => 'briefcase-fill', 'color' => '#c21fd6'],
            ['slug' => 'customs-clearance', 'name_ar' => 'شركات التخليص الجمركي', 'name_en' => 'Customs Clearance', 'icon' => 'person-vcard-fill', 'color' => '#1687f0'],
            ['slug' => 'financial-consulting', 'name_ar' => 'الاستشارات المالية والضريبية', 'name_en' => 'Financial & Tax Consulting', 'icon' => 'calculator-fill', 'color' => '#1c12b8'],
            ['slug' => 'engineering-consulting', 'name_ar' => 'الاستشارات الهندسية', 'name_en' => 'Engineering Consulting', 'icon' => 'building-fill', 'color' => '#f3a00c'],
            ['slug' => 'freelancers', 'name_ar' => 'أصحاب المهن الحرة', 'name_en' => 'Freelance Professionals', 'icon' => 'person-fill', 'color' => '#0e8273'],
        ];

        foreach ($services as $index => $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                [...$service, 'sort_order' => $index + 1],
            );
        }
    }
}
