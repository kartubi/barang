@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Register</h2>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="row">
        <form method="post" action="{{url('/guestbook/store')}}">
            <div class="form-group">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label for="Name">Nama</label>
                <input type="text" class="form-control" name="nama"/>
            </div>
            <div class="form-group">
                <label for="Kelas">kelas</label>
                <input type="text" class="form-control" name="kelas"/>
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan"/>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" name="email"/>
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>



@endsection