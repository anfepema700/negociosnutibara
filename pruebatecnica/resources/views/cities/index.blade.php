<div class="container">
@include('plantilla')
<br>
<br>
<!--Form create city-->

<h3>Insert city</h3>
<form class="row g-3" action="{{url('/cities')}}" method="post" enctype="multipart/form-data">
@csrf  
 <div class="col-auto">
    
 <input type="text" class="form-control" autofocus  id="cityname" placeholder="City Name" name="city_name">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Save</button>
  </div>
</form>

<br>
<br>
<!--Table data-->


<div class="card col-md-8">
    <div class="card-body">
        <table class="table table-striped col-md-6" id="tblcities">
    <thead>
        <tr>
            <th>ID Name</th>
            <th>City Name</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->city_name}}</td>
            <td>
                <a href="{{url('/cities/'.$city->id.'/edit')}}">
                <i class="fa-solid fa-pen-to-square text-primary"></i>
                </a> 
                <form method="post" action="{{url('/cities/'.$city->id)}}">
                <a href="{{url('/cities/'.$city->id)}}">
                {{csrf_field()}} 
                {{ method_field('DELETE')}}
                   <button onclick="return confirm('Are you sure');"><i class="fa-solid fa-trash text-danger"></i></button>
                </a>
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

</div>
<script>
      $('#tblcities').DataTable({
        responsive:true,
        autoWidth:false
      });
</script>