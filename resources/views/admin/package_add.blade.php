  
@extends('admin.adminlayout')

@section('title', 'Home Page')

@section('admincontent')
  <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Forms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Basic Form</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Elements</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 col-md-6 col-lg-4">
                      <form method="POST" action="{{url(route('package_store'))}}">
                      @csrf
                        <div class="form-group">
                          <label for="destination">Destination</label>
                          <input
                            type="text"
                            class="form-control"
                            id="destination"
                            placeholder="Enter Destination" name="destination"
                          />
                            @if ($errors->has('destination'))
                                <small class="text-danger">{{ $errors->first('destination') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="countryname">Select Country</label>
                            <select class="form-select form-control" name="countryname" id="countryname">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->countryname }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('countryname'))
                                <small class="text-danger">{{ $errors->first('countryname') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="tour_type">Tour Type</label>
                            <select class="form-select form-control" name="tour_type" id="tour_type">
                                <option value="ALL">ALL</option>
                                <option value="world_tour">World Tour</option>
                                <option value="weekend_tour">Weekend Tour</option>
                                <option value="family_tour">Family Tour</option>
                                <option value="beach_tour">Beach Tour</option>
                            </select>
                            @if ($errors->has('tour_type'))
                                <small class="text-danger">{{ $errors->first('tour_type') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                      </div>
               
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
