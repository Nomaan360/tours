@extends('admin.tablelayout')

@section('title', 'Home Page')

@section('tablecontent')
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Services</h4>
                      <a href="{{url(route('service_add'))}}"
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
                            <th>Service Title</th>
                            <th>Service Description</th>
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1
                        @endphp
                        @foreach ($services as $service)
                            <tr>
                            <td>{{  $i++ }}</td>
                            <td>{{  $service->title }}</td>
                            <td>{{  $service->description }}</td>
                            <td><a href="{{ url(route('service_edit', ['id' => $service->id])) }}" class="btn btn-outline-warning">Edit</a> <a href="{{ url(route('service_delete', ['id' => $service->id])) }}" class="btn btn-outline-danger">Delete</a></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
