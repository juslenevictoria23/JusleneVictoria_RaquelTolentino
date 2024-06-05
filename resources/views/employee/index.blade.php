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

  

          


        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-9">
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
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                                <div class="form-group col-md-12">
    <label>Profile Picture</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="profile_picture" id="profile_picture1" value="profile1.jpg">
        <label class="form-check-label" for="profile_picture1"><img src="images/logo.png" alt="Profile Picture 1" class="rounded-circle" style="height: 100px; width: 100px;"></label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="profile_picture" id="profile_picture2" value="profile2.jpg">
        <label class="form-check-label" for="profile_picture2"><img src="images/logo.png" alt="Profile Picture 2" class="rounded-circle" style="height: 100px; width: 100px;"></label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="profile_picture" id="profile_picture3" value="profile3.jpg">
        <label class="form-check-label" for="profile_picture3"><img src="images/logo.png" alt="Profile Picture 3" class="rounded-circle" style="height: 100px; width: 100px;"></label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="profile_picture" id="profile_picture4" value="profile4.jpg">
        <label class="form-check-label" for="profile_picture4"><img src="images/logo.png" alt="Profile Picture 4" class="rounded-circle" style="height: 100px; width: 100px;"></label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="profile_picture" id="profile_picture5" value="profile5.jpg">
        <label class="form-check-label" for="profile_picture5"><img src="images/logo.png" alt="Profile Picture 5" class="rounded-circle" style="height: 100px; width: 100px;"></label>
    </div>
</div>

            </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom bg-gray btn-block">Register</button>
                            </div>
                        </form>
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
        </>
          <!-- ./col -->
        </div>

        

