@extends('layouts.master')

@section('title') Dashboard  @endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Register-Role</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>Edit</th>
                <th>DELETE</th>
              </thead>

              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->usertype }}</td>
                  <td>
                      <a href="#" class="btn btn-success">Edit</a>
                    </td>
                  <td>
                      <a href="#" class="btn btn-danger">Delete</a>
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

@section('scripts')
    
@endsection