<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->integer('master_id');
            $table->integer('unik_id');
           
            $table->integer('s_rs')->nullable();
            $table->integer('s_rt')->nullable();
            $table->integer('s_st')->nullable();
            $table->integer('s_rn')->nullable();
            $table->integer('s_n')->nullable();
            $table->integer('s_tn')->nullable();
            $table->integer('s_tap')->nullable();
            $table->integer('s_tahanan')->nullable();
            $table->integer('s_ground')->nullable();

            $table->integer('s_jrs1_r')->nullable();
            $table->integer('s_jrs1_s')->nullable();
            $table->integer('s_jrs1_t')->nullable();
            $table->integer('s_jrs1_n')->nullable();
            $table->integer('s_fuse1_r')->nullable();
            $table->integer('s_fuse1_s')->nullable();
            $table->integer('s_fuse1_t')->nullable();

            $table->integer('s_jrs2_r')->nullable();
            $table->integer('s_jrs2_s')->nullable();
            $table->integer('s_jrs2_t')->nullable();
            $table->integer('s_jrs2_n')->nullable();
            $table->integer('s_fuse2_r')->nullable();
            $table->integer('s_fuse2_s')->nullable();
            $table->integer('s_fuse2_t')->nullable();

            $table->integer('s_jrs3_r')->nullable();
            $table->integer('s_jrs3_s')->nullable();
            $table->integer('s_jrs3_t')->nullable();
            $table->integer('s_jrs3_n')->nullable();
            $table->integer('s_fuse3_r')->nullable();
            $table->integer('s_fuse3_s')->nullable();
            $table->integer('s_fuse3_t')->nullable();

            $table->integer('s_jrs4_r')->nullable();
            $table->integer('s_jrs4_s')->nullable();
            $table->integer('s_jrs4_t')->nullable();
            $table->integer('s_jrs4_n')->nullable();
            $table->integer('s_fuse4_r')->nullable();
            $table->integer('s_fuse4_s')->nullable();
            $table->integer('s_fuse4_t')->nullable();

            $table->integer('s_jrs5_r')->nullable();
            $table->integer('s_jrs5_s')->nullable();
            $table->integer('s_jrs5_t')->nullable();
            $table->integer('s_jrs5_n')->nullable();
            $table->integer('s_fuse5_r')->nullable();
            $table->integer('s_fuse5_s')->nullable();
            $table->integer('s_fuse5_t')->nullable();
            $table->date('tgl')->nullable();
            $table->time('s_jam')->nullable();
            $table->string('s_petugas')->nullable();
            
            $table->integer('m_rs')->nullable();
            $table->integer('m_rt')->nullable();
            $table->integer('m_st')->nullable();
            $table->integer('m_rn')->nullable();
            $table->integer('m_n')->nullable();
            $table->integer('m_tn')->nullable();
            $table->integer('m_tap')->nullable();
            $table->integer('m_tahanan')->nullable();
            $table->integer('m_ground')->nullable();

            $table->integer('m_jrs1_r')->nullable();
            $table->integer('m_jrs1_s')->nullable();
            $table->integer('m_jrs1_t')->nullable();
            $table->integer('m_jrs1_n')->nullable();
            $table->integer('m_fuse1_r')->nullable();
            $table->integer('m_fuse1_s')->nullable();
            $table->integer('m_fuse1_t')->nullable();

            $table->integer('m_jrs2_r')->nullable();
            $table->integer('m_jrs2_s')->nullable();
            $table->integer('m_jrs2_t')->nullable();
            $table->integer('m_jrs2_n')->nullable();
            $table->integer('m_fuse2_r')->nullable();
            $table->integer('m_fuse2_s')->nullable();
            $table->integer('m_fuse2_t')->nullable();

            $table->integer('m_jrs3_r')->nullable();
            $table->integer('m_jrs3_s')->nullable();
            $table->integer('m_jrs3_t')->nullable();
            $table->integer('m_jrs3_n')->nullable();
            $table->integer('m_fuse3_r')->nullable();
            $table->integer('m_fuse3_s')->nullable();
            $table->integer('m_fuse3_t')->nullable();

            $table->integer('m_jrs4_r')->nullable();
            $table->integer('m_jrs4_s')->nullable();
            $table->integer('m_jrs4_t')->nullable();
            $table->integer('m_jrs4_n')->nullable();
            $table->integer('m_fuse4_r')->nullable();
            $table->integer('m_fuse4_s')->nullable();
            $table->integer('m_fuse4_t')->nullable();

            $table->integer('m_jrs5_r')->nullable();
            $table->integer('m_jrs5_s')->nullable();
            $table->integer('m_jrs5_t')->nullable();
            $table->integer('m_jrs5_n')->nullable();
            $table->integer('m_fuse5_r')->nullable();
            $table->integer('m_fuse5_s')->nullable();
            $table->integer('m_fuse5_t')->nullable();
    
            $table->time('m_jam')->nullable();
            $table->string('m_petugas')->nullable();
            $table->string('almt_gardu')->nullable();
            $table->string('pelanggan')->nullable();
            $table->string('ket')->nullable();
            
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
        Schema::dropIfExists('monitors');
    }
}
