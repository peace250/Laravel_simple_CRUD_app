@extends('includes.app')


<div class="parent gap-5">
    <div class="row">
        <div class="col-2">
            @section('content')
            @endsection
        </div>
        <div class="col-10  ms-auto p-3" style="background-color: whitesmoke; height:100vh">
            <h3 class="mt-5">Admin's dashboard</h3>
        <hr>
   <div class="row d-flex  ">
<button class="btn btn-outline-primary ms-auto" style="width: fit-content; " type="submit"><a href="{{route('candidate.create')}}" class="text-decoration-none">Add candidate</a></button>
            </div>

        <div class="col-md-8 m-auto">
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
</div>
@endif
            <table class="table table-bordered table-hover table-striped table-sm">
                <tr>
                    <thead class="thead-dark">
                        <th>No</th>
                        <th>Fname</th>
                        <th>Lname</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Exam Date</th>
                        <th>Phone</th>
                        <th>Operations</th>
                    </thead>
                </tr>
                <tbody>
                    <?php  $index=1?>
                @foreach($candidates as $candidate)
                <tr>
                    <td>{{$index++}}</td>
                    <td>{{$candidate->first_name}}</td>
                    <td>{{$candidate->last_name}}</td>
                    <td>{{$candidate->gender}}</td>
                    <td>{{$candidate->dob}}</td>
                    <td>{{$candidate->exam_date}}</td>
                    <td>{{$candidate->phone_number}}</td>
                  <td class="d-flex  gap-3">
                    <form action="{{route('candidate.destroy',$candidate->candidate_id)}}" method="post">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-outline-danger fw-bold ">Delete</button>
                    </form>
                        <a  href="{{route('candidate.edit', $candidate->candidate_id)}}" class="fw-bold btn btn-outline-primary">Edit</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

