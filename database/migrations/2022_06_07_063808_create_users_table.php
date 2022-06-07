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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Prefix')->nullable();
            $table->string('First_name');
            $table->string('Last_name')->nullable();
            $table->string('Email');
            $table->string('Isactive')->default('active');
            $table->string('Allowlogin')->default('Login');
            $table->string('Username')->nullable();
            $table->string('Password');
            $table->string('Confirm_Password');
            $table->string('Role');
            $table->string('Access_location')->nullable();
            $table->string('Dateof_birth')->nullable();
            $table->string('Gender');
            $table->string('Marital_status')->nullable();
            $table->string('Blood_group')->nullable();
            $table->integer('Mobile_num')->nullable();
            $table->integer('Alternate_num')->nullable();
            $table->integer('Familycontact_num')->nullable();
            $table->string('Facebook_link')->nullable();
            $table->string('Twitter_link')->nullable();
            $table->string('Social_media1')->nullable();
            $table->string('Social_media2')->nullable();
            $table->string('Custom_field1')->nullable();
            $table->string('Custom_field2')->nullable();
            $table->string('Custom_field3')->nullable();
            $table->string('Custom_field4')->nullable();
            $table->string('Guardian_name')->nullable();
            $table->string('Id_name')->nullable();
            $table->integer('ID_proof_number')->nullable();
            $table->string('Permanent_Address')->nullable();
            $table->string('Current_Address')->nullable();
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
        Schema::dropIfExists('users');
    }
};
