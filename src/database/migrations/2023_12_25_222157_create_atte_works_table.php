<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtteWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atte_works', function (Blueprint $table){
            $table -> id();
            $table -> foreignId('atte_user_id')->constrained()->cascadeOnDelete();
            $table -> date('date');
            $table -> timestamp('work-start_at');
            $table -> timestamp('work-finish_at')->nullable();
            $table -> timestamp('created_at')->useCurrent()->nullable();
            $table -> timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
        Schema::dropIfExists('users');
    }
}
