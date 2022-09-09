<div class="container">
@include('plantilla')

<h3>Insert Customers</h3>
<form class="row g-3" action="{{url('/customers/'.$customer->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
 <div class="col-6">
    <br>
 <input value="{{$customer->customer_id_number}}" type="text" class="form-control" autofocus  id="idnumber" placeholder="Id Number" name="customer_id_number" required>
 <br>
 <input value="{{$customer->customer_name}}" type="text" class="form-control"  id="name" placeholder="Name" name="customer_name" required>
 <br>
 <input value="{{$customer->customer_birth_date}}" type="date" class="form-control"  id="birthday" placeholder="Birthday" name="customer_birth_date" required> 
 <br>
 <input value="{{$customer->customer_address}}" type="text" class="form-control"  id="address" placeholder="Address" name="customer_address" required>
 <br>
 <input value="{{$customer->customer_phone}}" type="phone" class="form-control" id="phonenumber" placeholder="Phone number" name="customer_phone" required>
 <br>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="city_id" required>

 <option value="{{$customer->city_id}}">{{$customer->city_id}}</option>

</select>
 <br>
 <button type="submit" class="btn btn-primary mb-3">Update</button>
</div>
</form>
</div>