@extends('layouts.master')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Project</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">

            <div class="row">
              <div class="col-md-4">
                <label for="internalnumber">Internal Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Internal Number">
              </div>

              <div class="col-md-4">
                <label for="export/local">Local / Export</label>
                <select id="inputState" class="form-control" name="localexport" >
                    <option selected>Local</option>
                    <option>Export</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="originalport">Original Port</label>
                <input type="text" class="form-control" id="orignalport" placeholder="Enter Original Port">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-4">
                <label for="destinationport">Destination Port</label>
                <input type="text" class="form-control" id="destinationport" placeholder="Enter Destination Port">
              </div>

              <div class="col-md-4">
                <label for="container">Container No.</label>
                <input type="text" class="form-control" id="containerno" placeholder="Enter Destination Port">
              </div>

              <div class="col-md-4">
                <label for="container">Seal No.</label>
                <input type="text" class="form-control" id="sealno" placeholder="Enter Seal Number">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-2">
                <label for="container">Container Size</label>
                <input type="text" class="form-control" id="containersize" placeholder="Enter Feet">
              </div>

              <div class="col-md-2">
                <label for="stuffingdate">Stuffing Date</label>
                <input type="text" class="form-control" id="datepicker" placeholder="Enter Stuffing Date">
              </div>
            </div>

            <hr>

            <div class="row">
              <center><h4><b>Inside Container</b></h4></center>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="material">Material Name</label>
                  <select id="material" class="form-control" name="material" >
                      <option selected>Choose...</option>

                      @foreach($modal as $modals)
                      	<option>{{ $modals->material_name }}</option>
                      @endforeach
                  </select>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" >Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script>
      $(function() {
          $( "#datepicker" ).datepicker();
      });
  </script>