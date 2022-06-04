<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addusers', function (Blueprint $table) {
            $table->id();
            $table->string('Prefix');
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('Email');
            $table->string('Isactive')->default('active');
            $table->string('Allowlogin')->default('Login');
            $table->string('Username');
            $table->string('Password');
            $table->string('Confirm_Password');
            $table->string('Role');
            $table->string('Access_location')->default('null');
            $table->string('Dateof_birth');
            $table->string('Gender');
            $table->string('Marital_status');
            $table->string('Blood_group');
            $table->integer('Mobile_num');
            $table->integer('Alternate_num');
            $table->integer('Familycontact_num');
            $table->string('Facebook_link');
            $table->string('Twitter_link');
            $table->string('Social_media1');
            $table->string('Social_media2');
            $table->string('Custom_field1');
            $table->string('Custom_field2');
            $table->string('Custom_field3');
            $table->string('Custom_field4');
            $table->string('Guardian_name');
            $table->string('Id_name');
            $table->integer('ID_proof_number');
            $table->string('Permanent_Address');
            $table->string('Current_Address');
            $table->timestamps();
            // $table->integer('catgry_id')->nullable();
            // $table->unsignedBigInteger('store_id')->nullable();

            // $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            // rff end

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addusers');
    }
};
