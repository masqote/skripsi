@extends('layouts.master')

@section('content')

<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Laporan
                </div>
                <div class="panel-body">

                	<!-- Form -->
                	<form action="/hasil" method="post">
						  <div class="form-row">
						  	<div class="form-group col-md-6">
						  		<label for="inputPassword4">Jenis Laporan</label>
							    <select id="inputState" class="form-control" name="laporan">
							    	<option value="Laporan Pengiriman">Laporan Pengiriman</option>
							    	<option value="Laporan Penerimaan">Laporan Penerimaan</option>
							    	<option value="parcel">Print Master Data</option>
							    </select>
							</div>
							<div  id="row_dim">
							    <div class="form-group col-md-3">
					                <label for="stuffingdate">Dari Tanggal</label>
					                <input type="text" class="form-control" id="datepicker4" name="dari_tanggal" placeholder="Pilih Tanggal" autocomplete="off">
					             </div>
					             <div class="form-group col-md-3">
					                <label for="stuffingdate">Sampai Tanggal</label>
					                <input type="text" class="form-control" id="datepicker5" name="sampai_tanggal" placeholder="Pilih Tanggal" autocomplete="off">
					             </div>
					         </div>
				         </div><br><br><br><br>
				         <div class="form-group col-md-2">
								  <input type="submit" class="btn btn-primary" name="submit" value="Cetak Laporan" >
								  {{ csrf_field() }}
						</div>
				        
					</form>
<br><br><br>
			

                </div>

            </div>
    </div>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script >
$(function() {
    // $('#row_dim').show(); 
    $('#inputState').change(function(){
        if($('#inputState').val() == 'parcel') {
            $('#row_dim').hide(); 
        } else {
            $('#row_dim').show(); 
        } 
    });
});
</script>
 @endsection