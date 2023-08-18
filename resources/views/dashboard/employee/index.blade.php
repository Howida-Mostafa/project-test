@extends('layouts.dash_layout')

@section('content')
<br>
<br>
<br>
<div class="container">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fas fa-map mr-1"></i> employee </div>
        <div class="card-body">
            <div class="row">
                <a href="{{  route('employee.create')}}" class="btn btn-success p-2 px-4 mx-2">
                    add
                </a>
                <div class="col-12">
                    <br>
                    @if (count($employee) > 0)
                        <div class="table-responsive col-12">
                            <table class="table table-hover table-striped text-center" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employee as $c)
                                        <tr>
                                            <td>{{$c->first_name}}</td>
                                            <td>{{$c->last_name}}</td>
                                            <td>{{$c->Company->name}}</td>
                                            <td>{{$c->email}}</td>
                                            <td>{{$c->phone}}</td>
                                            <td>
                                                <a class="px-1" href="{{ url('/dashboard/employee/'.$c->id.'/edit') }}"><i class="fas fa-edit"></i>Edit</a>
                                                <a class="px-1" href="{{ url('/dashboard/employee/delete/'.$c->id) }}"><i class="fas fa-times text-danger"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-div text-center">
                            {{$employee->links()}}
                        </div>
                    @else
                        <div class="col-12 text-center">
                            <p class="text-center">no employee found!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a href="{{ url('/dashboard') }}" class="btn btn-danger p-2 px-4 mx-2">
            Dashboard
        </a>
        <a href="{{ url('/dashboard/employe') }}" class="btn btn-danger p-2 px-4 mx-2">
        Employe
        </a>

    </div>
</div>
@endsection
