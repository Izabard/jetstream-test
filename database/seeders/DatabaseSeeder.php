<?php

namespace Database\Seeders;

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
        $items = [
            [ 'id' => 1, 'name' => 'Admin'],
            [ 'id' => 1, 'name' => 'Developer'],
            [ 'id' => 1, 'name' => 'Author'],
            [ 'id' => 1, 'name' => 'Manager'],
        ];

        foreach ($items as $item) {
            \App\Models\User::factory()->create([
                'name' => $item['name']
            ]);
        }
    }
}
