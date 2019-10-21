<div class="col-md-10 content">
            <div class="panel panel-default">
            	<h3>{{ $laporan }}</h3>
            	<h5>Periode {{ $awal }} - {{ $akhir }}</h5>
                	<table border="1" class="table table-striped" id="andre" name="andre">
					  <thead>
					    <tr>
					      <th scope="col">Internal Number</th>
					      <th scope="col">Local / Export</th>
					      <th scope="col">Original Port</th>
					      <th scope="col">Destination Port</th>
					      <th scope="col">Container Number</th>
					      <th scope="col">Seal Number</th>
					      <th scope="col">Stuffing Date</th>
					      <th scope="col">Received</th>
					    </tr>
					  </thead>
					  <tbody >
					  	@foreach($report as $row)
					    <tr>
					    <td> {{$row->internal_number}} </td>
					    <td> {{$row->local_export}} </td>
					    <td> {{$row->original_port}} </td>
					    <td> {{$row->destination_port}} </td>
					    <td> {{$row->container_no}} </td>
					    <td> {{$row->seal_no}} </td>
					    <td> {{$row->stuffing_date}} </td>
					    <td> {{$row->at_received}} </td>
						</tr>
						@endforeach
					  </tbody>
					</table>
					<
				</div>
            </div>
    </div>

