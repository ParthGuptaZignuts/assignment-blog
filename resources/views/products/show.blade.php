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
    <div class="container text-center mt-5">
        <h1>Welcome to World of Your Stories!</h1>
        <p class="lead">Embark on a journey of inspiration, knowledge, and discovery. Your blog is a tapestry of voices.</p>
        
        <div class="mx-auto">
                <div class="card p-4">
                    {{-- calling data from AppController Show class --}}
                    <h2>Title : <b>{{$product->name}}</h1>
                    <h4>Description :<b>{{$product->description}}</b></h3>   
                </div>
        </div>
        {{-- back to index (home page) --}}
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-5">Go Back to Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>