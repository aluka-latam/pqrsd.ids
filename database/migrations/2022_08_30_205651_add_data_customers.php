<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('tiposolicitante');
            $table->string('tipodocumento');
            $table->string('documento');
            $table->string('razonsocial');
            $table->string('nit');
            $table->string('municipio'); 
            $table->boolean('emailsend')->default(true);           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('emailsend');
            $table->dropColumn('tipodocumento');
            $table->dropColumn('tiposolicitante');
            $table->dropColumn('razonsocial');
            $table->dropColumn('nit');
            $table->dropColumn('municipio');
        });
    }
}
