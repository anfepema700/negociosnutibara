@include('plantilla');
<center>
<h1>Create cities</h1>
<br><br>
<div class="container">
    
<form action="{{url('/cities')}}" method="post" enctype="multipart/form-data">
@csrf
<h1>Formulario cities</h1>
<label for="cityname"> City Name:   </label>
<input type="text" name="city_name" id="cityname">
<input type="submit" value="Guardar" class="btn btn-primary">
</div>

</form>
</center>