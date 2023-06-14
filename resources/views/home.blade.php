@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                <!--Style link!-->              
          
             <ul class="navlist">
                 <li><a href="Dash"><i class="ri-home-2-fill"></i> Dashboard</a></li>
                <li><a href="products"><i class="ri-shopping-cart-2-fill"></i> Shop Now</a></li>
                <li><a href="templates/profile.html"><i class="ri-account-circle-fill"></i> Profile</a></li>
                <li><a href="greet"><i class="ri-account-circle-fill"></i>Cart</a></li>
                <li><a href="templates/notification.html"><i class="ri-notification-3-fill"></i> Notification</a></li>
            </ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

