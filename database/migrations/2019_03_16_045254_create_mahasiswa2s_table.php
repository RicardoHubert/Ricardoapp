<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswa2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim', 10);
            $table->string('nama');
            $table->string('foto')->nullable();

            $table->integer('prodi_id');
            $table->integer('status')->default(2)->comment("1.Calon, 2.Aktif, 3.Cuti, 4.Alumni, 5.D0");
            $table->date('tgl_lahir')->nullable();            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa2s');
    }
}

?>