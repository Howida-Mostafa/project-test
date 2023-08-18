@extends('layouts.dash_layout')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <h1 class="mt-4"></h1>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fas fa-map mr-1"></i> Employee </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('employee.destroy', $id) }}">
                            @csrf
                            @method('DELETE')
    
                            <h3 class="text-center">Delete this employee ?</h3>
    
                            <div class="form-group row mb-0">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success p-2 px-4 mx-2">
                                        Delete
                                    </button>
                                    <a href="{{ url('/dashboard/employee') }}" class="btn btn-danger p-2 px-4 mx-2">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection