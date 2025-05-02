<?php

namespace Database\Factories;

use App\Models\Investor;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvestorFactory extends Factory
{
    protected $model = Investor::class;

    public function definition()
    {
        $fundingRanges = [
            '$500K - $1M',
            '$1M - $5M',
            '$5M - $10M',
            '$10M - $50M',
            '$50M+'
        ];

        // Professional headshot-style images
        $profilePictures = [
            'https://images.unsplash.com/photo-1560250097-0b93528c311a',
            'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2',
            'https://images.unsplash.com/photo-1580489944761-15a19d654956',
            'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7',
            'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d',
            'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e',
            'https://images.unsplash.com/photo-1559989976-f103bebe6482',
            'https://images.unsplash.com/photo-1556157382-97eda2d62296'
        ];

        $bios = [
            'Experienced venture capitalist with a focus on early-stage technology startups. Previously founded and exited two successful SaaS companies.',
            'Angel investor specializing in FinTech and blockchain technologies. Over 15 years of experience in investment banking and private equity.',
            'Strategic investor with a passion for healthcare innovation. Board member of multiple biotech startups and mentor at leading accelerators.',
            'Serial entrepreneur turned investor. Focused on B2B software and marketplace startups. Active advisor in the startup ecosystem.',
            'Impact investor dedicated to sustainable technologies and social enterprises. Former executive at major tech companies.',
            'Deep tech investor with expertise in AI/ML and robotics. PhD in Computer Science and extensive industry experience.',
            'Growth-stage investor specializing in D2C brands and e-commerce. Built and scaled multiple consumer companies.',
            'Early-stage investor focusing on EdTech and Future of Work startups. Previously led innovation at Fortune 500 companies.'
        ];

        return [
            'name' => $this->faker->name,
            'profile_picture' => $this->faker->randomElement($profilePictures),
            'funding_range' => $this->faker->randomElement($fundingRanges),
            'bio' => $this->faker->randomElement($bios),
            'is_featured' => $this->faker->boolean(30), // 30% chance of being featured
        ];
    }
} 