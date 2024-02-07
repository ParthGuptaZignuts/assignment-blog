<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
    
          <ul class="navbar-nav">
            <li class="nav-item"><a href="/" class="nav-link text-light">Blog</a></li>
          </ul>
      </nav>

      
    <div class="container">
        <div class="text-end">
            <a href="products/create" class="btn btn-dark">New Blog </a>
        </div>
    </div>

    <h1>All Blogs</h1>

      <div class="container">
        <div class="row justify-content-center">
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card" >
                    <div class="card-body">
                        {{-- <h5>{{$product->id}}</h5> --}}
                        <a href="products/{{$product->id}}/show" class="text-dark"> <h5 class="card-title">{{ $product->name }}</h5> </a>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 20, '...') }}</p>
                        <a href="products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                        <a href="products/{{$product->id}}/delete" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete ?')">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{$products->links()}}
        {{-- <div class="row justify-content-center">
            <div class="col-md-6">
                {{ $posts->links('pagination::bootstrap-5') }} <!-- Pagination links -->
            </div>
        </div> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>