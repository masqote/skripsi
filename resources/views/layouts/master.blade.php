<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
</head>
<body>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<!-- Datepicker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  




  

<!-- Latest compiled and minified CSS -->



<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/dashboard">
        <img src="/assets/LG-right.png" width="180px" height="40px" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <form class="navbar-form navbar-left" method="GET" role="search">
        <div class="form-group">
          <input type="text" name="q" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       
        <li>
          <a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Project</button>
          </a>

        </li>
        <li><a href="http://www.longhi-group.com" target="_blank">Visit Site</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Account
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-header">SETTINGS</li>
              <li class=""><a href="#">Other Link</a></li>
              <li class="divider"></li>
              <li><a href="/">Logout</a></li>
            </ul>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

  </nav>

  <div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="/dashboard">Home</a></li>
        <li><a href="/list_project">List Project</a></li>
        <li><a href="/add_item">Add Item</a></li>
        <li><a href="/add_user">Add User</a></li>
        <li><a href="/laporan">Laporan</a></li>
      </ul>
    </div>
    @yield('content')
    <footer class="pull-left footer">
      <p class="col-md-12">
        <hr class="divider">
        Copyright &COPY; 2018 - Medhy Pradana Putra
      </p>
    </footer>
  </div>
</body>
</html>
<form action="/layouts/master" method="post">
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
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="internal_number" placeholder="Enter Internal Number" required autocomplete="off">
              </div>

              <div class="col-md-4">
                <label for="export/local">Local / Export</label>
                <select id="inputState" class="form-control" name="local_export" >
                    <!-- <option selected>Choose...</option> -->
                    <option value="local">Local</option>
                    <option value="export">Export</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="originalport">Original Port</label>
                <input type="text" class="form-control" id="orignalport" name="original_port" placeholder="Enter Original Port">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-4">
                <label for="destinationport">Destination Port</label>
                <input type="text" class="form-control" id="destinationport" name="destination_port" placeholder="Enter Destination Port">
              </div>

              <div class="col-md-4">
                <label for="container">Container No.</label>
                <input type="text" class="form-control" id="containerno" name="container_no" placeholder="Enter Destination Port" autocomplete="off">
              </div>

              <div class="col-md-4">
                <label for="container">Seal No.</label>
                <input type="text" class="form-control" id="sealno" name="seal_no" placeholder="Enter Seal Number" autocomplete="off">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-2">
                <label for="container">Container Size</label>
                <input type="text" class="form-control" id="containersize" name="container_size" placeholder="Enter Feet">
              </div>

              <div class="col-md-2">
                <label for="stuffingdate">Stuffing Date</label>
                <input type="text" class="form-control" id="datepicker0" name="stuffing_date" placeholder="Enter Stuffing Date" autocomplete="off">
              </div>
              <div class="col-md-8">
                <label for="stuffingdate">Air Waybills</label>
                <input type="text" class="form-control" id="airwaybills" name="surat_jalan" placeholder="Enter your air waybills" autocomplete="off">
              </div>
            </div>

            <hr>

            <div class="row">
              <center><h4><b>Inside Container</b></h4></center>
            </div>
            <br>
            <div class="row">
              <div class="col-md-7">
                <label for="material">Material Name</label>
                  <select id="material" class="form-control" name="material[]" >
                      <option selected>Choose...</option>
                      @foreach($add_item as $row)
                        <option value="{{ $row->id }}">{{$row->material_name .' - '.$row->item_code}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="col-md-2">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" name="qty[]" placeholder="" autocomplete="off">
              </div>
              <div class="col-md-2">
                <label for="qty">Add</label>
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
              </div>
              <div id="add_field">
                
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-primary" >Submit</button> -->
          <input type="submit" name="input" class="btn btn-primary" value="Submit" />
          {{ csrf_field() }}
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
      $(document).ready(function(){
          $("#add").click(function(){
              $("#add_field").append(`
                  <div class="col-md-7">
                    <label for="material">Material Name</label>
                      <select id="material" class="form-control" name="material[]" >
                          <option selected>Choose...</option>
                          @foreach($add_item as $row)
                            <option value="{{ $row->id }}">{{$row->material_name .' - '.$row->item_code}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="col-md-2">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty[]" placeholder="">
                  </div>
                `);
          });
      });

      $(function() {
          $( "#datepicker0" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });

      $(function() {
          $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });

      $(function() {
          $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });

      $(function() {
          $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });

      $(function() {
          $( "#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });
      $(function() {
          $( "#datepicker4" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });
      $(function() {
          $( "#datepicker5" ).datepicker({ dateFormat: 'yy-mm-dd' });
      });
  </script>