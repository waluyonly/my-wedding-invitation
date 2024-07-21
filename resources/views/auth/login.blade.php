@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="content">
        <div class="card card-login">
            <div class="card-body">
                <div class="app-brand justify-content-center text-center">
                    <h4 class="text-center mb-2">Selamat Datang 👋</h4>
                    <a href="{{ route('home') }}" class="text-center" style="text-decoration: none;">
                        <h2 class="">{{ env('APP_NAME') }}</h2>
                    </a>
                    <h3 class="text-center">Sitronella & Waluyo</h3>
                    <p class="mb-4">Silahkan masukkan email dan passwordmu untuk login.</p>
                </div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (@session('status'))
                        <div class="mb-2">
                            <div class="text-success">{{ session('status') }}</div>
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email"
                            autofocus />
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" name="password" class="form-control" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary submit-login d-grid w-100" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .card-login {
            margin: auto;
            margin-top: 200px;
            align-items: center;
            justify-content: center;
            max-width: 600px;
            float: none;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.submit-login', function() {
                Swal.fire({
                    title: 'Login request is being processed!',
                    html: 'Please wait ...',
                    timer: 15000,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            });
        });
    </script>
@endpush
