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
                    <!-- instagram and paypal call buttons -->
                    <a href="{{ route('payment') }}" class="btn btn-primary">Donate $10 from Paypal</a>
                    <a  onclick="takeUsername()" role = "button" class="btn btn-primary">connect instagram</a>
                </div>
              </div>
            </div>
        </div>
        <!-- instagram display image -->
        <div class="row mt-5">
           @isset($imageLinks)
                @for($i=0;$i<sizeof($imageLinks);$i++)
                     <div class="col-lg-4"> 
                         <img class="img-responsive mx-auto" src="{{$imageLinks[$i]}}" width=350 height=350>
                     </div>
                 @endfor
            @endisset
        </div>
    </div>
</div>


<script>
function takeUsername()
{var customerName = prompt("Please enter your username", "<user name should be public to connect>");

if (customerName!= null) {
console.log(customerName)
var url = "{{ route('instagram', ':name') }}";
url = url.replace(':name',customerName);

window.location.href=url;
}
}
</script>
@endsection
