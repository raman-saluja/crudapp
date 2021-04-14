@extends('layout', [ 'title' => 'Customers' ] )

@section('content')

    <div class="card">
        <div class="card-header">
          Customers
        </div>
        <table class="table table-bordered mb-0">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col" width="250px">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($customers as $key => $cust)
            <tr>
              <th scope="row">{{ $key+1 }}</th>
              <td>{{ $cust->name }}</td>
              <td>{{ $cust->email }}</td>
              <td>{{ $cust->contact_no }}</td>
              <td>{{ $cust->address }}</td>
              <td>
                <a href="{{ route('customers.show', $cust->id) }}" class="btn btn-primary">view</a> 
                <a href="{{ route('customers.edit', $cust->id) }}" class="btn btn-warning">edit</a> 
                <form action="{{ route('customers.destroy', $cust->id) }}" class="d-inline" onsubmit="return confirm('Do you really want to delete this customer ?')" method="POST">
                @method('DELETE')
                {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger">delete</button>
                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <div class="card-footer text-end">
          <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer</a>
        </div>
      </div>

@endsection
