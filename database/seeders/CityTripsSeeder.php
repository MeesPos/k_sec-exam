<?php

namespace Database\Seeders;

use App\Models\CityTrip;
use Illuminate\Database\Seeder;

class CityTripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CityTrip::query()
            ->create([
                'image' => 'https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg',
                'place' => 'Dubai',
                'rating' => '8.4',
                'price' => '198'
            ]);

        CityTrip::query()
            ->create([
                'image' => 'https://613725-1989666-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2014/07/Paris.jpg',
                'place' => 'Parijs',
                'rating' => '9.3',
                'price' => '223'
            ]);

        CityTrip::query()
            ->create([
                'image' => 'https://i0.wp.com/theluxurytravelexpert.com/wp-content/uploads/2019/08/LONDON-BEST-LUXURY-HOTELS-2-1.jpg?fit=1300%2C731&ssl=1',
                'place' => 'Londen',
                'rating' => '8.5',
                'price' => '175'
            ]);
    }
}
