<?php namespace BrenoDouglas\Shortcode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCodesTable extends Migration
{

    public function up()
    {
        Schema::create('brenodouglas_shortcode_codes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('identity');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('brenodouglas_shortcode_codes');
    }

}
