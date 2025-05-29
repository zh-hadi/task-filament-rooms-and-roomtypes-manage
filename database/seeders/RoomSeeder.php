<?php

namespace Database\Seeders;


use App\Models\RoomType;
use App\Models\Room;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roomTypes = [
            'Classroom',
            'Principal Office',
            'Teachers Room',
            'Meeting Room',
            'Computer Lab',
            'Science Lab',
            'Library',
            'Canteen',
            'Kitchen',
            'Store Room',
            'Reception',
            'Waiting Room',
            'Play Room',
            'Medical Room',
            'Toilet',
            'Prayer Room',
            'Auditorium',
            'Security Room',
            'Maintenance Room',
            'Parking Area',
        ];

        foreach($roomTypes as $room){
            RoomType::factory()->create([
                'name' => $room
            ]);
        }

        $roomsName = [
            '101',
            '102',
            '103',
            '104',
        ];

        foreach($roomsName as $name){
            $room = Room::factory()->create(['name' => $name]);


            $randomTypeIds = RoomType::inRandomOrder()->take(rand(0, 3))->pluck('id');

            
            $room->roomTypes()->attach($randomTypeIds);
        }
    }
}
