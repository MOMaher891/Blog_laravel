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

</head>

<body>

    @include('layout.navbar')

    <div class="container my-5 bg-dark" style="border-radius: 20px">

        <form class="p-4 text-white" method="POST" action="{{ url('category/update') }}">
            @csrf
            <div class="mb-3 w-75">
                <label for="exampleInputEmail1" class="form-label">Edit Category</label>
                <input type="hidden" name="id" class="form-control" placeholder="Edit Category"
                    value="{{ $category->id }}">
                <input type="text" name="category" class="form-control" placeholder="Edit Category"
                    value="{{ $category->title }}">
                @error('category')
                    <div class="alert alert-danger w-50 mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-success">Edit</button>
                <a href="{{ url('category/index') }}" class="btn btn-danger">Back To List</a>
            </div>
        </form>
    </div>

    <script>
        setTimeout(() => {
            document.querySelector('.alert').style.display = 'none';
        }, 2000);
    </script>
</body>

</html>
