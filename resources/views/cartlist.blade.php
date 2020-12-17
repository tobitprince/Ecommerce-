@extends('master')
@section("content")
<div class="container-fluid bg-light">
 	
 	<div class="row pc-5">
 		<div class="col-md-7">
 			<div class="shopping-cart">
 				<h6 class="text-capitalize" style="color: orange; font-size: 30px;">{{Session::get('user')['name']}}'s Cart</h6>
                 <hr>
                 @foreach($products as $item)
                <div class="border rounded cart-list-divider">
                    <div class="row bg-white">
                        <div class="col-md-3 pl-0">
                            <img class="trending-image" src="{{$item->gallery}}">
                
                        </div>
                        <div class="col-md-6">
                            <h5 class="pt-2">{{$item->name}}</h5>
                            <small class="text-secondary">Seller:cimi</small>
                            <h5 class="pt-2">{{$item->price}}</h5>
                            <button type="submit" class="btn btn-warning">save for later</button>
                            <a href="/removefromcart/{{$item->cart_id}}" class="btn btn-danger mx-2">Remove</a>
                        </div>
                        <div class="col-md-3 py-5">
                            <div>
                                <button class="btn bg-light border rounded-circle img-circle"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                <input type="text" value="1" class="form-control w-25 form-inline">
                                <button class="btn bg-light border img-circle"><i class="fa fa-plus" aria-hidden="true"></i></i></button>
                
                            </div>
                
                        </div>
                
                
                    </div>
                
                </div>
                @endforeach
              
              </div>
              
         </div>
        
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25" style="padding-left: 70px; padding-top:200px;">
            
            <div class="pc-3">
                <a class="btn btn-block boton  text-uppercase contact-btn" style="background: green!important; color: white;" href="ordernow"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Order Now</a><br><br>
              </div>
            
        </div>
     </div>
</div>




@endsection


