@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0"><span style="font-size: larger">{{ __('BSIT 3B') }}</span>
  <span style="font-size: smaller">{{ __('Examinners') }}</span>
</h1>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="row" style="margin:10px;">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>Add Form</h3>

                <p>User's Details</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('table_user') }}" class="small-box-footer">List User's<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
           
          </div>
          <!-- ./col -->
        </div>
          <!-- ./col -->
        </div>
          <!-- ./col -->
        </div>

        
    <!-- /.content -->
@endsection