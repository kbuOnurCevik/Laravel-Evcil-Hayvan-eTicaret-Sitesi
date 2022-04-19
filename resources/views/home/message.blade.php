@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" style="background-color: #0d0a0a">

        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block" style="background-color: #0d0a0a">

        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block" style="background-color: #0d0a0a">

        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block" style="background-color: #0d0a0a">

        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Check the following errors :(
    </div>
@endif
