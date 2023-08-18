@extends('layouts.dash_layout')

@section('content')


<div class="container">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fas fa-map mr-1"></i> Company </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        
                        <div class="row">
                            <div class="col-md-10 offset-md-1 col-12 information">
                                <h5> Edit Company </h5>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-center">names</label>

                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"  value="{{ $company->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-center">email</label>

                            <div class="col-md-6">
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"  value="{{ $company->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-center">logo</label>
                            <div class="col-md-6">
                            <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror" accept="image/*">
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-center">website</label>
                            <div class="col-md-6">
                                <input type="text" name="website" id="website" class="form-control @error('website') is-invalid @enderror"  value="{{ $company->website }}">
                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                       
                       



                        <div class="form-group row mb-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success p-2 px-4 mx-2">
                                    edit
                                </button>
                                <a href="{{ url('/dashboard') }}" class="btn btn-danger p-2 px-4 mx-2">
                                    cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a href="{{ url('/dashboard') }}" class="btn btn-danger p-2 px-4 mx-2">
            Dashboard
        </a>
    </div>
</div>

@endsection