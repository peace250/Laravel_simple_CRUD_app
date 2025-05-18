@extends('includes.app')
<div class="parent">
    <div class="row">
        <div class="col-md-2">
            @section('content')
            @endsection
        </div>
        <div class="col-md-9  ms-auto " style="background-color: whitesmoke; height:100vh">
            <div class="row d-flex  justify-content-between ">
<h3 class="mt-5">Grade_Here</h3>
</div>
        <hr>
        <div class="col-md-4 m-auto">
     @if($errors->any())
<div class=" alert alert-danger show fade alert-dismissible " role="alert">
    @foreach($errors->all() as $error)
    {{$error}}
    <button class="btn-Close btn" data-bs-dismiss="alert" type="button"></button>
</div>
    @endforeach
</div>
@endif
            <form action="{{route('grade.store')}}" method="post" class="shadow-sm p-5 ">
                @csrf
                <h4>Grade_Here</h4>
                <hr>
                <div class="mb-3">
                    <label for="candidate">Candidate</label>
<select name="candidate_id" id="" class="form-select">
    <option value="" selected disabled ></option>
@foreach ($candidates as $candidate)
<option value="{{$candidate->candidate_id}}">{{$candidate->first_name}}</option>
@endforeach
    </select>        
        </div>
                <div class="mb-3">
                    <label for="">LicenceExamCategory</label>
<select name="license_exam_category" id="" class="form-select">
    <option value="" selected disable></option>
<option value="A">Truck(A)</option>
<option value="B">Car(B)</option>
<option value="C">Motorcycle(C)</option>
</select>
                </div>
              <div class="mb-3">
                <label for="marks">Marks</label>
                <input type="number" name="obtained_marks" required class="form-control">
              </div>

                <button class="btn btn-sm btn-success text-light fw-bold">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

