@extends('layouts.master')


@section('content')
<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Item List
                </div>
                <div class="panel-body">
                	<div class="container-fluid">
                	<!-- Form -->
                	<form action="/add_item/{{$item->id}}" method="post">
						  <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4">Internal Number</label>
						      <input type="text" class="form-control" id="internal_number" name="internal_number" value="{{$item->internal_number}}">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="export/local">Local / Export</label>
				                <select id="inputState" class="form-control" name="local_export">
				                    <option selected>{{$item->local_export}}</option>
				                    <option value="local">Local</option>
				                    <option value="export">Export</option>
				                </select>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4">Original Port</label>
						      <input type="text" class="form-control" id="original_port" name="original_port" value="{{$item->original_port}}">
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputZip">Destination Port</label>
						      <input type="text" class="form-control" id="destionation_port" name="destination_port" value="{{$item->destination_port}}">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputZip">Container No</label>
						      <input type="text" class="form-control" id="container_no" name="container_no" value="{{$item->container_no}}">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputZip">Seal No</label>
						      <input type="text" class="form-control" id="seal_no" name="seal_no" value="{{$item->seal_no}}">
						    </div>
						  </div>
						  <div class="form-row">
						  	<div class="form-group col-md-2">
						      <label for="inputZip">Container Size</label>
						      <input type="text" class="form-control" id="container_size" name="container_size" value="{{$item->container_size}}">
						    </div>
						    <div class="form-group col-md-2">
						      <label for="inputZip">Stuffing Date</label>
						      <input type="text" class="form-control" id="datepicker123" name="stuffing_date" value="{{$item->stuffing_date}}">
						    </div>
						  </div>
						  <div class="col-md-7">
			                <label for="material">Material Name</label>
			                  <select id="material" class="form-control" name="material[]" >
			                    	@foreach($item1 as $item123)
			                    	<option value="{{$item123->id}}">
			                    		{{$item123->item_code}}
			                    	</option>
			                    	@endforeach
			                      @foreach($add_item as $row)
			                        <option value="{{ $row->id }}">{{$row->material_name .' - '.$row->item_code}}</option>
			                      @endforeach
			                  </select>
			              </div>

							  <div class="form-group col-md-1">
							  	<br>
							  <input type="submit" class="btn btn-warning" name="update" value="Update" >
							  {{ csrf_field() }}
							  <input type="hidden" name="_method" value="PUT">
							  </div>

					</form>
                </div>
            </div>
            </div>
        </div>
<script>
	
	$(function() {
          $( "#datepicker123" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });

</script>
@endsection

