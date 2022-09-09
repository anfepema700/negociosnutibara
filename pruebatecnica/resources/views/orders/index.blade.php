<div class="container">
    @include('plantilla')
    <br>
    <br>
    <!--Form create city-->

    <h3>Insert Orders</h3>
    <form class="row g-3" action="{{url('/orders')}}" method="post" enctype="multipart/form-data">
    @csrf  
    <div class="col-6">
        <br>
        <label for="customerid" class="form-label">Select customer Id:</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" autofocus name="customer_id" id="customerid" required>
    @foreach($customers as $customer)
    <option value="{{$customer->id}}">{{$customer->id}}</option>
    @endforeach
    </select>
    <br>
    <label for="orderdate" class="form-label">Order date</label>
    <input type="date" class="form-control"  id="orderdate" placeholder="Date" name="order_date" required>
    <br>
    <label for="ordertotal" class="form-label">Order Total</label>
    <input type="text" class="form-control"  id="ordertotal" placeholder="Total" name="order_total" required> 
    <br>
    <label for="delivery" class="form-label">Date of Delivery</label>
    <input type="date" class="form-control"  id="delivery" placeholder="Date delivery" name="order_date_delivery" required>
    <br>
    <label for="orderstatus" class="form-label">Order Status</label>
    <input type="text" class="form-control" id="orderstatus" placeholder="Status" name="order_status" required>
    <br>
    <br>
    <button type="submit" class="btn btn-primary mb-3">Save</button>
    </div>
    </form>
    <br>


    <!--Table data-->
    <div class="card col-md-8">
        <div class="card-body">
    <table class="table table-striped col-md-6" id="tblorders">
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

                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->customer_id}}</td>
                    <td>{{$order->order_date}}</td>
                    <td>{{$order->order_total}}</td>
                    <td>{{$order->order_date_delivery}}</td>
                    <td>{{$order->order_status}}</td>
                    <td>
                        <a href="{{url('/orders/'.$order->id.'/edit')}}">
                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                        </a> 
                        
                        <form method="post" action="{{url('/orders/'.$order->id)}}">
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
      $('#tblorders').DataTable({
        responsive:true,
        autoWidth:false
      });
</script>
