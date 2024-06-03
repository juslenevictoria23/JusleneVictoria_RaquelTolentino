@extends('layouts.app')

@section('content')
    <div class="container">
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
                                    <label for="first_name">Employee First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Employee Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="DOB">Employee Date of birth</label>
                                    <input type="date" class="form-control" id="DOB" name="DOB" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" name="phone" required>
                                </div>  
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom bg-gray btn-block">Register</button>
                            </div>
                            <script>
        function allowOnlyLetters(input) {
            input.addEventListener('input', function () {
                this.value = this.value.replace(/[^a-zA-Z]/g, '');
            });
        }

        // Apply the function to both first name and last name input fields
        allowOnlyLetters(document.getElementById('first_name'));
        allowOnlyLetters(document.getElementById('last_name'));
    </script>
                        </form>
                    </div>
                </div>

                <div class="card mt-5 shadow-lg">
                    <div class="card-header bg-custom bg-red text-white">
                        <h4 class="mb-0">Employee List</h4>
                    </div>
                    <div class="card-body bg-white">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-custom bg-gray">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->DOB }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> Edit
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    </style>
@endpush
