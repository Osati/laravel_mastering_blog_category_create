<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>sign-in</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto ">
            <h2 class="mt-1 ">Sign In </h2>
            <p>{{ session('message') }}</p>
            <div class="mb-3 mt-5">
                <form action="{{ route('visitor.login') }}" method="post">
                    @csrf
                    <label for="fullname">Email Address :</label>
                    <input type="email"  class="form-control" name="email"/>

                    <label for="fullname">Password :</label>
                    <input type="password"  class="form-control" name="password"/>

                    <button type="submit" name="submit" class="form-control btn btn-success mt-1">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>






