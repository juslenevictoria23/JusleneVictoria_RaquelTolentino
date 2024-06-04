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

    <!-- Main content -->
    <div class="row" style="margin:10px;">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1250</h3>

                <p>Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>7</h3>

                <p>Department</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>5</h3>

                <p>Divisions</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>244</h3>

                <p>Country</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>80</h3>

                <p>State</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>4008</h3>

                <p>Cities</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          
    <!-- Main content -->
    <div class="container">
        <div class="card mt-5 shadow-lg">
            <div class="card-header bg-custom bg-red text-white">
                <h4 class="mb-0">Employee List</h4>
            </div>
            <div class="card-body bg-white">
                <form id="employee-action-form" method="POST">
                    @csrf
                    <div class="row">
                        @foreach ($employees as $key => $employee)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/logo.png') }}" class="card-img-top rounded-circle employee-img" alt="Employee Picture">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Name:</strong>{{ $employee->name }}</h5>
                                        <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
                                        <p class="card-text"><strong>Address</Address>:</strong> {{ $employee->address }}</p>
                                        <p class="card-text"><strong>Status:</strong> {{ $employee->status }}</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="action" id="edit-{{ $employee->id }}" value="edit-{{ $employee->id }}">
                                            <label class="form-check-label" for="edit-{{ $employee->id }}">Edit</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="action" id="delete-{{ $employee->id }}" value="delete-{{ $employee->id }}">
                                            <label class="form-check-label" for="delete-{{ $employee->id }}">Delete</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
                <button type="button" class="btn btn-primary" onclick="handleEmployeeAction()">Submit</button>
            </div>
        </div>

        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-custom bg-blue text-white">
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
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom bg-gray btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
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
<script>
        function handleEmployeeAction() {
            const form = document.getElementById('employee-action-form');
            const selectedAction = document.querySelector('input[name="action"]:checked');

            if (selectedAction) {
                const action = selectedAction.value.split('-')[0];
                const employeeId = selectedAction.value.split('-')[1];

                if (action === 'edit') {
                    window.location.href = `/employee/${employeeId}/edit`;
                } else if (action === 'delete') {
                    if (confirm('Are you sure you want to delete this employee?')) {
                        form.action = `/employee/${employeeId}`;
                        form.method = 'POST';
                        form.innerHTML += '<input type="hidden" name="_method" value="DELETE">';
                        form.submit();
                    }
                }
            } else {
                alert('Please select an action.');
            }
        }
    </script>

          <!-- ./col -->
        </div>
          <!-- ./col -->
        </div>
          <!-- ./col -->
        </div>

        
    <!-- /.content -->

