<?php

namespace Database\Seeders;

use App\Models\Entity;
use Illuminate\Database\Seeder;

class EntitySeeder extends Seeder
{
    public function run(): void
    {
        $entities = [
            ['slug' => 'ministries', 'name_ar' => 'الوزارات', 'name_en' => 'Ministries', 'icon' => 'building-bank', 'tone' => 'blue'],
            ['slug' => 'authorities', 'name_ar' => 'الهيئات والشركات الحكومية', 'name_en' => 'Government Authorities', 'icon' => 'building-community', 'tone' => 'violet'],
            ['slug' => 'consulates', 'name_ar' => 'القنصليات', 'name_en' => 'Consulates', 'icon' => 'flag', 'tone' => 'cyan'],
            ['slug' => 'consultants', 'name_ar' => 'المستشارين متعددي التخصصات', 'name_en' => 'Multidisciplinary Consultants', 'icon' => 'users', 'tone' => 'amber'],
            ['slug' => 'agencies', 'name_ar' => 'الوكالات التجارية والامتياز', 'name_en' => 'Agencies & Franchises', 'icon' => 'certificate', 'tone' => 'sky'],
        ];

        foreach ($entities as $index => $entity) {
            Entity::updateOrCreate(
                ['slug' => $entity['slug']],
                [...$entity, 'sort_order' => $index + 1],
            );
        }
    }
}
