<?php

namespace Database\Factories;

use App\Models\Startup;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class StartupFactory extends Factory
{
    protected $model = Startup::class;

    public function definition()
    {
        $fundingStages = [
            'Pre-seed',
            'Seed',
            'Series A',
            'Series B',
            'Series C',
            'Growth'
        ];

        // Modern, minimal startup logos
        $logos = [
            'https://images.unsplash.com/photo-1599305445671-ac291c95aaa9',
            'https://images.unsplash.com/photo-1599305019474-d1dfe3f83985',
            'https://images.unsplash.com/photo-1599305445671-ac291c95aaa9',
            'https://images.unsplash.com/photo-1599305445671-ac291c95aaa9',
            'https://images.unsplash.com/photo-1599305019474-d1dfe3f83985'
        ];

        $pitches = [
            'Revolutionizing financial services with AI-powered personal banking solutions that adapt to individual needs.',
            'Building the future of healthcare with telemedicine platform that connects patients with specialists worldwide.',
            'Transforming education through personalized learning paths powered by machine learning.',
            'Creating sustainable energy solutions for smart cities with IoT integration.',
            'Developing next-generation cybersecurity tools using quantum computing principles.',
            'Streamlining supply chain management with blockchain technology.',
            'Innovating in the space of autonomous vehicle technology with advanced sensor systems.',
            'Building a marketplace that connects remote workers with global opportunities.'
        ];

        return [
            'name' => $this->faker->company,
            'logo' => $this->faker->randomElement($logos),
            'pitch' => $this->faker->randomElement($pitches),
            'funding_stage' => $this->faker->randomElement($fundingStages),
            'category_id' => Category::inRandomOrder()->first()->id,
            'views' => $views = $this->faker->numberBetween(100, 10000),
            'website' => $this->faker->url,
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'team_size' => $this->faker->randomElement(['1-10', '11-50', '51-200', '201-500', '500+']),
            'founded_date' => $founded_date = $this->faker->dateTimeBetween('-2 years', 'now'),
            'created_at' => $created_at = $this->faker->dateTimeBetween($founded_date, 'now'),
            'updated_at' => $created_at,
            'trending_score' => $views / (max(1, now()->diffInDays($created_at)) + 1) * 100,
        ];
    }
} 