<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CMS New Armada Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            /* background: linear-gradient(135deg, #4f46e5, #3b82f6); */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border: none;
            border-radius: 1rem;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            color: #000;
        }

        .form-control::placeholder {
            color: #000000ff;
        }

        .btn-primary {
            background: #6366f1;
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #4f46e5;
        }

        .card h3 {
            color: black;
        }

        .text-muted {
            color: #ddd !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 p-4">
                <div class="card p-4">
                    <img src="{{ asset('/assets/images/NAG.png') }}" class="mx-5" alt="Logo" style="height: 55px; width: auto;">
                    <h4 class="text-center mb-4 mt-2">Admin Company Profile</h4>
                    @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>