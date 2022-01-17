<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
        User::create([
            'nama' => 'Yunus Febriansyah',
            'username' => 'yunusfebriansyah',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
        User::create([
            'nama' => 'Udin',
            'username' => 'udin',
            'password' => bcrypt('password'),
            'is_admin' => false
        ]);

        $dataCategory = [
            [
                'slug' => 'oksigen',
                'name' => 'Oksigen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'slug' => 'ambulans',
                'name' => 'Ambulans',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'slug' => 'plasma',
                'name' => 'Plasma',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'slug' => 'puskesmas',
                'name' => 'Puskesmas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'slug' => 'test-swap',
                'name' => 'Test Swap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'slug' => 'tempat-vaksin',
                'name' => 'Tempat Vaksin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'slug' => 'tempat-isolasi',
                'name' => 'Tempat Isolasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Category::insert($dataCategory);

    }
}
