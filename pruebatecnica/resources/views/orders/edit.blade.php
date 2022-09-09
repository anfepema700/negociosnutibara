<div class="container">
@include('plantilla')

<!--Form create city-->

 <h3>Update Orders</h3>
    <form class="row g-3" action="{{url('/orders')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
{{method_field('PATCH')}}
    

    <div class="col-6">
        <br>
        <label for="customerid" class="form-label">Select customer Id:</label>
        <input type="select" class="form-control"  id="customer_id" placeholder="" name="customer_id" value="{{$order->customer_id}}" required>    
    <br>
    <label for="orderdate" class="form-label">Order date</label>
    <input type="date" class="form-control"  id="orderdate" placeholder="Date" name="order_date" value="{{$order->order_date}}" required>
    <br>
    <label for="ordertotal" class="form-label">Order Total</label>
    <input type="text" class="form-control"  id="ordertotal" placeholder="Total" name="order_total" value="{{$order->order_total}}" required> 
    <br>
    <label for="delivery" class="form-label">Date of Delivery</label>
    <input type="date" class="form-control"  id="delivery" placeholder="Date delivery" name="order_date_delivery" value="{{$order->order_date_delivery}}" required>
    <br>
    <label for="orderstatus" class="form-label">Order Status</label>
    <input type="text" class="form-control" id="orderstatus" placeholder="Status" name="order_status" value="{{$order->order_status}}" required>
    <br>
    <br>
    <button type="submit" class="btn btn-primary mb-3">Update</button>
    </div>
    </form>