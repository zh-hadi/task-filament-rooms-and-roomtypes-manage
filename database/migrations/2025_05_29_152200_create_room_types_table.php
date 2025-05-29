<?php

use App\Models\Room;
use App\Models\RoomType;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('room_room_types', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Room::class);
            $table->foreignIdFor(RoomType::class);

            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_types');
        Schema::dropIfExists('room_room_types');
    }
};
