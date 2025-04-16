<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
//
//        DB::statement("
//            CREATE MATERIALIZED VIEW ranking_siswa AS
//            SELECT s.id, s.nama, sek.nama_sekolah, SUM(n.nilai * mp.bobot) AS total_nilai
//            FROM siswa s
//            JOIN sekolah sek ON s.id_sekolah = sek.id
//            JOIN nilai n ON s.id = n.id_siswa
//            JOIN mata_pelajaran mp ON n.id_mata_pelajaran = mp.id
//            WHERE s.status = 'aktif'
//            GROUP BY s.id, s.nama, sek.nama_sekolah
//            ORDER BY total_nilai DESC
//        ");
//
    }

    public function down()
    {
        DB::statement("DROP MATERIALIZED VIEW IF EXISTS ranking_siswa");
    }
};
