@extends('layouts.app')
@section('content')
@guest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                
                <div class="card-body">
                <a href="{{ url('auth/facebook') }}" style="margin-top: 20px;" class="btn btn-lg btn-primary btn-block">
                                  <strong> Facebook Login </strong>
                 </a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
@endsection
