<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog system</title>



       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
       <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

       <!-- Scripts -->
       @vite(['resources/css/app.css', 'resources/js/app.js'])

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
       {{-- sweet alert cdn --}}
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        {{-- sweet alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


       {{-- delete sweet alert --}}
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Attach a click event listener to all delete buttons with class 'delete-product'
            const deleteButtons = document.querySelectorAll('.delete-product');
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.getAttribute('data-id');
    
                    // Use SweetAlert to confirm the delete action
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If user clicks 'Yes', redirect to delete route
                            window.location.href = '/products/' + productId + '/delete';
                        }
                    });
                });
            });
        });
        </script>

        {{-- edit sweet alert --}}
        <script>
         document.addEventListener('DOMContentLoaded', function () {
            // Attach a click event listener to all edit buttons with class 'edit-product'
            const editButtons = document.querySelectorAll('.edit-product');

            editButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                const productId = this.getAttribute('data-id');

                // Use SweetAlert to confirm the edit action
                Swal.fire({
                    title: 'Edit Blog?',
                    text: 'Are you sure you want to edit this Blog?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, edit it!'
                }).then((result) => {
                     if (result.isConfirmed) {
                        // If user clicks 'Yes', redirect to edit route
                        window.location.href = '/products/' + productId + '/edit';
                         }
                     });
                });
            });
        });
        </script>


        <!-- CSS file for Toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        <!-- JavaScript files for Toastr (jQuery is required) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    
    

  

</head>
<body>
    @include('layouts.navigation')
    @if($message = Session::get('successs'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>        
    </div>
    @endif

    @yield('main')
</body>

<script>
    // script to remove alert Message after some time
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            var successMessage = document.getElementById('alert-message');
            if (successMessage) {
                successMessage.remove();
            }
        }, 2000);
    });
</script>
</html>