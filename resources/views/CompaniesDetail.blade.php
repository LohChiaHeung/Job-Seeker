@extends('layout')
@section('content')
<div class="container">
    <div class="row" style="min-height:470px">
        @foreach($companies as $company)
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card-body">
            <h5 class="name">{{$company->companyName}}</h5>
            <div class="row">
                <div class="col-md-4" style="align-items:center">
                    <input type="hidden" name="companyID" value="{{$company->companyID}}">
                    <img src="{{ asset('images/') }}/{{$company->companyLogo}}" width="150" height="110" class="img-fluids" alt="">
                </div>
                <div class="col-md-8" style="align-items:center">
                    <div class="card-body">
                    Company Name           :{{$company->companyName}}<br>
                    Company Size           :{{$company->companySize}}<br>
                    Company PhoneNumbers   :{{$company->companyTelephone}} <br>
                    Company Email          :{{$company->companyEmail}} <br>
                    Additional Information :{{$company->companyAdditionalInfo}}
                    </div>
                </div>                                             
            </div>
            </div>
        </div>
        <br>
        @endforeach
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection

<style>
    .img-fluids {
    width:230px;
    height:230px;
}
</style>