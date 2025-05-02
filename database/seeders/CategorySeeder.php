<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'FinTech',
                'slug' => 'fintech',
                'description' => 'Financial technology startups revolutionizing banking, payments, and financial services.'
            ],
            [
                'name' => 'HealthTech',
                'slug' => 'healthtech',
                'description' => 'Healthcare technology companies improving patient care and medical services.'
            ],
            [
                'name' => 'AI & Machine Learning',
                'slug' => 'ai-ml',
                'description' => 'Artificial Intelligence and Machine Learning innovations.'
            ],
            [
                'name' => 'GreenTech',
                'slug' => 'greentech',
                'description' => 'Sustainable technology companies focused on environmental solutions.'
            ],
            [
                'name' => 'EdTech',
                'slug' => 'edtech',
                'description' => 'Educational technology startups transforming learning and teaching.'
            ],
            [
                'name' => 'E-commerce',
                'slug' => 'e-commerce',
                'description' => 'Online retail and digital commerce solutions.'
            ],
            [
                'name' => 'SaaS',
                'slug' => 'saas',
                'description' => 'Software as a Service platforms and solutions.'
            ],
            [
                'name' => 'Cybersecurity',
                'slug' => 'cybersecurity',
                'description' => 'Security technology protecting digital assets and information.'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
} 