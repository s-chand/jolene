@extends('layouts.regtemp')
@section('content')
<div>
    <div class="page-header center-block">
        <h1 class="col-lg-offset-3">Miss Jolene 2016</h1>


    </div>

    <form action="{{ url('submit') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
                <div class="form-group">
                    <h2 class="col-lg-offset-3">Registration Form</h2>
                </div>

                <!-- Full Name -->
        <div class="form-group">

            <label for="full-name" class="col-sm-3 control-label">Fullname</label>

            <div class="col-sm-6">
                <input type="text" name="fullname" id="full-name" class="form-control">
            </div>
        </div>
        <!-- Age -->
        <div class="form-group">

                <label for="age" class="col-sm-3 control-label">Age</label>
            <div class="col-sm-6"> <input type="date" name="age" id="age" class="form-control "></div>
        </div>
        <div class="form-group">

            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-6"><input type="email" name="email" id="email" class="form-control input-sm"></div>
        </div>
        <div class="form-group">

            <label for="sex" class="col-sm-3 control-label">Sex</label>
            <div class="col-sm-6"> <input type="radio" name="sex" id="sex" class="radio-inline" value="male"> Male
            <input type="radio" name="sex" id="sex" class="radio-inline" value="female"> Female</div>
        </div>
        <!-- Add the address form entry -->
        <div class="form-group">

            <label for="address" class="col-sm-3 control-label">Address</label>

            <div class="col-sm-6">
                <input type="text" name="address" id="address" class="form-control input-sm">
            </div>
        </div>

        <!-- Add the phone number -->
        <div class="form-group">

            <label for="phone" class="col-sm-3 control-label">Phone</label>

            <div class="col-sm-6">
                <input type="text" name="phone" id="phone" class="form-control input-sm">
            </div>
        </div>

        <!-- Add the survey question -->
        <div class="form-group">

            <label for="survey" class="col-sm-3 control-label">How did you hear about this event?</label>

            <div class="col-sm-6">
                <input type="text" name="survey" id="survey" class="form-control input-lg">
            </div>
        </div>
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-success">
                    Register <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>

    </form>

</div>
@endsection