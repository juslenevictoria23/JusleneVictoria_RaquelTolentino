@extends('layouts.app')

@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
        <h3 align="center" class="mt-6">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-custom bg-orange text-white">
                        <h4 class="mb-0">Register Employee</h4>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('employee.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="text" class="form-control" id="confirm_password" name="confirm_password" required>
                                  </div>
                               </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-custom bg-black btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                
            

@endsection

@push('css')
    <style>
        .card-header h4 {
            margin-bottom: 0;
        }
        .card {
            border-radius: 10px;
        }
        .btn {
            border-radius: 5px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .bg-white {
            background-color: #ffffff !important;
        }
        .bg-primary {
            background-color: #007bff !important;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .thead-dark th {
            background-color: #343a40;
            color: #fff;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .form-check {
            margin-bottom: 0.5rem;
        }
        .card-img-top {
            height: 200px;
            width: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto;
        }
        .card-body {
            text-align: center;
        }
        /* Custom CSS to hide the number input spinners */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endpush


          <!-- ./col -->
        </div>
          <!-- ./col -->
        </>
          <!-- ./col -->
        </div>

        

        