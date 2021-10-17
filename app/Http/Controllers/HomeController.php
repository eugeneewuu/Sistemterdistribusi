<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $game = DB::table('game')->get();
        return view('index',['game' => $game]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('create',['kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
        Kategori::create([
            'nama_game' => $request->nama_game,
            'nama_kategori' => $request->nama_kategori,

        ]);

        Game::create([
            'nama_game' => $request->nama_game,
            'platform_game' => $request->platform_game,
            'tahun_rilis' => $request->tahun_rilis,
            'nama_kategori' => $request->nama_kategori,


        ]);

        DB::commit();
        }catch (\Throwable $th) {

            //rollback jika terjadi kesalahan
            DB::rollback();
        }

        return redirect('/');
    }
    
}