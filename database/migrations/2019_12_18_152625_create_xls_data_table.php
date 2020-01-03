<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXlsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xls_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('indicator_id')->unsigned();
            $table->string('indicator');
            $table->string('gender_id');
            $table->string('1970');
            $table->string('1971');
            $table->string('1972');
            $table->string('1973');
            $table->string('1974');
            $table->string('1975');
            $table->string('1976');
            $table->string('1977');
            $table->string('1978');
            $table->string('1979');
            $table->string('1980');
            $table->string('1981');
            $table->string('1982');
            $table->string('1983');
            $table->string('1984');
            $table->string('1985');
            $table->string('1986');
            $table->string('1987');
            $table->string('1988');
            $table->string('1989');
            $table->string('1990');
            $table->string('1991');
            $table->string('1992');
            $table->string('1993');
            $table->string('1994');
            $table->string('1995');
            $table->string('1996');
            $table->string('1997');
            $table->string('1998');
            $table->string('1999');
            $table->string('2000');
            $table->string('2001');
            $table->string('2002');
            $table->string('2003');
            $table->string('2004');
            $table->string('2005');
            $table->string('2006');
            $table->string('2007');
            $table->string('2008');
            $table->string('2009');
            $table->string('2010');
            $table->string('2011');
            $table->string('2012');
            $table->string('2013');
            $table->string('2014');
            $table->string('2015');
            $table->string('2016');
            $table->string('2017');
            $table->string('2018');
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
        Schema::dropIfExists('xls_data');
    }
}
