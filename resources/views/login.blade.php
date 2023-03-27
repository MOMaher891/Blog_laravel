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
    <center class="mt-4">
        <h2>Login</h2>
    </center>
    <div class="container bg-dark w-50 m-auto" style="border-radius:15px;">
        <form class="p-4 text-white" method="POST" action="{{ url('auth/loginRequest') }}"
            style="margin-top: 80px;height: 350px">
            @csrf
            <center>
                <div class="mb-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success w-25">Login</button>
                </div>
            </center>
            @if (Session::has('error'))
                <p class="text-danger">{{ Session::get('error') }}</p>
            @endif
        </form>
    </div>

    <script>
        setTimeout(() => {
            let error = document.querySelectorAll('.text-danger');
            error.forEach(e => {
                e.style.display = 'none';
            });
        }, 2000);
    </script>
</body>

</html>
