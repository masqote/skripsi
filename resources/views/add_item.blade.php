@extends('layouts.master')

@section('content')

<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Item
                </div>
                <div class="panel-body">

                	<!-- Form -->
                	<form action="/add_item" method="post">
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Material Name</label>
						      <input type="text" class="form-control" id="material_name" name="material_name" placeholder="CS Charcoal..." required="">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Item Code</label>
						      <input type="text" class="form-control" id="item_code" name="item_code" placeholder="X...." required="">
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputState">Group</label>
						      <select id="inputState" class="form-control" name="group" >
						        <option selected>Choose...</option>
						        <option>A</option>
						        <option>B</option>
						        <option>C</option>
						        <option>D</option>
						        <option>E</option>
						        <option>F</option>
						        <option>AA</option>
						        <option>AB</option>
						        <option>AC</option>
						        <option>AX</option>
						        <option>A-240 / 18</option>
						        <option>A-240 / 22</option>
						        <option>Consumable - Production</option>
						        <option>PACKED BRIQUETTES</option>
						        <option>SEMI FINISHED PACKAGING MATERIAL</option>
						        <option>FINISHED PRODUCT</option>
						        <option>SINGLE PACKAGING MATERIAL</option>
						        <option>Reject</option>
						      </select>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputZip">UoM</label>
						      <input type="text" class="form-control" id="uom" name="uom" placeholder="Kg,Gram,Litter" required="">
						    </div>
						  </div>
						  <div class="form-group col-md-1">
						  <input type="submit" class="btn btn-primary" name="submit" value="Submit" >
						  {{ csrf_field() }}
						  </div>
					</form>
                </div>

                <hr>
            <div class="panel panel-default">
               <div class="panel-heading">
                    Item List
               </div>
                	<table class="table table-striped" id="andre" name="andre">
					  <thead>
					    <tr></tr>>
					      <th scope="col">ID</th>
					      <th scope="col">Material Name</th>
					      <th scope="col">Item Code</th>
					      <th scope="col">Group</th>
					      <th scope="col">UoM</th>
					      <th scope="col">Edit</th>
					      <th scope="col">Delete</th>
					    </tr>
					  </thead>
					  <tbody >
					  	@foreach($add_item as $add_items)
					    <tr>
					    <td> {{$add_items->id}} </td>
					    <td> {{$add_items->material_name}} </td>
					    <td> {{$add_items->item_code}} </td>
					    <td> {{$add_items->group}} </td>
					    <td> {{$add_items->uom}} </td>
					    <td> <a href="/add_item/{{$add_items->id}}"><input type="submit" name="edit" value="Edit" class="btn btn-warning"></a>  </td>
					    <td> 
					    <form action="/add_item/{{$add_items->id}}" method="post">
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

