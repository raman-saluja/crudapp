@extends('layout', [ 'title' => 'Edit Customer' ] )

@section('content')

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">

        {{ csrf_field() }}
        
        @method('PUT')

    <div class="card">
        <div class="card-header">
          Customers
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="customer_Name" class="form-label">Name </label>
                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" id="customer_Name" autofocus>
            </div>
            <div class="mb-3"> 
                <label for="customer_Email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $customer->email }}" id="customer_Email">
            </div>
            <div class="mb-3"> 
                <label for="customer_contact_no" class="form-label">Contact Number</label>
                <input type="number" class="form-control" name="contact_no" value="{{ $customer->contact_no }}" id="customer_contact_no">
            </div>
            <div class="mb-3">
                <label for="customer_address" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="customer_address" placeholder="Address" rows="3">{{ $customer->address }}</textarea>
            </div>
        </div>
        <div class="card-footer text-start">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ url('customers') }}" class="btn btn-danger">Cancel</a>
        </div>

    </div>
    </form>

@endsection