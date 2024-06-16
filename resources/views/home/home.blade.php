@extends('master.layout')

@section('content')
<div class="row mb-3">
    <div class="col ">
        <h3>Dashboard</h3>
    </div>
</div>
<div class="row">
    <div class="col-6 col-lg-3 mb-3">
        <div class="bg-primary text-white  p-3 rounded">
            <h1 >150</h1>
            <p >
                Total Users
            </p>
        </div>
    </div>
    <div class="col-6 col-lg-3 mb-3">
        <div class="bg-success text-white  p-3 rounded">
            <h1 >10</h1>
            <p >
                Total Category
            </p>
        </div>
    </div>
    <div class="col-6 col-lg-3 mb-3">
        <div class="bg-warning  p-3 rounded">
            <h1 >100</h1>
            <p >
                Total Product
            </p>
        </div>
    </div>
    <div class="col-6 col-lg-3 mb-3">
        <div class="bg-danger text-white  p-3 rounded">
            <h1 >300</h1>
            <p >
                Total Order
            </p>
        </div>
    </div>
</div>
@endsection
