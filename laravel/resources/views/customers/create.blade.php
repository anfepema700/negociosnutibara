@include('plantilla');

<div class="form-group">
       <br><br>
        <div class="container">
          
        <form action="{{url('/customers')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Create Customers</h1>
            <input type="text" name="customer_id_number" id="id" class="form-control">
            <input type="text" name="customer_name" id="name" class="form-control">
            <input type="date" name="customer_birth_date" id="birthday" class="form-control">
            <input type="text" name="customer_address" id="cityname" class="form-control">
            <input type="text" name="customer_phone" id="cityname" class="form-control">
<select name="city_id" id="city" class="form-control">
    @foreach

    <option value="{{$city['city_id_id']}}">{{$city['city_name']}}</option>
    @endforeach    
</select>
            <input type="text" name="city_name" id="cityname" class="form-control">
            <input type="submit" value="Guardar" class="btn btn-primary">
            </div>

        </form>
</div>