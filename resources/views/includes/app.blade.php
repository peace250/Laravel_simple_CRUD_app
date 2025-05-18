<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar
     navbar-expand 
     d-flex
      justify-content-between
      align-items-start
      p-3
       shadow-sm
        flex-column
         col-md-2
          fixed-top
           h-100 "
           style="box-shadow: 0px 0px 50px rgba(0,0,0,0.1)"
        >
       <div class="nav-brand"><a href="" class="text-decoration-none fw-bold text-black">RDL_SYSTEM</a></div> 
       <ul class="d-flex flex-column gap-3 list-unstyled">
        <li><a href="{{route('candidate.index')}}" class="text-decoration-none fw-bold text-black">Home</a></li>
        <hr>
        <li><a href="{{route('candidate.index')}}" class="text-decoration-none fw-bold text-black">Candidate</a></li>
        <hr>
        <li><a href="{{route('grade.index')}}" class="text-decoration-none fw-bold text-black">Grades</a></li>
      
        <hr>
        <li><a href="{{route('grade.report')}}" class="text-decoration-none fw-bold text-black">Report</a></li>
      
    </ul>
       <div class="">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class=" btn btn-outline-danger">Logout</button>
        </form>
       </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>