<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Teams', function (Blueprint $table) {
            $table->id();
            $table->text('column1');
            $table->text('column2');
            $table->text('column3');
            $table->text('column4');
            $table->text('column5');
            $table->text('column8');
            $table->text('column9');
            $table->text('column10');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('Games', function (Blueprint $table) {
            $table->id();
            $table->text('column1');
            $table->text('column2');
            $table->text('column3');
            $table->text('column4');
            $table->text('column5');
            $table->text('column8');
            $table->text('column9');
            $table->text('column10');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
};
