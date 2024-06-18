<?php

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
        DB::table('job_list')->insert([
            ['title' => 'Programmer', 'salary' => '$10000', 'skills' => 'Html, CSS, JS, PHP'],
            ['title' => 'Teacher', 'salary' => '$8000', 'skills' => 'Math, Language or Literature'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
