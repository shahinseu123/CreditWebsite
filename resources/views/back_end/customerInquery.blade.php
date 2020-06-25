<title>Customer Inquery</title>
@extends('back_end.layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="card mt-4">
      <div class="card-header">
        <h2>Customer Inquery</h2>
        {{-- @if ($msg)
          <li>{{$msg}}</li>
        @endif --}}
      </div>
      <div class="card-body">
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>DOB</th>
              <th>SSN</th>
              {{-- <th>IdentityIq Username</th> --}}
              {{-- <th>IdentityIq Password</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- @if ($inquery) --}}
              @foreach ($inquery as $item)
                <tr>
                  <td>{{$item->firstname}} {{$item->lastname}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->streetaddress}} {{$item->cityzip}}</td>
                  <td>{{$item->dob}}</td>
                  <td>{{$item->ssn}}</td>
                  {{-- <td>{{$item->identityUsername}}</td> --}}
                  {{-- <td>{{$item->identityPassword}}</td> --}}
                  <td>
                  <a class="btn btn-danger" href="{{route("delete-inquery", $item->id)}}">Delete</a>
                  <a  class="btn btn-primary" href="{{route("show-info", $item->id)}}">Show</a>
                  </td>
                </tr>
                  
              @endforeach  
            {{-- @endif --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection