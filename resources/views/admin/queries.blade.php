@extends('admin.tablelayout')

@section('title', 'Home Page')

@section('tablecontent')
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">User Queries</h4>
                
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
                            <th>From</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1
                        @endphp
                        @foreach ($queries as $query)
                            <tr>
                            <td>{{  $i++ }}</td>
                            <td>{{  $query->uname }}</td>
                            <td>{{  $query->uemail }}</td>
                            <td>{{  $query->subject }}</td>
                            <td>{{  $query->message }}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
