@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
            <br><br>
            <h3>All jobs</h3>
            <div class="row">
                @foreach($jobs as $job)    
                    <div class="col-sm-4"> 
                        <div class="card" >
                        <a href="{{ route('jobs', ['id' => $job->id]) }}"><img src="{{ asset('images/') }}/{{$job->image}}" alt="" class="img-fluid" style='max-height: 250px'></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center;">{{$job->name}}</h5>
                            <div class="card-content">
                                <p>Job Description</p><br>
                                Salary: RM {{$job->salary}} <br>
                                Gender: {{$job->gender}}<br>
                                Position: {{$job->position}}<br>
                                {{$job->FullPart}}<br>
                                Skill Required: {{$job->skill}}<br>
                                Contact Number:{{$job->Tel}}
                            </div>
                            <button style="float:right" class="btn btn-danger btn-xs">Add to Wishlist</button>
                        </div>
                    </div>
            </div>
        </div>
           @endforeach  
        </div>
        <br><br>
    </div>
           <div class="col-sm-2"></div>
</div>
@endsection    