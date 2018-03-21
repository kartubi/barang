@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Buku tamu</h2>
            </div>
        </div>
    </div>

    <a href="guestbook/create" class="btn base-color lighten-1">DAFTAR</a>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="bordered">
        <tr>
            <th>Nama</th>
            <th>kelas</th>
            <th>jurusan</th>
            <th>email</th>
        </tr>
        @foreach($guestbooks as $guestbook)
            <tr>
                <td>{{$guestbook->nama}}</td>
                <td>{{$guestbook->kelas}}</td>
                <td>{{$guestbook->jurusan}}</td>
                <td>{{$guestbook->email}}</td>
            </tr>
        @endforeach
    </table>

    {!! $guestbooks->links() !!}

@endsection