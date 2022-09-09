<div class="container">
@include('plantilla')

<h3>Update Products</h3>
    <form class="row g-3" action="{{url('/products')}}" method="post" enctype="multipart/form-data">
    @csrf  
    <div class="col-6">
    <br>
    <br>
    <label for="productdescription" class="form-label">Description</label>
    <input type="text" class="form-control"  id="productdescription" placeholder="Description" name="product_description" value="{{$product->product_description}}" required>
    <br>
    <label for="amount" class="form-label">Amount</label>
    <input type="number" class="form-control"  id="amount" placeholder="Amount" name="product_amount" value="{{$product->product_amount}}" required> 
    <br>
    <label for="value" class="form-label">Value</label>
    <input type="number" class="form-control"  id="value" placeholder="Value" name="product_value" value="{{$product->product_value}}" required>
    <br>
    <label for="orderstatus" class="form-label">Status</label>
    <input type="text" class="form-control" id="orderstatus" placeholder="Status" name="product_status" value="{{$product->product_status}}" required>
    <br>
    <br>
    <button type="submit" class="btn btn-primary mb-3">Update</button>
    </div>
    </form>
    </div>