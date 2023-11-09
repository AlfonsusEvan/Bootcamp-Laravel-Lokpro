@extends('backend.LognReg')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('register.action') }}" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" type="text" name="name" value="{{ old('name') }}"placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="username" class="form-control form-control-user" type="username" name="username" value="{{ old('username') }}" placeholder="Username">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"name="password_confirm" placeholder="Password_confirm">
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary btn-user btn-block">Register</button>
                        <a class="btn btn-danger btn-user btn-block" href="{{ route('login') }}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection