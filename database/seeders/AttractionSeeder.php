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

        foreach ($attractions as $attraction) {
            Attraction::updateOrCreate(
                ['slug' => $attraction['slug']],
                $attraction
            );
        }
    }
}
