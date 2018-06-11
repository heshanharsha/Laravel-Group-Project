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

                    <div class="admin-tablet-product">
                          @if( session()->has('message'))
                            <div class="alert alert-danger">
                              {{ session()->get('message')}}
                            </div>
                          @endif
                          <br>

                          <form class="tablet-details-submit" action="{{route('admin.dashboard.tablet.submit')}}" method="post">
                              <div class="form-group">
                                <input type="text" class="form-control" name="brand" placeholder="Brand">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="model" placeholder="Model">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="technology" placeholder="Technology">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="announced" placeholder="Announced">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="status" placeholder="Status">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="dimensions" placeholder="Dimensions">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="weight" placeholder="Weight">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="sim" placeholder="Sim">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="type" placeholder="Type">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="size" placeholder="Size">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="resolution" placeholder="Resolution">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="multitouch" placeholder="Multitouch">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="os" placeholder="OS">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="chipset" placeholder="Chipset">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="cpu" placeholder="CPU">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="gpu" placeholder="GPU">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="cardslot" placeholder="Card Slot">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="internal" placeholder="Internal Camera">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="primary" placeholder="Primary Camera">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="features" placeholder="Features">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="video" placeholder="Video Resolution">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="secondary" placeholder="Secondry Storage">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="alerttypes" placeholder="Alert Types">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="loudspeaker" placeholder="Loudspeaker">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="jack" placeholder="3.5mm jack">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="wlan" placeholder="WLAN">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="bluetooth" placeholder="Bluetooth">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="gps" placeholder="GPS">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="nfc" placeholder="NFC">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="radio" placeholder="Radio">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="usb" placeholder="USB">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="sensors" placeholder="Sensors">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="messaging" placeholder="Messaging">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="browser" placeholder="Browser">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="battery" placeholder="Battery">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="colors" placeholder="Colors">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="price" placeholder="Price">
                              </div>
                              {{ csrf_field() }}
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
@endsection
