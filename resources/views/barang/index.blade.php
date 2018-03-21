@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar barang</h2>
            </div>
        </div>
    </div>

    <a href="/create" class="btn base-color lighten-1">Tambah Data</a>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="bordered">
        <tr>
            <th>No</th>
            <th>Kode barang</th>
            <th>Nama barang</th>
            <th>Harga</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach($barangs as $barang)
            <tr>
                <td>{{$barang->id}}</td>
                <td>{{$barang->code}}</td>
                <td>{{$barang->name}}</td>
                <td>{{$barang->price}}</td>
                <td>{{$barang->qty}}</td>
                <td>{{$barang->qty * $barang->price}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('barang.edit', $barang->id)}}">Edit</a>
                    <a class="btn btn-primary red" href="{{route('barang.destroy', $barang->id)}}">Delete</a>

                </td>
            </tr>
        @endforeach
    </table>

    {!! $barangs->links() !!}

@endsection