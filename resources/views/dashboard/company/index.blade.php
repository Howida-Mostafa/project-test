@extends('layouts.dash_layout')

@section('content')

<div class="container">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fas fa-map mr-1"></i> Company </div>
        <div class="card-body">
            <div class="row">
                <input type="hidden"><a href="{{ url('/dashboard/company/create') }}" class="btn btn-success p-2 px-4 mx-2">
                    add
                  </a>
               </input>
                <!-- <a href="{{  route('company.index')}}" class="btn btn-success p-2 px-4 mx-2">
                    add
                </a> -->
                <div class="col-12">
                    <br>
                    @if (count($company) > 0)
                        <div class="table-responsive col-12">
                            <table class="table table-hover table-striped text-center" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>logo</th>
                                        <th>website</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($company as $c)
                                        <tr>
                                            <td>{{$c->name}}</td>
                                            <td>{{$c->email}}</td>
                                            <td><img src="{{ url('/storage/company/'.$c->logo) }}" width="100px"/></td>
                                            <td>{{$c->website}}</td>
                                            
                                            <td>
                                                <a class="px-1" href="{{ url('/dashboard/company/'.$c->id.'/edit') }}"><i class="fas fa-edit"></i>Edit</a>
                                                <a class="px-1" href="{{ url('/dashboard/company/delete/'.$c->id) }}"><i class="fas fa-times text-danger"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-div text-center">
                            {{$company->links()}}
                        </div>
                    @else
                        <div class="col-12 text-center">
                            <p class="text-center">no company found!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a href="{{ url('/dashboard') }}" class="btn btn-danger p-2 px-4 mx-2">
            dashboard
        </a>
        <a href="{{ url('/dashboard/company') }}" class="btn btn-danger p-2 px-4 mx-2">
        Company
        </a>

    </div>
</div>
@endsection
