<?php

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = DB::table('trips')->where('id', 1)->first();

        if (!isset($trips->id)) {
            DB::table('trips')->insert([
                'id' => 1,
                'trip_group' => 1,
                'connection_text' => 'From',
                'connection_id' => 0,
                'type_transport' => 'train',
                'departure' => '78A',
                'from' => 'Madrid',
                'to' => 'Barcelona',
                'gate' => '',
                'seat' => '45B',
                'luggage_transfer' => '',
                'order' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            DB::table('trips')->insert([
                'id' => 2,
                'trip_group' => 1,
                'connection_text' => '',
                'connection_id' => 0,
                'type_transport' => 'bus',
                'departure' => 'from airport',
                'from' => 'Barcelona',
                'to' => 'Gerona Airport',
                'gate' => '',
                'seat' => '',
                'luggage_transfer' => '',
                'order' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            DB::table('trips')->insert([
                'id' => 3,
                'trip_group' => 1,
                'connection_text' => 'From',
                'connection_id' => 2,
                'type_transport' => 'flight',
                'departure' => 'SK455',
                'from' => '',
                'to' => 'Stockholm',
                'gate' => '45B',
                'seat' => '3A',
                'luggage_transfer' => 'Baggage drop at ticket counter 344.',
                'order' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            DB::table('trips')->insert([
                'id' => 4,
                'trip_group' => 1,
                'connection_text' => 'From',
                'connection_id' => 3,
                'type_transport' => 'flight',
                'departure' => 'SK22',
                'from' => '',
                'to' => 'Nova York JFK',
                'gate' => '22',
                'seat' => '7B',
                'luggage_transfer' => 'Baggage will we automatically transferred from your last leg.',
                'order' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            DB::table('trips')->insert([
                'id' => 5,
                'trip_group' => 2,
                'connection_text' => '',
                'connection_id' => 0,
                'type_transport' => 'bus',
                'departure' => '13A',
                'from' => 'Dublin',
                'to' => 'Cork',
                'gate' => '',
                'seat' => '',
                'luggage_transfer' => 'Get your bags off the bus.',
                'order' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            DB::table('trips')->insert([
                'id' => 6,
                'trip_group' => 2,
                'connection_text' => 'From',
                'connection_id' => 5,
                'type_transport' => 'fligth',
                'departure' => 'FX5568',
                'from' => '',
                'to' => 'Frankfurt Airport',
                'gate' => '7B',
                'seat' => '1A',
                'luggage_transfer' => '',
                'order' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            DB::table('trips')->insert([
                'id' => 7,
                'trip_group' => 2,
                'connection_text' => 'From',
                'connection_id' => 6,
                'type_transport' => 'train',
                'departure' => '6678',
                'from' => 'Frankfurt',
                'to' => 'Berlin',
                'gate' => '',
                'seat' => '',
                'luggage_transfer' => 'Baggage drop at ticket counter Lufthansa.',
                'order' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
