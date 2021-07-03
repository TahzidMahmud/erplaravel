<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('bizid')->default(100);
            $table->string('acc');
            $table->text('acc_desc');
            $table->string('acc_type');
            $table->string('acc_use');
            $table->string('acc_source');
            $table->string('level1')->nullable();
            $table->string('level2')->nullable();
            $table->string('level3')->nullable();
            $table->integer('active')->default(1);
            $table->string('flag')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('main_accounts');
    }
}
