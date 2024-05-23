@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                    <p class="breadcrumb-item active" style="padding-left:1010px;">Employee Management</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Add Employee Form -->
   
                <div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px;">
                    <form>
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="last_name" placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="middle_name" placeholder="Enter middle name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-sm-2 col-form-label">Country</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="country">
                                    <option value="">Select Country</option>
                                    <!-- Add options for countries -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="state">
                                    <option value="">Select State</option>
                                    <!-- Add options for states -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="city">
                                    <option value="">Select City</option>
                                    <!-- Add options for cities -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-sm-2 col-form-label">ZIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="zip" placeholder="Enter ZIP">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="age" placeholder="Enter age">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="birthday">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hired_date" class="col-sm-2 col-form-label">Hired Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="hired_date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="department">
                                    <option value="general_management">General Management</option>
                                    <!-- Add other department options -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- /.content -->
@endsection
