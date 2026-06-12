<?php

namespace Database\Seeders;

use App\Models\Attraction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $attractions = [
            [
                'name'     => 'Kampot Dong Te',
                'name_kh'  => 'កំពត ដូងទេ',
                'subtitle' => null,
                'image'    => 'assets/images/activities/dong-te.jpg',
                'alt_text' => 'Wooden river boats moored on calm water at Kampot Dong Te',
                'slug'     => 'kampot-dong-te',
            ],
            [
                'name'     => 'National Museum',
                'name_kh'  => null,
                'subtitle' => 'Phnom Penh - Minority',
                'image'    => 'assets/images/activities/national-museum.jpg',
                'alt_text' => 'Phnom Penh - Minority',
                'slug'     => 'national-museum',
            ],
            [
                'name'     => 'Rattanakiri',
                'name_kh'  => null,
                'subtitle' => 'EcoTourism',
                'image'    => 'assets/images/activities/yeak-loam.jpg',
                'alt_text' => 'Rattanakiri - EcoTourism',
                'slug'     => 'rattanakiri',
            ],
            [
                'name'     => 'Koh Ker Temple',
                'name_kh'  => null,
                'subtitle' => 'Siem Reap Hidden Gem',
                'image'    => 'assets/images/activities/koh-ker.jpg',
                'alt_text' => 'Ancient stone temple ruins at Koh Ker archaeological site',
                'slug'     => 'koh-ker-temple',
            ],
            [
                'name'     => 'Russian Market',
                'name_kh'  => null,
                'subtitle' => 'Toul Tom Poung',
                'image'    => 'assets/images/activities/ttp.jpg',
                'alt_text' => 'Busy indoor market aisle in Phnom Penh',
                'slug'     => 'russian-market',
            ],
            [
                'name'     => 'Maloop',
                'name_kh'  => null,
                'subtitle' => 'Tourist Complex',
                'image'    => 'assets/images/activities/part-of-the-large-external.jpg',
                'alt_text' => 'Open resort pavilion with landscaped gardens at Maloop',
                'slug'     => 'maloop',
            ],
        ];

        Attraction::updateOrCreate(
            ['slug' => 'geography'], // Add a 'slug' text column to your table if you want to find them easily!
            [
                'name' => 'Geography',
                'subtitle' => 'Cambodia shares borders with Thailand, Laos, and Vietnam. The country features a diverse landscape of low-lying plains, the Mekong River delta, mountains, and the Gulf of Thailand coastline. The Tonle Sap, Southeast Asia \'s largest freshwater lake, is the beating heart of the nation\'s ecology and agriculture.',
                'alt_text' => 'Rattanakiri - EcoTourism',
                'image' => 'assets/images/destinations/geography.jpg',
            ]
        );

        Attraction::updateOrCreate(
            ['slug' => 'history'],
            [
                'name' => 'History',
                'subtitle' => 'The Khmer Empire, which flourished from the 9th to 15th century, left behind the magnificent Angkor temple complex — one of the world\'s greatest archaeological treasures. After periods of French colonial rule and recent recovery, Cambodia today stands as a resilient nation proud of its heritage.
                ',
                'alt_text' => 'Ancient stone temple ruins at Koh Ker',
                'image' => 'assets/images/destinations/history.jpg',
            ]
        );

        Attraction::updateOrCreate(
            ['slug' => 'culture'],
            [
                'name' => 'People and Culture',
                'subtitle' => 'The Khmer people form the majority of Cambodia\'s population, known for their gentle nature and enduring spirit. Buddhism is the official religion and deeply influences daily life, art, and architecture. Traditional Apsara dance, silk weaving, and vibrant festivals reflect a culture that has thrived for centuries.',
                'alt_text' => 'Phnom Penh - Minority',
                'image' => 'assets/images/destinations/peopleandculture.jpg',
            ]
        );

        Attraction::updateOrCreate(
            ['slug' => 'climate'],
            [
                'name' => 'Climate',
                'subtitle' => 'Cambodia enjoys a tropical climate with two distinct seasons: the dry season (November to April) and the wet season (May to October). Temperatures range from 21°C to 35°C year-round, making it an ideal destination for travelers seeking sunshine, adventure, and cultural discovery at any time of year.',
                'alt_text' => 'Wooden river boats moored on calm water at Kampot',
                'image' => 'assets/images/destinations/climate.jpg',
            ]
        );

        foreach ($attractions as $attraction) {
            Attraction::updateOrCreate(
                ['slug' => $attraction['slug']],
                $attraction
            );
        }
    }
}
