@extends('includes.app')

<div class="parent gap-5">
    <div class="row">
        <div class="col-md-2">
            @section('content')
            @endsection
        </div>
        <div class="col-md-10  ms-auto" style="background-color: whitesmoke; height:100vh">
            <div class="row d-flex  justify-content-between ">
<h3 class="mt-5">Add Candidate Here</h3>
           
</div>
        <hr>


        <div class="col-md-4 m-auto">
            <form action="" method="post" class="shadow-sm p-5 ">
                @csrf
                <div class="h4">Register_Candidate</div>
                <div class="mb-3">
                    <label for="fname">First_Name</label>
                    <input type="text"  name="first_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lname">Last_Name</label>
                    <input type="text"  name="last_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="gender">Gender</label>
                  <select name="gender" id="" class="form-select">
                    <option value="" selected disabled></option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="dob">DOB</label>
                    <input type="date"  name="dob" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dob">Exam Date:</label>
                    <input type="date"  name="exam_date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dob">Phone:</label>
                    <input type="number"  name="phone_number" class="form-control">
                </div>
                <button class="btn btn-sm btn-success text-light fw-bold">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

