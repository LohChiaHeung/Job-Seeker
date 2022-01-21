@extends('layout')
@section('content')
<div class="row" style="min-height:470px">
    @foreach($jobs as $job)
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card-body">
            <form action="{{route ('add.to.wishlist')}}" method="POST">
                @CSRF
                <h5 class="name">{{$job->name}}</h5>
                <div class="row">
                    <div class="col-md-4" style="align-items:center">
                        <input type="hidden" name="jobID" value="{{$job->id}}">
                        <img src="{{ asset('images/')}}/{{$job->image}}" alt="" width="100%" class="img-fluid">
                    </div>
                    <div class="col-md-8" style="align-items:center">
                        <div class="card-body">
                            Comapny Name:{{$job->company}} <br>
                            Salary: RM {{$job->salary}} <br>
                            Gender: {{$job->gender}}<br>
                            Position: {{$job->position}}<br>
                            {{$job->FullPart}}<br>
                            Skill Required: {{$job->skill}}<br>
                            Contact Number:{{$job->Tel}}
                        </div>
                        <br>
                        <button class="btn btn-danger btn-xs" type="submit">Add to Wishlist</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
    <div class="col-sm-2"></div>
</div>
@endsection