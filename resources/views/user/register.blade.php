<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      .form-control{
        box-shadow: 2px 2px rgb(222, 222, 222);
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <div class="col-md-6" style="margin-top: 30px">
              <img src="assets/images/dot.png" alt="" width="150px">
                <h1 class="mb-5">Register</h1>
              <form method="POST" action="{{ route('register.action') }}">
                @csrf
                <div class="mb-5">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">
                </div>

                <div class="mb-5">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="username">
                  </div>

                <div class="mb-5">
                  <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="password">
                </div>

                <div class="mb-5">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password">
                  </div>

                <button type="submit" class="btn btn-outline-primary" style="width: 640px">Daftar</button>
              </form>
            </div>
            <div class="col-md-6">
              <img src="assets/images/images.png" alt="" width="600px" style="margin-top: 100px; margin-left: 100px">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>