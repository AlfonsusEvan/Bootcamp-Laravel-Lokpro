@extends('backend.LognReg')
@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                            </div>
                            @if(session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            @if($errors->any())
                            @foreach($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                            <form action="{{ route('login.action') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="username" name="username" class="form-control form-control-user"
                                        id="username" aria-describedby="emailHelp"
                                        placeholder="Enter username...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="password" placeholder="Password">
                                </div>
                                <a class="small" href="{{ route('register') }}">Create Password</a>
                                <div class="mb-3 mt-1">
                                    <button class="btn btn-primary">Login</button>
                                    <a class="btn btn-danger" href="/">Back</a>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection