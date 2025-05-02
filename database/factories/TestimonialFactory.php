<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition()
    {
        $photos = [
            'https://images.unsplash.com/photo-1560250097-0b93528c311a',
            'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2',
            'https://images.unsplash.com/photo-1580489944761-15a19d654956',
            'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7',
            'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d',
            'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e'
        ];

        $roles = [
            'Founder & CEO, TechVision AI',
            'Co-founder, HealthPlus',
            'Angel Investor & Startup Advisor',
            'Venture Partner, Innovation Capital',
            'Serial Entrepreneur',
            'Startup Founder & CTO'
        ];

        $quotes = [
            'StartupHub was instrumental in helping us find the right investors. Within months of joining, we secured our Series A funding.',
            'The platform\'s network of experienced investors and mentors provided invaluable guidance during our early stages.',
            'As an investor, I\'ve found some of my best portfolio companies through StartupHub. The quality of startups here is exceptional.',
            'The connections we made through StartupHub were game-changing. We not only found investors but also key team members.',
            'StartupHub\'s platform made fundraising significantly easier. The tools and resources available are unmatched.',
            'What sets StartupHub apart is the quality of connections. Every introduction has been relevant and valuable to our growth.'
        ];

        $index = $this->faker->unique()->numberBetween(0, 5);
        
        return [
            'name' => $this->faker->name,
            'photo' => $photos[$index],
            'role' => $roles[$index],
            'quote' => $quotes[$index],
        ];
    }
} 