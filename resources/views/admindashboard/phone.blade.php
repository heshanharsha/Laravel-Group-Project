@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="admin-dashboard-product-buttons">
                      <a href="{{route('admin.dashboard.phone')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Phone</a>
                      <a href="{{route('admin.dashboard.laptop')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Laptop</a>
                      <a href="{{route('admin.dashboard.tablet')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tablet</a>
                      <a href="{{route('admin.dashboard.smartwatch')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Smartwatch</a>
                    </div>

                    <div class="admin-phone-product">
                      @if( session()->has('message'))
                        <div class="alert alert-danger">
                          {{ session()->get('message')}}
                        </div>
                      @endif
                      <br>

                    <form class="phone-details-submit" action="{{route('admin.dashboard.phone.submit')}}" method="post">
                        <div class="form-group">
                          <!-- <label for="formGroupExampleInput">Example label</label> -->
                          <input type="text" class="form-control" name="brand" placeholder="Brand">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="model" placeholder="Model">
                        </div>
                        {{ csrf_field() }}
                        <!-- <a href="{{route('admin.dashboard.phone.submit')}}">submit</a> -->
                        <div class="form-group text">
                          <button class="btn btn-primary" style="height: 35px; width:80px; font-size:16px;" type="submit">Submit</button>
                        </div>
                    </form>

                    </div>

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
