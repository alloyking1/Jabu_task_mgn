<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        DB::table('task_groups')->insert([
            ['name' => 'TASKS TODAY', 'description' => 'description of the category'],
            ['name' => 'TASKS TOMORROW', 'description' => 'description of the category'],
            ['name' => 'TASKS NEXT WEEK', 'description' => 'description of the category'],
            ['name' => ' TASKS NEXT WEEK', 'description' => 'description of the category'],
            ['name' => ' TASKS NEXT', 'description' => 'description of the category'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_groups');
    }
};
