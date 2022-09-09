@include('plantilla');
<center>
    <h1>Insert city</h1>

    <form action="{{url('/cities')}}" method="post" enctype="multipart/form-data">
@csrf
@include('cities.form')
</form>

    
<h1>Cities list</h1>
</center>





<div class="card">
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
            <td>{{$city->city_id_id}}</td>
            <td>{{$city->city_name}}</td>
            <td>
                <a href="{{url('/cities/'.$city->city_id_id.'/edit')}}">
                                Editar
                </a>
                
            | 
                <form action="{{ url('/cities/'.$city->city_id_id)}}" method="post">
                @csrf 
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Are you sure?')" value="Delete" class="btn btn-danger">
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