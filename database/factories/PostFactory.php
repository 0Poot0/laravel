<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $titles = [
            'Essential Tips for First-Time Startup Founders',
            'How to Create a Compelling Pitch Deck',
            'Understanding Term Sheets: A Guide for Startups',
            'Building a Strong Startup Team from Day One',
            'Navigating the Fundraising Process',
            'Growth Hacking Strategies for Early-Stage Startups'
        ];

        $images = [
            'https://images.unsplash.com/photo-1553877522-43269d4ea984',
            'https://images.unsplash.com/photo-1542744173-8e7e53415bb0',
            'https://images.unsplash.com/photo-1552664730-d307ca884978',
            'https://images.unsplash.com/photo-1557804506-669a67965ba0',
            'https://images.unsplash.com/photo-1522071820081-009f0129c71c',
            'https://images.unsplash.com/photo-1460925895917-afdab827c52f'
        ];

        $excerpts = [
            'Learn the essential strategies and best practices for launching your first startup successfully.',
            'Master the art of creating a pitch deck that captures investor attention and communicates your vision effectively.',
            'Demystifying the legal aspects of startup funding with a comprehensive guide to term sheets.',
            'Discover key insights on building and managing a high-performing startup team.',
            'A comprehensive guide to preparing for and navigating the fundraising process.',
            'Practical growth hacking techniques that can help your startup gain traction quickly.'
        ];

        $index = $this->faker->numberBetween(0, 5);
        $title = $titles[$index];
        $slug = Str::slug($title) . '-' . $this->faker->unique()->word;
        
        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $excerpts[$index],
            'content' => $this->faker->paragraphs(5, true),
            'image' => $images[$index],
        ];
    }
} 