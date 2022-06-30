<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        //this code above will create 10 dummy users. This comes from the UserFactory.php file

        Listing::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create([
        //     'title' => 'Larvel Senior Developer',
        //     'tags' => 'Larvel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Larvel Senior Developer',
     
        // ]);
        // //creates data and puts it into the Listing.php which is later read in the listings.blade.php view
        // Listing::create([
        //     'title' => 'React Senior Developer',
        //     'tags' => 'React, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'React Senior Developer',
     
        // ]);
    }
}
