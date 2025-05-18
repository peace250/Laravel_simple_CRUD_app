@extends('includes.app')
<div class="parent gap-5">
    <div class="row">
        <div class="col-md-2">
            @section('content')
            @endsection
        </div>
        <div class="col-md-10  ms-auto" style="background-color: whitesmoke; height:100vh">
            <div class="row d-flex  justify-content-between ">
<h3 class="mt-5">Grade_Here</h3>
</div>
        <hr>
        <div class="col-md-4 m-auto">
            @if($errors->any())
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ol>
            @endif
            <div class="">
                <a href="{{route('grade.create')}}" class="btn btn-outline-primary m-auto">Grade_Here</a>
            </div>
            <hr>
            @if(session('error'))
<div class="alert alert-danger fade show alert-dismissible" role="alert">
    {{session('error')}}
<button class="btn-close" data-bs-dismiss="alert" type="button"></button>
</div>
@endif

@if(session('success'))
<div class="alert alert-success fade show data-bs-dismissible"  role="alert">
{{session('success')}}
    <button class="btn-close" data-bs-dismiss="alert"></button>
@endif

</div>
            <table class="table-striped table-hover table-bordered table table-responsive">
                <thead>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Marks</th>
                    <th>Category</th>
                    <th>Decision</th>
                    <th>Operations</th>
                </thead>
<tbody>
    @foreach ($join as $j)
    <tr>

        <td>{{$j->candidate->first_name}}</td>
        <td>{{$j->candidate->last_name}}</td>
        <td>{{$j->obtained_marks}}</td>
        <td>{{$j->license_exam_category}}</td>
        <td>{{$j->decision}}</td>
        <td class="d-flex gap-3">
            <form action="{{route('grade.delete',$j->grade_id)}}" method="POST">
                @csrf
                @method('delete')
           <button class="btn  btn-outline-danger" type="submit">Delete</button></a>
        </form>
        <a href="{{route('grade.edit',$j->grade_id)}}">
            <button class="btn  btn-outline-primary" type="submit">Update</button>
        </a>
        </td>
    </tr>
    @endforeach

</tbody>
            </table>
        </div>
        </div>
    </div>
</div>

