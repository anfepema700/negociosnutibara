@include('plantilla');
<h1>Edit cities</h1>
<h1>Formulario cities</h1>
<form action="{{url('/cities/'.$city->city_id_id)}}" method="post">

{{metho_field('PATCH')}}
<label for="city_name"> City Name:   </label>
<input type="text" name="city_name" id="city_name" value="{{$city->city_name}}">
<input type="submit" value="Guardar" class="btn btn-primary">
</div>


</form>
