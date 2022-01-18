@extends('layout')
@section('content')
<div class="container fluid mx-10">
    <div class="row mb-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="mt-3">Jobs Available</h3>
            <div class="row">
                @foreach($jobs as $job)
                <div class="col-sm-4 mb-2">
                    <div class="card p-2" style="width:19rem;height:30rem">
                        <h5 class="card-title" style="text-align:center; margin-top:7px">{{$job->name}}</h5>
                        <img class="card-img-top img-fluid img-thumbnail" src="{{ asset('images/') }}/{{$job->image}}" alt="job" style="height:50%" >
                        <div class="card-body" style="text-align:center;">
                            Salary: RM {{$job->salary}} <br>
                            Gender: {{$job->gender}}<br>
                            Position: {{$job->position}}
                        </div> 
                        <a href="{{ route('job.detail', $job->id) }}" class="btn btn-primary" style="margin:auto;">View</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection 



<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
</style>
   
