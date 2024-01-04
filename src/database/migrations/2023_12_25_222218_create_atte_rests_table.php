<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtteRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atte_rests', function (Blueprint $table){
            $table -> id();
            $table -> foreignId('atte_work_id')->constrained()->cascadeOnDelete();
            $table -> timestamp('rest-start_at');
            $table -> timestamp('rest-end_at')->nullable();
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
        Schema::dropIfExists('rests');
        Schema::dropIfExists('works');
        Schema::dropIfExists('users');
    }
}
