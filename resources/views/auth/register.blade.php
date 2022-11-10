@extends('layout.auth-master')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center inner-row">
        <div class="col-lg-5 col-md-7">
            <div class="form-box register-form p-md-5 p-3">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">Create your account</h2>
                </div>
                <form action="/register" method="POST">
                    @csrf
                    @include('layout.partials.messages')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Name" id="floatingInput" required />
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Surname" id="floatingInput" required />
                        <label for="floatingInput">Surname</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="Email" id="floatingInput" required />
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-sm" placeholder="Password" id="floatingPassword" required />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mt-3">
                        <button class="btn primaryBg">Register</button>
                    </div>
                </form>
                <div class="mt-3">
                    <span>Already have an account? </span><a href="/login"><button class="p-0 border-0 bg-transparent primaryColor login-show">
                            Login
                        </button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection