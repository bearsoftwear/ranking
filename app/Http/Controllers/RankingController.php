<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index()
    {
        // Ambil data dari materialized view
        return $rankings = DB::table('ranking_siswa')->orderBy('total_nilai', 'desc')->get();
        // return view('ranking.index', compact('rankings'));
    }

    public function refreshRanking()
    {
        // Refresh materialized view
        return DB::statement('REFRESH MATERIALIZED VIEW ranking_siswa');
        // return redirect()->route('ranking.index')->with('success', 'Ranking berhasil diperbarui.');
    }
}
