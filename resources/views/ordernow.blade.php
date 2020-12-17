@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        
          <div class="col-sm-10 offset-md-1 border rounded mt-5 bg-white h-25" >
            <div class="pt-4">
                <h6 style="color: green;font-size:30px;">Price Details</h6>
                <hr>

                <div class="row price-details">
                    <div class="col-md-6" style="font-weight: bold">
                      <h6 style="font-weight: bold">Amount</h6>
                      <hr>
                      <h6 style="font-weight: bold">Tax</h6>
                      <hr>
                       

                         <h6 style="font-weight: bold">Delivery Charges</h6>
                         <hr>
                           <h6 style="font-weight: bold">Amount Payable</h6>

                    </div>
                    <div class="col-md-6">
                        
                        <h6>Ksh  $ {{$total}} </h6>
                        <hr>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                            <h6>Ksh  $ 10</h6>
                            <hr>
                            <h6 style="border: solid green; ">Ksh  $ {{$total+10}}</h6>
                    </div>
                </div>
            </div>
           
            
        </div>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" name="submitOrder" style="background: green!important; color: white;" class="btn btn-block boton  text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2" ></i>Submit Order</button>
              </form>
          </div>
     </div>
</div>
@endsection 