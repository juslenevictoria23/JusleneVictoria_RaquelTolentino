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
    <!-- /.content-header -->

    <


    <div class="container">
        <h3 align="center" class="mt-5">Edit Employee</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h4 class="mb-0">Edit Employee</h4>
                    </div>
                    <div class="card-body bg-light">
                        <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{ $employee->password }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="{{ $employee->confirm_password }}"required>
                                </div>
                             
                        
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
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
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #f8f9fa;
        }
        .bg-light {
            background-color: #f8f9fa !important;
        }
        .bg-secondary {
            background-color: #6c757d !important;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
@endpush
