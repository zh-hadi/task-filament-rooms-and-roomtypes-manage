<?php

namespace Database\Seeders;

use App\Models\RoomType;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RoomTypeSeeder extends Seeder
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
        
    }
}
