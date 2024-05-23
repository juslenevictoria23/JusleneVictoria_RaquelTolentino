@extends('layouts.app')

@section('content')
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
                                    <label for="first_name">Employee First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $employee->first_name }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Employee Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="DOB">Employee DOB</label>
                                    <input type="date" class="form-control" id="DOB" name="DOB" value="{{ $employee->DOB }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
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
