@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gallery</h2>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="row">
        @foreach($galleries as $gallery)

            <div class="col s3 m3">
                <div class="card hover">
                    <div class="card-image">
                        <img src="{{$gallery->photo}}">
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    {!! $galleries->links() !!}
@endsection