<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MstSportCenter;
use App\Models\MstSportField;
use App\Models\MstSportType;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $role1 = \App\Models\Role::create([
            'name' => 'Role 1',
        ]);
        $role2 = \App\Models\Role::create([
            'name' => 'Role 2',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'cd_role' => $role2
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
            'cd_role' => $role2
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'cd_role' => $role1
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'cd_role' => $role1
        ]);

        $msc1 = MstSportCenter::create([
            'name' => 'Sport Center 1',
            'latitude' => '0.000000',
            'longtitude' => '0.000000',
            'address' => 'Depok',
            'contact' => '081122334455'
        ]);
        MstSportCenter::create([
            'name' => 'Sport Center 2',
            'latitude' => '0.000000',
            'longtitude' => '0.000000',
            'address' => 'Depok',
            'contact' => '081122337755'
        ]);
        MstSportCenter::create([
            'name' => 'Sport Center 3',
            'latitude' => '0.000000',
            'longtitude' => '0.000000',
            'address' => 'Depok',
            'contact' => '0811223366'
        ]);

        MstSportType::create([
            'name' => "Sepak Bola",
            'description' => 'Olahraga Sepak Bola'
        ]);
        $mst2 = MstSportType::create([
            'name' => "Badminton",
            'description' => 'Olahraga Badminton'
        ]);
        MstSportType::create([
            'name' => "Basket",
            'description' => 'Olahraga Basket'
        ]);

        MstSportField::create([
            'cd_sport_center' => $msc1->cd_sport_center,
            'cd_sport_type' => $mst2->cd_sport_type,
            'thumbnail' => 'default.jpg',
            'images' => [
                'gallery1.jpg',
                'gallery2.jpg',
                'gallery3.jpg',
            ],
            'description' => 'Lapangan 1'
        ]);

    }
}
