<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
        [
            'name'     => 'Phnom Penh',
            'image'    => 'assets/images/destinations/phnompenh.jpg',
            'alt_text' => 'Phnom Penh',
            'slug'     => 'phnom-penh',
        ],
        [
            'name'     => 'Siem Reap',
            'image'    => 'assets/images/destinations/sieamreap.jpg',
            'alt_text' => 'Siem Reap',
            'slug'     => 'siem-reap',
        ],
        [
            'name'     => 'Kampot',
            'image'    => 'assets/images/destinations/kampot.jpg',
            'alt_text' => 'Kampot',
            'slug'     => 'kampot',
        ],
        [
            'name'     => 'Mondulkiri',
            'image'    => 'assets/images/destinations/mondulkiri.jpg',
            'alt_text' => 'Mondulkiri',
            'slug'     => 'mondulkiri',
        ],
        [
            'name'     => 'Koh Kong',
            'image'    => 'assets/images/destinations/kohkong.jpg',
            'alt_text' => 'Koh Kong',
            'slug'     => 'koh-kong',
        ],
        [
            'name'     => 'Battambang',
            'image'    => 'assets/images/destinations/battambang.jpg',
            'alt_text' => 'Battambang',
            'slug'     => 'battambang',
        ],
    ];

    foreach ($destinations as $destination) {
        Destination::updateOrCreate(
            ['slug' => $destination['slug']],
            $destination
        );}
    }
}
