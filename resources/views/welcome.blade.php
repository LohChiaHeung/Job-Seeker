@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <img src="{{ asset('images/job_search.png')}}" alt="" class="img-fluid" width=100%  > 
            </div>                    
        </div>
                

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-4" style="text-align: center;">
                <img src="{{ asset('images/Accountant.jpg')}}" width=500 alt="" class="img-fluid" > 
                <p>Accountant</p>
            </div>
             <div class="col-sm-4" style="text-align: center">
                <img src="{{ asset('images/IT.jpg')}}" width=500 alt="" class="img-fluid"> 
                <p>IT Developer</p>           
            </div>
            <div class="col-sm-4" style="text-align: center" >
                <img src="{{ asset('images/Artist.jpg')}}" width=500 alt="" class="img-fluid" > 
                <p>Artist</p>
            </div>                
        </div>
    </div> 
@endsection