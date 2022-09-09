@include('plantilla')
<h1>Cities index</h1>

<!--Form create city-->

<form class="row g-3" action="{{url('/cities')}}" method="post" enctype="multipart/form-data">
@csrf  
 <div class="col-auto">
    
    <input type="text" class="form-control"  id="cityname" placeholder="City Name">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Save</button>
  </div>
</form>