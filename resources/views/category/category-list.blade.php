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
                    <tr>
                        <td class="align-middle">1</td>
                        <td class="align-middle">Water</td>
                        <td>
                            <img width="40px"
                                 src="https://cdn.pixabay.com/photo/2021/10/11/23/49/app-6702045_1280.png" alt="Water" >
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
                    <tr>
                        <td class="align-middle">2</td>
                        <td class="align-middle">Food</td>
                        <td>
                            <img width="40px"
                                 src="https://cdn.pixabay.com/photo/2021/10/11/23/49/app-6702045_1280.png" alt="Water" >
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
                </tbody>
            </table>
        </div>
    </div>
@endsection

