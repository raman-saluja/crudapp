@extends('layout', [ 'title' => 'Create Customer' ] )

@section('content')

    <form action="{{ url('customers') }}" method="post">

        {{ csrf_field() }}

    <div class="card">
        <div class="card-header">
          Customers
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="customer_Name" class="form-label">Name </label>
                <input type="text" class="form-control" name="name" id="customer_Name" autofocus>
            </div>
            <div class="mb-3"> 
                <label for="customer_Email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="customer_Email">
            </div>
            <div class="mb-3"> 
                <label for="customer_contact_no" class="form-label">Contact Number</label>
                <input type="number" class="form-control" name="contact_no" id="customer_contact_no">
            </div>
            <div class="mb-3">
                <label for="customer_address" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="customer_address" placeholder="Address" rows="3"></textarea>
            </div>
        </div>
        <div class="card-footer text-start">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ url('customers') }}" class="btn btn-danger">Cancel</a>
        </div>

    </div>
    </form>
@endsection