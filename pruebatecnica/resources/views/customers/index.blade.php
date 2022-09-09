<div class="container">
@include('plantilla')
<br>
<br>
<!--Form create city-->

<h3>Insert Customers</h3>
<form class="row g-3" action="{{url('/customers')}}" method="post" enctype="multipart/form-data">
@csrf  
 <div class="col-6">
    <br>
 <input type="text" class="form-control" autofocus  id="idnumber" placeholder="Id Number" name="customer_id_number" required>
 <br>
 <input type="text" class="form-control"  id="name" placeholder="Name" name="customer_name" required>
 <br>
 <input type="date" class="form-control"  id="birthday" placeholder="Birthday" name="customer_birth_date" required> 
 <br>
 <input type="text" class="form-control"  id="address" placeholder="Address" name="customer_address" required>
 <br>
 <input type="phone" class="form-control" id="phonenumber" placeholder="Phone number" name="customer_phone" required>
 <br>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="city_id" required>
@foreach($cities as $city)
 <option value="{{$city->id}}">{{$city->city_name}}</option>
 @endforeach
</select>
 <br>
 <button type="submit" class="btn btn-primary mb-3">Save</button>
</div>
</form>
<br>
<!--Table data-->


<div class="card col-md-8">
    <div class="card-body">
        <table class="table table-striped col-md-6" id="tblcities">
    <thead>
        <tr>
            <th>id</th>
            <th>Id Number</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Phone</th>
            <th>City</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->customer_id_number}}</td>
            <td>{{$customer->customer_name}}</td>
            <td>{{$customer->customer_birth_date}}</td>
            <td>{{$customer->customer_address}}</td>
            <td>{{$customer->customer_phone}}</td>
            <td>{{$customer->city_id}}</td>
         
            <td>
                
            <a href="{{url('/customers/'.$customer->id.'/edit')}}">
                <i class="fa-solid fa-pen-to-square text-primary"></i>
                </a> 
                <form method="post" action="{{url('/customers/'.$customer->id)}}">
                {{csrf_field()}} 
                {{ method_field('DELETE')}}
                   <button class="fa-solid fa-trash text-danger" onclick="return confirm('Are you sure');"></button>
                </form>
                <!--
                <input type="submit" onclick="return confirm('¿Are you sure?')" value="Delete" class="btn btn-danger">
                -->    
            </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

</div>
<script>
      $('#tblcities').DataTable({
        responsive:true,
        autoWidth:false
      });
</script>