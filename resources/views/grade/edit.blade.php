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
<div class=" alert alert-danger show fade alert-dismissible " role="alert">
    @foreach($errors->all() as $error)
    {{$error}}
    <button class="btn-Close btn" data-bs-dismiss="alert" type="button"></button>
</div>
    @endforeach
</div>
@endif
            <form action="{{route('grade.update',$fetch->grade_id)}}" method="post" class="shadow-sm p-5 ">
                @csrf
                @method('put')
                <h4>Grade_Here</h4>
                <hr>
                <div class="mb-3">
                    <label for="candidate">Candidate</label>
<select name="candidate_id" id="" class="form-select">
    <option value="{{$fetch->candidate->candidate_id}} ">
        {{$fetch->candidate->first_name.' '.$fetch->candidate->last_name}}
    </option>

    </select>        
        </div>
                <div class="mb-3">
                    <label for="">LicenceExamCategory</label>
<select name="license_exam_category" id="" class="form-select">
<option value="A"{{$fetch->license_exam_category=='A'?'selected':''}}>Truck(A)</option>
<option value="B"{{$fetch->license_exam_category=='B'?'selected':'' }}>Car(B)</option>
<option value="C"{{$fetch->license_exam_category=='C'?'selected':''}}>Motorcycle(C)</option>
</select>
                </div>
              <div class="mb-3">
                <label for="marks">Marks</label>
                <input type="number" name="obtained_marks" required class="form-control" value="{{$fetch->obtained_marks}}">
              </div>
                <button class="btn btn-sm btn-success text-light fw-bold">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>

