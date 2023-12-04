<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CloudHosting;
use App\Models\Domain;
use App\Models\Feature;
use App\Models\OtherService;
use App\Models\Testimonial;
use App\Models\TypeDomain;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // cloud hosting 
        CloudHosting::create([
            'name' => 'Value Cloud Hosting',
            'code' => 'VCH1',
            'price_before_discount' => 24500,
            'price_after_discount' => 14500
        ]);

        CloudHosting::create([
            'name' => 'Unlimited Hosting',
            'code' => 'Signature',
            'price_before_discount' => 109000,
            'price_after_discount' => 89900
        ]);

        CloudHosting::create([
            'name' => 'High Performance',
            'code' => 'HPCH Bisnis 1',
            'price_before_discount' => 90000,
            'price_after_discount' => 79000
        ]);

        CloudHosting::create([
            'name' => 'Cloud VPS KVM SSD',
            'code' => 'VPS SC1',
            'price_before_discount' => 135000,
            'price_after_discount' => 75000
        ]);

        CloudHosting::create([
            'name' => 'Cloud VPS KVM SSD',
            'code' => 'VPS SC2',
            'price_before_discount' => 105000,
            'price_after_discount' => 75000
        ]);

        CloudHosting::create([
            'name' => 'Cloud Hosting Lite',
            'code' => 'Lite Starter',
            'price_before_discount' => 28000,
            'price_after_discount' => 25000
        ]);

        CloudHosting::create([
            'name' => 'Cloud Hosting Pro',
            'code' => 'Pro 1',
            'price_before_discount' => 100000,
            'price_after_discount' => 95000
        ]);

        // feature 
        Feature::create([
            'cloud_hosting_id' => 1,
            'disk' => '3 GB',
            'bandwith' => 'Unlimited',
            'core_cpu' => '0.5',
            'parked_domain' => 'No'
        ]);

        Feature::create([
            'cloud_hosting_id' => 2,
            'disk' => 'Unlimited',
            'bandwith' => 'Unlimited',
            'core_cpu' => '1',
            'parked_domain' => '5/5'
        ]);

        Feature::create([
            'cloud_hosting_id' => 3,
            'disk' => '3 GB',
            'bandwith' => 'Unlimited',
            'core_cpu' => '1',
            'parked_domain' => 'No'
        ]);

        Feature::create([
            'cloud_hosting_id' => 4,
            'disk' => '25 GB',
            'bandwith' => 'Unlimited',
            'core_cpu' => '1',
            'parked_domain' => 'Unlimited'
        ]);

        Feature::create([
            'cloud_hosting_id' => 5,
            'disk' => '15 GB',
            'bandwith' => 'Unlimited',
            'core_cpu' => '1',
            'parked_domain' => 'Unlimited'
        ]);

        Feature::create([
            'cloud_hosting_id' => 6,
            'disk' => '5 GB',
            'bandwith' => 'Unlimited',
            'core_cpu' => '0.5',
            'parked_domain' => 'No'
        ]);

        Feature::create([
            'cloud_hosting_id' => 7,
            'disk' => '20 GB',
            'bandwith' => 'Unlimited',
            'core_cpu' => '1',
            'parked_domain' => '1/1'
        ]);

        //other service
        OtherService::create([
            'name' => 'SSL',
            'desc' => 'Jadikan website Anda lebih terpercaya dan disukai oleh 
            search engine dengan menggunakan SSL Certificate.',
            'price' => 112000
        ]);

        OtherService::create([
            'name' => 'Dedicated Server',
            'desc' => 'Nikmati kelola Dedicated Server sendiri 
            dengan akses remote dari seluruh dunia tanpa batas',
            'price' => 499000
        ]);

        OtherService::create([
            'name' => 'Colocation Server',
            'desc' => 'Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring 
            dengan cooling system terbaik serta fire extinguisher',
            'price' => 500000
        ]);

        //type domain
        TypeDomain::create([
            'name' => 'id',
            'price' => 165000
        ]);

        TypeDomain::create([
            'name' => 'com',
            'price' => 225000
        ]);

        TypeDomain::create([
            'name' => 'info',
            'price' => 77000
        ]);

        TypeDomain::create([
            'name' => 'net',
            'price' => 125000
        ]);
        
        //domain
        Domain::create([
            'type_domain_id' => 1,
            'name' => 'qwords'
        ]);

        Domain::create([
            'type_domain_id' => 2,
            'name' => 'qwords'
        ]);

        Domain::create([
            'type_domain_id' => 3,
            'name' => 'qwords'
        ]);

        //testimonials
        Testimonial::create([
            'name' => 'Budi Raharjo',
            'profile_image' => 'budi-raharjo.jpg',
            'known_as' => 'Founder ID Cert',
            'testimonial' => 'Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia 
            bisa mendapatkan layanan yang terbaik dari Qwords.'
        ]);

        Testimonial::create([
            'name' => 'Kuns Kurniawan',
            'profile_image' => 'kuns-kurniawan.jpg',
            'known_as' => 'PR Event Info BDG',
            'testimonial' => 'Pelayanan Qwords sangat cepat dan responsif, 
            sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!'
        ]);

        Testimonial::create([
            'name' => 'Denden Sofiudin',
            'profile_image' => 'deden-sofiudin.jpg',
            'known_as' => 'Owner Rumah Kopi Temanggung',
            'testimonial' => 'Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. 
            Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.'
        ]);

    }
}
