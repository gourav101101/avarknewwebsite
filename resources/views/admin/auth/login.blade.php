<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Avark</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vandor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vandor/fontawesome/fontawesome-pro.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/fevi-icon.png') }}">
</head>
<body>
    <div class="login-page">
        <div class="login-card">
            <div class="login-logo">
                <img src="{{ asset('assets/imgs/logo/kp-avark-logo.png') }}" alt="Avark">
                <h2>Welcome Back</h2>
                <p>Sign in to Avark Admin Panel</p>
            </div>

            @if($errors->has('email'))
                <div class="login-error">
                    <i class="fa-regular fa-circle-exclamation"></i>
                    {{ $errors->first('email') }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group-admin">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-input"
                           placeholder="admin@avark.in" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group-admin">
                    <label for="password">Password</label>
                    <div style="position: relative;">
                        <input type="password" name="password" id="password" class="form-input"
                               placeholder="Enter your password" style="padding-right: 40px;" required>
                        <button type="button" id="togglePassword" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #a1a1aa; cursor: pointer; padding: 0;">
                            <i class="fa-regular fa-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="login-remember">
                    <div class="form-check-admin">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    <i class="fa-regular fa-right-to-bracket"></i> Sign In
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
