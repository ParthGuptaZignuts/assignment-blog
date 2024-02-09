@extends('layouts.repeatedCode')

 @section('main')  


   
    <div class="container text-center mt-5">
        <h1>Welcome to the Blogosphere!</h1>
         <p class="lead">Share your thoughts, experiences, and passion with the world. Let your voice be heard and your ideas inspire others.</p>
    </div>



    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card mt-3 p-3">
                        <form method="POST"  action="{{route('products.store')}}" enctype="multipart/form-data">
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
                              <button type="submit" class="btn btn-dark mt-2" id="button">Submit</button>
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