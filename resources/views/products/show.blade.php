@extends('layouts.repeatedCode')

 @section('main')  
  <div class="container text-center mt-5 d-flex align-items-center justify-content-center">
    <div class="text-center">
        <h1>Welcome to World of Your Stories!</h1>
        <p class="lead">Embark on a journey of inspiration, knowledge, and discovery. Your blog is a tapestry of voices.</p>

        <div class="mx-auto">
            <div class="card p-4">
                {{-- calling data from AppController Show class --}}
                <h2>Title: <b>{{$product->name}}</h2>
                <h4>Description: <b>{{$product->description}}</b></h4>
            </div>
        </div>

        {{-- back to index (home page) --}}
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-5">Go Back to Home</a>

    
      

        {{-- this is the comment section  --}}
        <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <form method="POST" action="{{ route('products.comment.store') }}">
                      @csrf
                      <div class="mb-3">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                          <label for="commentBody" class="form-label">Comment:</label>
                          <textarea class="form-control" id="commentBody" name="body" rows="4" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Add Comment</button>
                  </form>
              </div>
          </div>
      </div>
      
    </div>
</div>

<div class="container">
  <h4 class="mt-4 text-center">Display Comments</h4>
  <div class="row justify-content-center">
      <div class="col-md-8">
          @foreach($comments as $comment)
              <div class="card mb-2">
                  <div class="card-body d-flex justify-content-between align-items-center">
                      <p class="mb-0">{{$comment->body}}</p>
                      <!-- Delete Button -->
                      <div class="mt-2">
                        <form action="{{route('comments.destory',$comment->id)}}" method="POST" style="display: inline;" id="my-form">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger delete-comment" data-id="{{ $comment->id }}" >Delete</button>
                    </form>
                    </div>
                  </div>
              </div>
          @endforeach
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
