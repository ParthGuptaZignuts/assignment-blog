@extends('layouts.repeatedCode')

 @section('main')  

      
    <div class="container">
        <div class="text-end m-3">
            <a href="products/create" class="btn btn-dark">New Blog </a>
        </div>
    </div>

    <h1 class="text-center ">All Blogs</h1>

      <div class="container mt-4">
        <div class="row justify-content-center">
            {{-- feteching data --}}
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card" >
                    <div class="card-body">
                        <a href="products/{{$product->id}}/show" class="text-dark"> <h5 class="card-title">{{ $product->name }}</h5> </a>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 20, '...') }}</p>
                        <a href="products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                        <a href="products/{{$product->id}}/delete" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete ?')">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- pagination --}}
        <div class="mx-auto">
            {{$products->links()}}
        </div>
    </div>

@endsection