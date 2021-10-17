@extends('template')
@section('title','Creaate Data Film')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Tambah Game</h2>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">

            <form action="{{ route('tambah') }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="nama_game">Nama Game</label>
                    <input type="text" name="nama_game" class="form-control" id="nama_game" aria-describedby="nama_game"
                        placeholder="Masukan Nama Game">
                </div>
                <div class="form-group">
                    <label for="Platform_game">Platform_game</label>
                    <input type="text" name="platform_game" class="form-control" id="platform_game"
                        aria-describedby="Platform_Game" placeholder="Masukan Platform Game">
                </div>
                <div class="form-group">
                    <label for="tahun_rilis">Tahun Rilis</label>
                    <input type="text" name="tahun_rilis" class="form-control" id="tahun_rilis"
                        aria-describedby="tahun_rilis" placeholder="Masukan Tahun Rilis">
                </div>
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori"
                        aria-describedby="nama_kategori" placeholder="Masukan kategori produk">
                        
                       
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection