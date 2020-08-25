@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Edit User
                </div>

                <div class="card-body">
                    <form action="{{route('postEdit', ['id' => $user->id])}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" name="name" value="{{$user->name}}">
                        <small id="emailHelp" class="form-text text-muted">Enter your name at least 3 to 100 characters.</small>
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                          {{$errors->first('name')}}
                        </div>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid':''}}" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                          {{$errors->first('email')}}
                        </div>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid':''}}">
                        <small class="text-muted">leave it blank if you don't want to change it</small>
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                          {{$errors->first('password')}}
                        </div>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Re-password</label>
                        <input type="password" name="repassword" class="form-control {{$errors->has('repassword') ? 'is-invalid':''}}">
                        @if($errors->has('repassword'))
                        <div class="invalid-feedback">
                          {{$errors->first('repassword')}}
                        </div>
                        @endif
                      </div>
                      <button type="submit" class="btn btn-primary float-right">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
