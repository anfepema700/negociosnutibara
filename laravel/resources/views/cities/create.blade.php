@include('plantilla');
<center>
<h1>Create cities</h1>
<br><br>
<div class="container">

<<form action="{{url('/cities')}}" method="post" enctype="multipart/form-data" class="row g-3">
@csrf
<div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>





<h1>Formulario cities</h1>
<label for="cityname"> City Name:   </label>
<input type="text" name="city_name" id="cityname">
<input type="submit" value="Guardar" class="btn btn-primary">
</div>

</form>
</center>