
@extends('layouts.master')
<style>

</style>

@section('content')

<div class="container">
<center>

    <div class="col-md-9 service-box-container">
        <div class="row">
            <div class="service-box">
            <h3 class="page-title" style="color: #337ab7;">Trace &amp; Track</h3>
                <form method="POST" action="tracking" accept-charset="UTF-8" id="track-package-form">
                <div>
                <textarea class="trace-bill" placeholder="E.g: LS-CGM # ..." required="true" name="track_no" cols="60" rows="3" align="center"></textarea>
                </div>
                <div class="note">
                <p>Enter Your Internal Number. Available up to 20 Internal Number.</p>
                </div>
                <div class="submit-button">
                <input class="btn btn-primary" type="submit" value="Track">
                {{ csrf_field() }}
                </div>
                </form>
                <br><br><br>
            </div>
        </div>
            <div class="form-group col-md-4">
            <img src="/assets/CC-right.png" width="180px" height="40px" />
            </div>
             <div class="form-group col-md-4">
            <img src="/assets/CV-right-2015.png" width="180px" height="40px" />
            </div>
            <div class="form-group col-md-4">
            <img src="/assets/SS-right.png" width="180px" height="40px" />
            </div>
    </div>
    </center>
</div>

@endsection

                     