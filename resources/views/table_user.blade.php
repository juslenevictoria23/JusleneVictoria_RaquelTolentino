@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
   <h1 style="margin-left:30px; margin-bottom:10px;">Users</h1>
    <!-- /.content-header -->
<div>
<a style="margin-left:1290px; margin-top:40px; padding-left:20px;  padding-right:20px; color:black; background-color:orange;" href="{{ route('employee.index') }}" class="btn btn-warning btn-sm">
<i class="fa fa-pencil-square-o"></i> Add</a>
</div>
<div class="card mt-4 shadow-lg " style="margin:50px;">


                    <div class="card-header bg-orange">
                        <h4 class="mb-0 text-white">Employee List</h4>
                    </div>

                  
                    <div class="card-body bg-white">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-custom bg-black">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">Confirm Password</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ ($employee->password) }}</td>
                                    <td>{{ ($employee->confirm_password) }}</td> 
                                    <td>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> Edit
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete</button>
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
