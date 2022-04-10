<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique(); 
            $table->string('mobile')->unique()->nullable();
            $table->string('password');
            $table->string('nid_passport')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('user_id')->nullable();
            $table->string('user_type')->default('shop');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('last_login')->nullable();
            $table->string('status')->default(1);
            $table->string('user_status')->default(0);
            $table->string('lang')->default('en');
            $table->string('lang_status')->default(1);

            $table->string('vat_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('business_name')->nullable();
            $table->text('address')->nullable();
            $table->text('footer_note')->nullable();

            $table->string('login_ip')->nullable();
            $table->string('verify_code')->nullable();
            $table->dateTime('verify_expires_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
}
