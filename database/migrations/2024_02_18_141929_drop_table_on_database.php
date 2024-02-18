<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTableOnDatabase extends Migration
{
    public function up()
    {
        // Do nothing in the up() method
    }

    public function down()
    {
        Schema::dropIfExists('name');
    }
}
