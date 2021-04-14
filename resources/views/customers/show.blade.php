@extends('layout', [ 'title' => 'View Customer' ] )

@section('content')

    <div class="card">
        <div class="card-header">
          Customers
        </div>
        <table class="table table-bordered mb-0">
          <tbody>
          <tr>
              <th scope="col">#</th>
              <td>{{ $customer->id }}</td>
            </tr>
            <tr>
              <th scope="col">Name</th>
              <td>{{ $customer->name }}</td>
            </tr>
            <tr>
              <th scope="col">Email</th>
              <td>{{ $customer->email }}</td>
            </tr>
            <tr>
              <th scope="col">contact_no</th>
              <td>{{ $customer->contact_no }}</td>
            </tr>
            <tr>
              <th scope="col">Address</th>
              <td>{{ $customer->address }}</td>
            </tr>

          </tbody>
        </table>
        <div class="card-footer text-end">
          <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit Customer</a></div>
        </div>

@endsection