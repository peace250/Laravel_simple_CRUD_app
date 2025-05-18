<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL_Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body style="background-color: whitesmoke">
@if(session('error'))
<div class="alert alert-danger fade show alert-dismissible" role="alert">
    {{session('error')}}
<button class="btn-close" data-bs-dismiss="alert" type="button"></button>
</div>
@endif
@if($errors->any())
<div class=" alert alert-danger show fade alert-dismissible " role="alert">
    @foreach($errors->all() as $error)
    {{$error}}
    <button class="btn-Close btn" data-bs-dismiss="alert" type="button"></button>
</div>
    @endforeach
</div>
@endif
    <form action="{{route('auth.login')}}" class="bg-light mt-5 shadow-sm col-md-3 p-5 m-auto" method="post">
        @csrf
        <h4 class="text-center fw-bold">RDL_Login</h4>
        <hr>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="admin_name" required>
        </div>
        <div class="mb-3">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="admin_password" required>
        </div>
        <button class="btn bg-success fw-bold text-light">Login</button>
        <p>Don't have an accound click <a href="{{route('auth.register')}}">Here</a></p>

    </form>
</body>
</html>