@include('plantilla')
<form class="row g-3" action="{{url('/cities/'.$city->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
 <div class="col-auto">
    
 <input type="text" class="form-control"  id="cityname" placeholder="City Name" name="city_name" value="{{$city->city_name}}">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Update</button>
  </div>
</form>