@extends('layouts.dash_layout')

@section('content')


<div class="container">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fas fa-map mr-1"></i> Employee </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action=" {{ route('employee.store') }} "enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-10 offset-md-1 col-12 information">
                                <h5> Edit employee </h5>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_id" class="col-md-4 col-form-label text-center">Company</label>
                            <div class="col-md-6">
                                <select name="company_id" id="company_id" class="form-control @error('company_id') is-invalid @enderror" required>
                                    @foreach($company as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                                @error('company_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-center">First_name</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" required>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-center">last_name</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-center">Email</label>
                            <div class="col-md-6">
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-center">phone</label>
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
  



                        <div class="form-group row mb-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success p-2 px-4 mx-2">
                                    add
                                </button>
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