@extends('layout')
@section('content')
<div class="container fluid mx-10">
    <div class="row mb-3" style="min-height:480px">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="mt-3">Companies Available</h3>
            <div class="row">
                @foreach($companies as $company)
                <div class="col-sm-4 mb-2">
                    <div class="card p-2" style="width:19rem;height:30rem">
                        <h5 class="card-title" style="text-align:center; margin-top:7px">{{$company->companyName}}</h5>
                        <img class="card-img-top img-fluid img-thumbnail" src="{{ asset('images/') }}/{{$company->companyLogo}}" alt="job" style="height:50%" >
                        <div class="card-body" style="text-align:center;">
                            Location:{{$company->companyLocation}} <br>
                            Size:    {{$company->companySize}}<br>
                            PhoneNum:{{$company->companyTelephone}} <br>
                            Email:{{$company->companyEmail}}
                        </div> 
                        <a href="{{ route('companies.detail', $company->id) }}" class="btn btn-primary" style="margin:auto;">View</a>
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
.card.p-2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  background-color:skyblue;
}

.card.p-2:hover{
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  background-color:00ffff;
}

.card-title {
    font-family:sans-serif;
    font-size:25px;
}
</style>