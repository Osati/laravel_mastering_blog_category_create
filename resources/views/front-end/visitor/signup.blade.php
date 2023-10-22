<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto ">
            <h2 class="mt-1 ">Sign Up </h2>
            <div class="mb-3 mt-5">
                <form action="" method="post" >
                    @csrf
                    <label for="fullname">User Name :</label>
                    <input type="text"  class="form-control" name="username"/>



                    <label for="fullname">Email Address :</label>
                    <input type="email"  class="form-control" name="email"/>


                    <label for="fullname">Phone :</label>
                    <input type="text"  class="form-control" name="phone"/>

                    <label for="fullname">Password :</label>
                    <input type="password"  class="form-control" name="password"/>

                    {{--                    <label for="fullname">Confirm Password :</label>--}}
                    {{--                    <input type="password"  class="form-control" name="confirmpassword"/>--}}

                    <button type="submit" name="submit" class="form-control btn btn-success mt-1">Save Info</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>






