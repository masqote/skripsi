@extends('layouts.master')

@section('content')
<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Project
                </div>
                <div class="panel-body">
                  <table class="table table-striped" id="andre" name="andre">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Internal Number</th>
                          <th scope="col">Local / Export</th>
                          <th scope="col">Container Number</th>
                          <th scope="col">Stuffing Date</th>
                          <th scope="col">Update</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody >
                        @foreach($list as $lists)
                        <tr>
                        <td> {{$lists->id}} </td>
                        <td> {{$lists->internal_number}} </td>
                        <td> {{$lists->local_export}} </td>
                        <td> {{$lists->container_no}} </td>
                        <td> {{$lists->stuffing_date}} </td>

                        <td> <a href="/list_project/{{$lists->id}}"><input type="submit" name="update" value="Update" class="btn btn-info"></a>  </td>

                        <td> <a href="/list_project/{{$lists->id}}/edit"><input type="submit" name="edit" value="Edit" class="btn btn-warning"></a>  </td>
                        <td> 
                        <form action="/list_project/{{$lists->id}}" method="post">
                            <input type="submit" class="btn btn-danger" name="delete" value="Delete" >
                              {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE"> 
                        </form>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
    </div>

    <script>

$(document).ready( function () {
    $('#andre').DataTable();
} );
</script>

@endsection