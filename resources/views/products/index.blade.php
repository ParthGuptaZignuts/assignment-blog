@extends('layouts.repeatedCode')

 @section('main')  

      
    <div class="container">
        <div class="text-right mt-2">
            <a href="products/create" class="btn btn-dark">New Blog</a>
        </div>
    

        <h1 class="text-center ">All Blogs</h1>


        {{-- <div class="container mt-4">
            <div class="row justify-content-center">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="products/{{$product->id}}/show" class="text-dark"> <h5 class="card-title">{{ $product->name }}</h5> </a>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 20, '...') }}</p>
                            <a href="products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger delete-product" data-id="{{ $product->id }}">Delete</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mx-auto">
                {{$products->links()}}
            </div>
        </div> --}}

        <div class="container mt-4">
            <div class="row justify-content-center">
                {{-- fetching data --}}
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="products/{{$product->id}}/show" class="text-dark">
                                <h5 class="card-title">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 20, '...') }}</p>
                            <a href="products/{{$product->id}}/edit" class="btn btn-primary edit-product" data-id="{{ $product->id }}">Edit</a>
                            <button class="btn btn-danger delete-product" data-id="{{ $product->id }}">Delete</button>
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
        
        
 
        

        
    </div>

@endsection