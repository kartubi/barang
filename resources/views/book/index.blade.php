@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Buku</h2>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="row">
        @foreach($books as $book)

                <div class="col s3 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{$book->cover}}">
                            <span class="card-title">{{$book->name}}</span>
                        </div>
                    </div>
                </div>

        @endforeach
    </div>

    {!! $books->links() !!}
@endsection