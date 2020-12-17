@extends('master')
@include('flash-message')
@section("content")
<div class="container-fluid bg-light">
 	
 	<div class="row pc-5">
 		<div class="col-md-7">
 			<div class="shopping-cart">
 				<h6 class="text-capitalize" style="color: orange; font-size: 30px;">{{Session::get('user')['name']}}'s Orders</h6>
                 <hr>
                 @foreach($orders as $item)
                <div class="border rounded cart-list-divider">
                    <div class="row bg-white">
                        <div class="col-md-3 pl-0">
                            <img class="trending-image" src="{{$item->gallery}}">
                
                        </div>
                        <div class="col-md-6">
                            <h5 class="pt-2">Name : {{$item->name}}</h5>
                            <small class="text-secondary">Seller:cimi</small>
                            <h5 class="pt-2"> Price : {{$item->price}}</h5>
                            <h5 class="pt-2">Address : {{$item->address}}</h5>
                            <h5 class="pt-2">Payment Status : {{$item->payment_status}}</h5>
                            <h5 class="pt-2">Payment Method : {{$item->payment_method}}</h5>
                            <h5 class="pt-2">Delivery Status : {{$item->status}}</h5>

                           
                        </div>
                        <div class="col-md-3 py-5">
                           
                
                        </div>
                
                
                    </div>
                
                </div>
                @endforeach
              
              </div>
         </div>
        </div>
</div>

</div>
@endsection


