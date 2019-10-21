@extends('layouts.master')

@section('content')
<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Item List
                </div>
                <div class="panel-body">
                	<!-- Form -->
                	<form action="/add_item/{{$item->id}}" method="post">
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Material Name</label>
						      <input type="text" class="form-control" id="material_name" name="material_name" value="{{$item->material_name}}">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Item Code</label>
						      <input type="text" class="form-control" id="item_code" name="item_code" value="{{$item->item_code}}">
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputState">Group</label>
						      <select id="inputState" class="form-control" name="group">
						        <option selected>{{ $item->group }}</option>
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
						      </select>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputZip">UoM</label>
						      <input type="text" class="form-control" id="uom" name="uom" value="{{$item->uom}}">
						    </div>
						  </div>
						  <div class="form-group col-md-1">
						  <input type="submit" class="btn btn-warning" name="update" value="Update" >
						  {{ csrf_field() }}
						  <input type="hidden" name="_method" value="PUT">
						  </div>
					</form>
                </div>
            </div>
        </div>

@endsection