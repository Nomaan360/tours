  
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
                      <form method="POST" action="{{url(route('country_update'))}}">
                      @csrf
                        <div class="form-group">
                          <label for="countryname">Country Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="countryname"
                            placeholder="Enter Country" name="countryname" value="{{ $country->countryname }}"
                          />
                            @if ($errors->has('countryname'))
                                <small class="text-danger">{{ $errors->first('countryname') }}</small>
                            @endif
                        </div>
                        <input type="hidden" name="cid" value="{{ $country->id }}">
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
