<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOAuthAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_auth_apps', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('token_secret', 100)->nullable();
            $table->string('client_secret', 100)->nullable();
            $table->integer('client_id')->unsigned();
            $table->string('activo',1)->default(\App\OAuthApp::AUTH_INACTIVO);
            $table->string('token_type')->nullable();
            $table->date('expires_in')->nullable();
            $table->string('access_token')->nullable();
            $table->string('refresh_token')->nullable();
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
        Schema::dropIfExists('o_auth_apps');
    }
}
