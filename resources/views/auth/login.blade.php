<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            max-width: 420px;
            width: 100%;
        }

        .input-group-text i {
            transition: color 0.3s;
        }

        /* Warna default ikon */
        .icon-email {
            color: #000308; /* Bootstrap text-info */
        }

        .icon-password {
            color: #000308; /* Bootstrap text-info */
        }

        /* Warna saat input difokuskan (klik atau tab) */
        .form-control:focus {
            border-color: #0dcaf0;
            box-shadow: 0 0 0 0.2rem rgba(10, 58, 202, 0.25);
        }

        
    </style>
</head>
<body>
    <div class="login-card">
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/logo-dark.png') }}" alt="Logo" width="200">
                    <h4 class="mt-3 text-info">Welcome Back</h4>
                    <p class="text-muted">Please login to your account</p>
                </div>

                @if(Session::has('account_deactivated'))
                    <div class="alert alert-danger">{{ Session::get('account_deactivated') }}</div>
                @endif

                <form method="POST" action="{{ url('/login') }}" id="login-form">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope icon-email"></i>
                            </span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                        </div>
                        @error('email')
                        <div class="invalid-feedback d-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock icon-password"></i>
                            </span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Enter your password" required>
                        </div>
                        @error('password')
                        <div class="invalid-feedback d-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('password.request') }}" class="text-decoration-none small">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-info w-100 d-flex justify-content-center align-items-center">
                        Login
                        <div id="spinner" class="spinner-border spinner-border-sm text-light ms-2 d-none" role="status"></div>
                    </button>
        

                </form>
              
            </div>
        </div>
        <footer class="text-center mt-4">
         &copy; {{ date('Y') }} <strong>Agrapana IT Solution</strong>. All rights reserved.
        </footer>


    </div>

    

    <script>
        const form = document.getElementById('login-form');
        const spinner = document.getElementById('spinner');
        form.addEventListener('submit', function() {
            spinner.classList.remove('d-none');
        });
    </script>
</body>
</html>
