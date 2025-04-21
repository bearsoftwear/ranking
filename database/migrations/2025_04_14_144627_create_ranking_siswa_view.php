<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {

       DB::statement("
           CREATE VIEW ranking_siswa AS
            SELECT
                s.id AS siswa_id,
                s.nama,
                sek.nama_sekolah,
                kec.nama_kecamatan,
                COALESCE(SUM(n.nilai * mp.bobot), 0) AS total_nilai
            FROM siswas s
            JOIN sekolahs sek ON s.sekolah_id = sek.id
            JOIN kecamatans kec ON sek.kecamatan_id = kec.id
            LEFT JOIN nilais n ON s.id = n.siswa_id
            LEFT JOIN mata_pelajarans mp ON n.mata_pelajaran_id = mp.id
            LEFT JOIN masa_kurikulums mk ON n.masa_kurikulum_id = mk.id
            WHERE mk.status = 'aktif' AND s.deleted_at IS NULL
            GROUP BY s.id, s.nama, sek.nama_sekolah, kec.nama_kecamatan
            ORDER BY total_nilai DESC
       ");

    }

    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS ranking_siswa");
    }
};
