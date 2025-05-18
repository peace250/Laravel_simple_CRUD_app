<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL_register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

</head>
<body class="" style="background-color: whitesmoke">
    @if($errors->any())
<div class=" alert alert-danger show fade alert-dismissible " role="alert">
    @foreach($errors->all() as $error)
    {{$error}}
    <button class="btn-Close btn" data-bs-dismiss="alert" type="button"></button>
</div>
    @endforeach
</div>
@endif
    <form action="{{route('auth.register')}}" class="bg-white mt-lg-5 shadow-sm col-md-3 p-5 m-auto" method="post">
        @csrf
        <h5 class="fw-bold">RDL_register</h5>
        <hr>
        <hr>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="admin_name">
        </div>
        <div class="mb-3">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="admin_password">
        </div>
        <button class="btn bg-success text-light fw-bold">Register</button>
        <p>Already have an accound click <a href="{{route('login')}}">Here</a></p>
    </form>
</body>
</html>