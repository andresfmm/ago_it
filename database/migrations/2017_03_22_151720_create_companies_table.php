<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('slug');
                $table->longText('company_profile')->nullable();
                $table->longText('mission')->nullable();
                $table->longText('vision')->nullable();
                $table->string('meta_title')->nullable();
                $table->string('meta_description')->nullable();
                $table->string('meta_keywords')->nullable();
                $table->integer('read')->unsigned()->default(0);
                $table->string('ip_address')->default('127.0.0.1');
                $table->softDeletes();
                $table->timestamps();
                $table->engine = 'InnoDB';
                $table->unique('slug');
                
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
