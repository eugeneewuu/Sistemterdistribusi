@extends('template')
@section('title','Data Games')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-left">TRANSACTION APPLICATION</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-info float-left" href="create"> Add Games</a>
            </div>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Game</th>
                    <th>Platform Game</th>
                    <th>Tahun Rilis</th>
                    <th>Kategori</th>
                    {{-- <th width="280px">More</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($game as $gms)
                <tr>

                    <td>{{ $gms->nama_game }}</td>
                    <td>{{ $gms->platform_game }}</td>
                    <td>{{ $gms->tahun_rilis }}</td>
                    <td>{{ $gms->nama_kategori }}</td>
                    
                </tr>
                @endforeach
            </tbody>

        </table>

        {{-- <div class="alert alert-alert">Start Adding to the Database.</div> --}}

    </div>
</div>
@endsection