@extends('master')

@section('content')
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Barang {{$barangs->name}}</h2>
                <form id="edit">
                    <div class="form-group">
                        <input type="text" class="form-control" id="code" aria-describedby="code" placeholder="Code" value={{$barangs->code}}>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" aria-describedby="code" placeholder="Name" value={{$barangs->name}}>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" aria-describedby="code" placeholder="Price" value={{$barangs->price}}>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="qty" aria-describedby="code" placeholder="Qty" value={{$barangs->qty}}>
                    </div>
                        <a  onclick="update({{$barangs->id}})" class="btn btn-primary">Submit</a>
                </form>
            </div>
        </div>
    </div>
    <script>
    function update(kode){
        var url = "{{url('barang')}}" +'/'+ kode
        var form = document.getElementById("edit");
        var code = document.getElementById("code");
        var name = document.getElementById("name");
        var qty     = document.getElementById("qty");
        var price = document.getElementById("price");
       $.ajax({
           url: url,
           type: "PUT",
           
           data:{
               
               code:code,
               name:name,
               qty:qty,
               price:price
           }
           ,
           success:function(data){
               console.log(data)
           }
       });
    }
    
    </script>
    
@endsection