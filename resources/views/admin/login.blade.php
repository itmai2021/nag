<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CMS New Armada Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background: #fff;
            border-radius: 1rem;
            padding: 3.5rem 3rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .form-floating-custom {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-floating-custom input {
            width: 100%;
            padding: 1rem 0.7rem 0.7rem 1rem;
            font-size: 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            background-color: #fff;
        }

        .form-floating-custom label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            color: #9ca3af;
            font-size: 1rem;
            pointer-events: none;
            transition: 0.2s ease all;
            background: white;
            padding: 0 4px;
        }

        .form-floating-custom input:focus+label,
        .form-floating-custom input:not(:placeholder-shown)+label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.75rem;
            color: #6366f1;
        }

        .form-floating-custom input:focus {
            border-color: #6366f1;
            outline: none;
            box-shadow: 0 0 0 0.1rem rgba(99, 102, 241, 0.2);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #9ca3af;
        }

        .btn-login {
            background: linear-gradient(135deg, #031843, #7077d5ff);
            border: none;
            border-radius: 0.5rem;
            color: #fff;
            font-weight: 500;
            padding: 0.6rem;
            width: 100%;
        }

        .btn-login:hover {
            opacity: 0.95;
        }

        .text-center img {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="login-card p-5">
        <div class="text-center mb-1">
            <img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo" height="43">
        </div>
        <h5 class="text-center mb-3 mt-0">CMS Company Profile</h5>
        <form action="{{ route('login.auth') }}" method="POST">
            @csrf

            <div class="form-floating-custom">
                <input type="text" name="username" id="username" placeholder=" " required>
                <label for="username">Username</label>
            </div>

            <div class="form-floating-custom">
                <input type="password" name="password" id="password" placeholder=" " required>
                <label for="password">Password</label>
                <i class="bi bi-eye-slash password-toggle" id="togglePassword"></i>
            </div>

            <button type="submit" class="btn btn-login">Log In</button>
        </form>
    </div>

    <script>
        // Show/hide password
        const toggle = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        toggle.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            toggle.classList.toggle('bi-eye');
            toggle.classList.toggle('bi-eye-slash');
        });
    </script>
</body>

</html>