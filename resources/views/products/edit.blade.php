@extends('layouts.repeatedCode')
 @section('main')   
    {{-- <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card mt-3 p-3">
                        <h3 class="text-muted">Blog Edit #{{$product->name}}</h3>
                        <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="name" id="" class="form-control" value="{{old('name',$product->name)}}">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                             </div>
                             <div class="form-group">
                                <label for="">Blog</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{old('description' ,$product->description)}}</textarea>
                                @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                             </div>
                             <button type="submit" class="btn btn-dark mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif


    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card mt-3 p-3">
                        <h3 class="text-muted">Blog Edit #{{$product->name}}</h3>
                        <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="name" id="" class="form-control" value="{{old('name',$product->name)}}">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Blog</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{old('description' ,$product->description)}}</textarea>
                                @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        $(document).ready(function() {
            // Check if a success message exists in the session
            @if(session('success'))
                // Display the success message using Toastr
                toastr.success('{{ session('success') }}');
            @endif
        });
    </script>
   
    
 @endsection
