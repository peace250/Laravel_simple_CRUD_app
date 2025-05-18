@extends('includes.app')
<div class="parent gap-5">
    <div class="row">
        <div class="col-md-2">
            @section('content')
            @endsection
        </div>
        <div class="col-md-10  ms-auto" style="background-color: whitesmoke; height:100vh">
            <div class="row d-flex  justify-content-between ">
<h3 class="mt-5">Report</h3>
<p>Here is a list of all the candidates registered and their grades</p>
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
           
            <hr>
            <div class="col-md-12">
                            <table class="table-striped table-hover table-bordered table table-responsive w-100">
               
               @if($errors->any())
<div class="alert alert-danger show fade alert-dismissible" role="alert">
    @foreach($errors->all() as $error)
    {{$error}}
    <button class="btn-Close btn" data-bs-dismiss="alert" type="button"></button>
</div>
    @endforeach
</div>
@endif
                                <thead>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Exam_Date</th>
                    <th>Marks</th>
                    <th>Category</th>
                    <th>Decision</th>
                </thead>
<tbody>
    @foreach ($join as $j)
    <tr>

        <td>{{$j->candidate->first_name}}</td>
        <td>{{$j->candidate->last_name}}</td>
        <td>{{$j->candidate->exam_date}}</td>
        <td>{{$j->obtained_marks}}</td>
        <td>{{$j->license_exam_category}}</td>
        <td>{{$j->decision}}</td>
    
    </tr>
    @endforeach

</tbody>
            </table>
            </div>

        </div>
        </div>
    </div>
</div>

