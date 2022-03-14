@extends('layouts.admin')
@section('content')
<div class="content">
 
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-warning">
        <h4 class="card-title">Employees Stats</h4>
        <p class="card-category">New employees on 15th September, 2016</p>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>ID</th>
            <th>Restoran Name</th>
            <th>Address</th>
            <th></th>
          </thead>
          <tbody>
           @foreach($Restaurant as $Restauran)
           <tr>
            <td>{{$Restauran->restaurant_name}}</td>
            <td>{{$Restauran->contact_name}}</td>
            <td>{{$Restauran->phone}}</td>
            <td>{{$Restauran->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
@endsection
