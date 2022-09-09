<div class="container">
    @include('plantilla')
    <br>
    <br>
    <!--Form create city-->

    <h3>Insert Products</h3>
    <form class="row g-3" action="{{url('/products')}}" method="post" enctype="multipart/form-data">
    @csrf  
    <div class="col-6">
    <br>
    <br>
    <label for="productdescription" class="form-label">Description</label>
    <input type="text" class="form-control"  id="productdescription" placeholder="Description" name="product_description" required>
    <br>
    <label for="amount" class="form-label">Amount</label>
    <input type="number" class="form-control"  id="amount" placeholder="Amount" name="product_amount" required> 
    <br>
    <label for="value" class="form-label">Value</label>
    <input type="number" class="form-control"  id="value" placeholder="Value" name="product_value" required>
    <br>
    <label for="orderstatus" class="form-label">Status</label>
    <input type="text" class="form-control" id="orderstatus" placeholder="Status" name="product_status" required>
    <br>
    <br>
    <button type="submit" class="btn btn-primary mb-3">Save</button>
    </div>
    </form>
    <br>


    <!--Table data-->
    <div class="card col-md-8">
        <div class="card-body">
    <table class="table table-striped col-md-6" id="tblproducts">
        <thead>
                <tr>
                    <th>id</th>
                    <th>Id customer</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Date Delivery</th>
                    <th>Status</th>
                    <th>Acciones</th>
                </tr>
        </thead>
        <tbody>

                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_amount}}</td>
                    <td>{{$product->product_value}}</td>
                    <td>{{$product->product_status}}</td>
                    <td>
                        <a href="{{url('/products/'.$product->id.'/edit')}}">
                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                        </a> 
                        
                        <form method="post" action="{{url('/products/'.$product->id)}}">
                        {{csrf_field()}} 
                        {{ method_field('DELETE')}}
                        <button class="fa-solid fa-trash text-danger" onclick="return confirm('Are you sure');"></button>
                        </form>
                        <!--
                        <input type="submit" onclick="return confirm('¿Are you sure?')" value="Delete" class="btn btn-danger">
                        -->    
                    </td>
                </tr>
                @endforeach
        </tbody>
        </table>
    </div>
</div>


<script>
      $('#tblproducts').DataTable({
        responsive:true,
        autoWidth:false
      });
</script>
