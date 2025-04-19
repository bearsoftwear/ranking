<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class RankingController extends Controller
{
    public function index()
    {
        $rankings = DB::table('ranking_siswa')
            ->orderBy('total_nilai', 'desc')
            ->paginate(10); // Paginasi 10 item per halaman

        return Inertia::render('rankings/index', [
            'rankings' => $rankings,
        ]);
    }

    public function refreshRanking()
    {
        // Refresh materialized view
        return DB::statement('REFRESH MATERIALIZED VIEW ranking_siswa');
        // return redirect()->route('ranking.index')->with('success', 'Ranking berhasil diperbarui.');
    }
}
