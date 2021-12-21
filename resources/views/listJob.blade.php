@extends('layout')

@section('content')
		<div class="row">
          @foreach($jobs as $job)    
                        <div class="col-sm-4"> 
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$job->name}}</h5>
                                    <a href="{{ route('jobs', ['id' => $job->id]) }}"><img src="{{ asset('images/') }}/{{$job->image}}" alt="" class="img-fluid" width="300"></a>
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
           @endforeach  
		</div>
@endsection    