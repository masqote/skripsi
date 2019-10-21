@extends('layouts.master')

@section('content')
<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>{{$edit->internal_number}}</b>
                </div>
                <div class="panel-body">
                	<!-- Form -->
                	<form action="/list_project/{{$edit->id}}" method="post">
                		<div class="col-md-6">
                			<h4><b><u>Project Detail</u></b></h4>
                			<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Local/Export</label>
						      <span>{{$edit->local_export}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Container Number</label>
						      <span>{{$edit->container_no}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Original Port</label>
						      <span>{{$edit->original_port}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Destination Port</label>
						      <span>{{$edit->destination_port}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Seal Number</label>
						      <span>{{$edit->seal_no}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Container Size</label>
						      <span>{{$edit->container_size}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Stuffing Date</label>
						      <span>{{$edit->stuffing_date}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Air Waybills</label>
						      <span>{{$edit->surat_jalan}}</span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Tanda Terima</label>
						      <span>{{$edit->tanda_terima}}</span>
						  	</div>
						  	<div class="row">
						  		@if($edit->at_received != "")
					            		@php
								  			$andre = new DateTime($edit->at_landed);
								  			$andre1 = new DateTime($edit->at_received);
								  			$haha = $andre->diff($andre1);
								  			$days = $haha->days-3 . " Hari"; 
								  			$days1 = $haha->days-3;
								  		@endphp
					            	@else
					            		@php
					            			$days = "";
					            		@endphp
					            		
					            	@endif
						  		
						      <label class="col-lg-4 col-sm-4 control-label" id="demurrage">Demurrage Date</label>
						      <span>
						      	@if($edit->at_received != "")
						      		@if($days <= 0)
							      		@php
							      			echo "No Demmurage";
							      		@endphp
						      		@else
						      			@php
						      				echo $days;
						      			@endphp
						      		@endif
						      	@else
						      		@php
						      			echo "";
						      		@endphp
						      	@endif
						      </span>
						  	</div>
						  	<div class="row">
						      <label class="col-lg-4 col-sm-4 control-label">Biaya</label>
						      <span>
						      	@if($edit->at_received != "")
						      		@if($days <= 0)
						      		@php
						      			echo "Free of Charge";
						      		@endphp
							      	@else
							      	@php
							      		$number = $days1;
							      		$duit = $days1 * 15000;
							      		setlocale(LC_MONETARY,"en_US");
							      	@endphp
							      	{{ "Rp. " }}{{number_format($duit)}}
							      	@endif
							    @else
							    	@php
							    		echo "";
							    	@endphp
							    @endif
						  		</span>
						  	</div>
                		</div>
						  
						<div class="col-md-6">
							<h4><b><u>Inside Container</u></b></h4>
                			<div class="row">
						      	<ul class="list-group">
						      		@foreach($item as $row)
						      			<li class="list-group-item">{{$row->material_name}} <span class="badge">{{$row->qty .' '.$row->uom}}</span></li>
						      		@endforeach 
							  	</ul>
						  	</div>
						  	<div class="row">
						  		<div class="col-md-6">
						  			@if($edit->at_harbor != "")
					            		@php
					            			$dpicker = null; 
					            		@endphp
					            	@else
					            		@php
					            			$dpicker = "datepicker";
					            		@endphp
					            	@endif
					                <label for="stuffingdate">At Harbor</label>
					                <input type="text" class="form-control" id="{{$dpicker}}" name="at_harbor" placeholder="Enter Date" value="{{ $edit->at_harbor }}" readonly>
					            </div>
		                		<div class="col-md-6">
		                			@if($edit->at_sea != "")
					            		@php
					            			$dpicker = null; 
					            		@endphp
					            	@else
					            		@php
					            			$dpicker = "datepicker1";
					            		@endphp
					            	@endif
					                <label for="stuffingdate">At Sea</label>
					                <input type="text" class="form-control" id="{{$dpicker}}" name="at_sea" placeholder="Enter Date" value="{{ $edit->at_sea }}" readonly>
					            </div>
					            <div class="col-md-6">
					            	@if($edit->at_landed != "")
					            		@php
					            			$dpicker = null; 
					            		@endphp
					            	@else
					            		@php
					            			$dpicker = "datepicker2";
					            		@endphp
					            	@endif
					                <label for="stuffingdate">At Landed</label>
					                <input type="text" class="form-control" id="{{$dpicker}}" name="at_landed" placeholder="Enter Date" value="{{ $edit->at_landed }}" readonly>
					            </div>
					            <div class="col-md-6">
					            	@if($edit->at_received != "")
					            		@php
					            			$dpicker = null; 
					            		@endphp
					            	@else
					            		@php
					            			$dpicker = "datepicker3";
					            		@endphp
					            	@endif
					                <label for="stuffingdate">Received</label>
					                <input type="text" class="form-control" id="{{$dpicker}}" name="received" placeholder="Enter Date" value="{{ $edit->at_received }}" readonly>
					            </div>
					            <div class="col-md-12">
					            	@if($edit->tanda_terima != "")
					            		@php
					            			$tandaterima = null; 
					            		@endphp
					            	@else
					            		@php
					            			$tandaterima = "";
					            		@endphp
					            		
					            	@endif
					                <label for="stuffingdate">Tanda Terima</label>
					                <input type="text" class="form-control" id="{{$tandaterima}}" name="tanda_terima" placeholder="Enter Tanda Terima" value="{{$edit->tanda_terima}}" autocomplete="off">
					            </div>
					            <div class="col-md-6 col-md-offset-6">
					            	<br>
					                <input type="submit" class="form-control btn btn-warning" id="submit" name="update" value="Update">
					                 {{ csrf_field() }}
						  			<input type="hidden" name="_method" value="PUT">
					            </div>
						  	</div>
                		</div>
						  <div class="form-group col-md-1">
						  <!-- <input type="submit" class="btn btn-warning" name="update" value="Update" > -->
						  
						  </div>
						 
					</form>
                </div>
            </div>
        </div>

@endsection