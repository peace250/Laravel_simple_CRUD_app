@extends('includes.app')

<div class="parent gap-5">
    <div class="row">
        <div class="col-md-2">
            @section('content')
            @endsection
        </div>
        <div class="col-md-10  ms-auto" style="background-color: whitesmoke; height:100vh">
            <div class="row d-flex  justify-content-between ">
<h3 class="mt-5">Edit Candidate Here</h3>
           
</div>
        <hr>

        <div class="col-md-4 m-auto">
            @if($errors->any())
            <ol>
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ol>
            
            @endif
            <form action="{{route('candidate.update',$fetch->candidate_id)}}" method="post" class="shadow-sm p-5 ">
                @csrf
                @method('put')
                <div class="h4">Edit_Candidate</div>
                <div class="mb-3">
                    <label for="fname">First_Name</label>
                    <input type="text"  name="first_name" class="form-control" value="{{$fetch->first_name}}">
                </div>
                <div class="mb-3">
                    <label for="lname">Last_Name</label>
                    <input type="text"  name="last_name" class="form-control"value="{{$fetch->last_name}}">
                </div>
                <div class="mb-3">
                    <label for="gender">Gender</label>
                  <select name="gender" id="" class="form-select">
                    <option value="female"{{$fetch->gender=='female'?'selected':''}}>female</option>
                    <option value="male"{{$fetch->gender=='male'?'selected':''}}>male</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="dob">DOB</label>
                    <input type="date"  name="dob" class="form-control" value="{{$fetch->dob}}">
                </div>
                <div class="mb-3">
                    <label for="dob">Exam Date:</label>
                    <input type="date"  name="exam_date" class="form-control" value="{{$fetch->exam_date}}">
                </div>
                <div class="mb-3">
                    <label for="dob">Phone:</label>
                    <input type="number"  name="phone_number" class="form-control" value="{{$fetch->phone_number}}">
                </div>
                <button class="btn btn-sm btn-success text-light fw-bold">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

