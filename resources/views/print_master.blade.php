<div class="col-md-10 content">
            <div class="panel panel-default">
            	<h3>List Master Data</h3>
            	
                	<table border="1" class="table table-striped" id="andre" name="andre">
					  <thead>
					    <tr>
					      <th scope="col">ID</th>
					      <th scope="col">Material Name</th>
					      <th scope="col">Item Code</th>
					      <th scope="col">Group</th>
					      <th scope="col">UoM</th>
					      
					    </tr>
					  </thead>
					  <tbody >
					  	@foreach($report as $row)
					    <tr>
					    <td> {{$row->id}} </td>
					    <td> {{$row->material_name}} </td>
					    <td> {{$row->item_code}} </td>
					    <td> {{$row->group}} </td>
					    <td> {{$row->uom}} </td>
						</tr>
						@endforeach
					  </tbody>
					</table>
					
				</div>
            </div>
    </div>

