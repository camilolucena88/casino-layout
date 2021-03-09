<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('publisher', 20);
            $table->integer('width')->default(800);
            $table->integer('height')->default(601);
            $table->string('name', 100);
            $table->string('name', 100);
            $table->tinyInteger('active');
            $table->foreign('user_id');
            $table->timestamp('last_modified');
            $table->tinyInteger('desktop')->default(1);
            $table->tinyInteger('mobile')->default(0);
            $table->tinyInteger('game_type_id');
            $table->double('min')->default(0);
            $table->double('max')->default(0);
            $table->double('gamelimit')->default(0);
            $table->tinyInteger('fun_supported')->default(1);
            $table->tinyInteger('iframe')->default(1);
            $table->string('provider',50);
            $table->date('date_added');
            $table->foreign('game_provider_id');
            $table->decimal('rtp');
            $table->tinyInteger('jackpot')->default(0);
            $table->string('seo_name',50);
            $table->text('help');
            $table->tinyInteger('row_custom_image')->default(0);
            $table->integer('reels');
            $table->integer('rows');
            $table->integer('lines');
            $table->text('volatility');
            $table->tinyInteger('is_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
