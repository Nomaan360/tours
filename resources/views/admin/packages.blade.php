@extends('admin.tablelayout')

@section('title', 'Home Page')

@section('tablecontent')
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Services</h4>
                      <a href="{{url(route('package_add'))}}"
                        class="btn btn-primary btn-round ms-auto">
                        <i class="fa fa-plus"></i>
                        Add Service
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="multi-filter-select"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Sr</th>
                            <th>destination</th>
                            <th>country_id</th>
                            <th>tour_type</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1
                        @endphp
                        @foreach ($packages as $package)
                            <tr>
                            <td>{{  $i++ }}</td>
                            <td>{{  $package->destination }}</td>
                            <td>{{  $package->countryname }}</td>
                            <td>{{  $package->tour_type }}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
