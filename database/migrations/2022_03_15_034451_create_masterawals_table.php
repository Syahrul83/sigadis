<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterawals', function (Blueprint $table) {
            $table->id();
            $table->string('ulp');
            $table->string('cos', 5, 2)->nullable();
            $table->integer('wbp')->nullable();
            $table->string('lwbp1')->nullable();
            $table->string('lwbp2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterawals');
    }
}
