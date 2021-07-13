<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sub_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('bizid')->default(100);
            $table->foreignId('acc')->constrained('main_accounts');
            $table->string('acc_sub');
            $table->text('acc_desc');
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
        Schema::dropIfExists('sub_accounts');
    }
}
