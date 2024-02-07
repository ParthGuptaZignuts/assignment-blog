<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="/" class="nav-link text-light">Blog</a></li>
        </ul>
    </nav>

    @if($message = Session::get('successs'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>        
    </div>
    @endif

    <div class="container text-center mt-5">
        <h1>Welcome to the Blogosphere!</h1>
         <p class="lead">Share your thoughts, experiences, and passion with the world. Let your voice be heard and your ideas inspire others.</p>
    </div>


    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card mt-3 p-3">
                        <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                             </div>
                             <div class="form-group">
                                <label for="">Blog</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{old('description')}}</textarea>
                                @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                             </div>
                              <button type="submit" class="btn btn-dark mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


{{-- action="/products/store"> --}}