<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
    <style>
        .alert {
            position: absolute;
            top: 10px;
            right: 10px;
            transition: 0.7s ease-in-out
        }
    </style>
</head>

<body style="overflow: hidden">

    @include('layout.navbar')
    @if (Session::has('success'))
        <div class="alert alert-success" style="z-index: 100">
            {{ Session::get('success') }}</div>
    @endif
    <div class="container my-5">
        <table class="table table-hover text-center">
            <a href="{{ url('blog/create') }}" class="btn btn-success"><i class="fa-solid fa-circle-plus mx-1"></i>Add
                New Blog</a>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Blog</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>User</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td scope="row">{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->image }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->User }}</td>
                        <th>
                            <a href="{{ url("blog/edit/$blog->id") }}"><i
                                    class="fa-solid fa-pen-to-square text-info"></i></a>
                            <a href="{{ url("blog/delete/$blog->id") }}"><i
                                    class="fa-solid fa-trash-can text-danger"></i></a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <center>

        </center>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <script>
        setTimeout(() => {
            document.querySelector('.alert').style.right = '-1000px';
        }, 1500);
    </script>
</body>

</html>
