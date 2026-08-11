<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'Marketing Manager',
                'client_company' => 'Growthly',
                'avatar' => 'assets/imgs/home-1/testimonial/kptestimonails01.png',
                'content' => 'This CRM has transformed how we manage campaigns. Simple, effective, and a game-changer for our CRM team’s productivity.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Michael Chen',
                'client_position' => 'Operations Director',
                'client_company' => 'TechFlow',
                'avatar' => 'assets/imgs/home-1/testimonial/kptestimonails02.png',
                'content' => 'The ERP system provided by Avark has completely streamlined our internal processes. We\'ve seen a 40% increase in operational efficiency.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Dr. Emily Carter',
                'client_position' => 'Chief Medical Officer',
                'client_company' => 'City Health Clinic',
                'avatar' => 'assets/imgs/home-1/testimonial/author-1.jpg',
                'content' => 'Their Hospital Management System is robust and intuitive. It has significantly reduced our administrative overhead and improved patient care.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 3,
            ]
        ];

        foreach ($testimonials as $testimonial) {
            // Avoid duplicate baseline testimonials when seeding MySQL.
            Testimonial::firstOrCreate(
                [
                    'client_name' => $testimonial['client_name'],
                    'client_company' => $testimonial['client_company'],
                ],
                $testimonial
            );
        }
    }
}
