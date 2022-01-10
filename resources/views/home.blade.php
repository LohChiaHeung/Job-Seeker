@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="buttoncenter">
                <button type="button" class="btn-rounded buttondesign" onClick="window.location.href='{{route('storeCategory')}}'">start with adding category</button>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
.buttoncenter{
  text-align:center;
  padding-top:10px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  align-items: center;
  color:whitesmoke;
}

.buttoncenter button{
    padding: 5px 28px;
}

.buttondesign {
    border-color: #7c7c7c;
    background-image: -webkit-repeating-linear-gradient(left, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0)   6%, hsla(0,0%,100%, .1) 7.5%),
    -webkit-repeating-linear-gradient(left, hsla(0,0%,  0%,0) 0%, hsla(0,0%,  0%,0)   4%, hsla(0,0%,  0%,.03) 4.5%),
    -webkit-repeating-linear-gradient(left, hsla(0,0%,100%,0) 0%, hsla(0,0%,100%,0) 1.2%, hsla(0,0%,100%,.15) 2.2%),
    
    linear-gradient(180deg, hsl(0,0%,78%)  0%, 
    hsl(0,0%,90%) 47%, 
    hsl(0,0%,78%) 53%,
    hsl(0,0%,70%)100%);
}

.btn-rounded{
    border-radius:10px;
}
</style>