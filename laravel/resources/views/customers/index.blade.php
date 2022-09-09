@include('plantilla');
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="customer">
            <thead>
                <tr>
                    <th>Id #</th>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $info)
                <tr>
                    <td>{{$info->customer_id}}
                    <td>{{$info->customer_id_number}}</td>
                    <td>{{$info->customer_name}}</td>
                    <td>{{$info->customer_birth_date}}</td>
                    <td>{{$info->customer_address}}</td>
                    <td>{{$info->customer_phone}}</td>
                    <td>{{$info->city_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>
<script>
      $('#customer').DataTable({
        responsive:true,
        autoWidth:false
      });
</script>