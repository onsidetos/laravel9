@extends('master.layout')

@section('content')
    <div class="row mb-3">
        <div class="col">
            <h3>Category</h3>
        </div>
        <div class="col">
            <a href="/category/create" class="btn btn-primary btn-sm float-end">
                <i class="bi bi-plus-lg"></i>
                Add
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover ">
                <thead>
                    <tr class="bg-light">
                        <th width="50px">#</th>
                        <th>Name</th>
                        <th>Img</th>
                        <th width="160px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="align-middle">{{$category->id}}</td>
                        <td class="align-middle">{{$category->name}}</td>
                        <td>
                            <img width="40px"
                                 src="{{$category->img}}" alt="Water" >
                        </td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash3"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

