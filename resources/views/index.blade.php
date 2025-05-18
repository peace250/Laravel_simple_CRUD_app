@extends('includes.app')

<div class="parent gap-5">
    <div class="row">
        <div class="col-md-2">
            @section('content')
            @endsection
        </div>
        <div class="col-md-10 border border-primary ms-auto">
            <div class="row d-flex  justify-content-between border border-success">
<h3 class="mt-5">Admin's dashboard</h3>
<button class="btn bg-primary text-light" style="width: fit-content; ">Add Candidate</button>
            </div>
        <hr>
        </div>
    </div>
</div>

