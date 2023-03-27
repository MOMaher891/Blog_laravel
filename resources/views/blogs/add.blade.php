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
    <title>Add Blog</title>

</head>

<body>

    @include('layout.navbar')

    <div class="container my-5 bg-dark" style="border-radius: 20px">

        <form class="p-4 text-white" method="POST" action="{{ url('blog/store') }}">
            @csrf
            <div class="mb-3 w-75">
                <label for="exampleInputEmail1" class="form-label">Blog</label>
                <input type="text" name="blog" class="form-control" placeholder="Add New Blog">
                @error('blog')
                    <div class="alert alert-danger w-50 mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" placeholder="Add New Description"></textarea>
                @error('description')
                    <div class="alert alert-danger w-50 mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" placeholder="Add New Image">
                @error('image')
                    <div class="alert alert-danger w-50 mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="exampleInputEmail1" class="form-label">Category</label>
                <select class="form-control" name="category" id="">
                    <option value="" selected disabled>Choose Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category')
                    <div class="alert alert-danger w-50 mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="exampleInputEmail1" class="form-label">Users</label>
                <select class="form-control" name="user" id="">
                    <option value="" selected disabled>Choose User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user')
                    <div class="alert alert-danger w-50 mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mt-4">
                <button type="submit" class="btn btn-success">ADD</button>
                <a href="{{ url('blog/index') }}" class="btn btn-danger">Back To List</a>
            </div>
        </form>
    </div>
</body>

</html>
