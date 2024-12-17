<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f8f9fa, #e9ecef);
            font-family: Arial, sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .business-banner {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            color: #fff;
            text-align: center;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .business-banner h1 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .business-banner img {
            max-width: 80%;
            margin: 0 auto;
        }

        .form-section {
            padding: 2rem;
        }

        .form-section h2 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #1e293b;
        }

        .form-control {
            border-radius: 8px;
        }

        .login-btn {
            background-color: #2563eb;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-size: 1rem;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #1e3a8a;
        }

        .helper-links {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .helper-links a {
            color: #2563eb;
            text-decoration: none;
        }

        .helper-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .business-banner {
                padding: 1rem;
            }

            .business-banner h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="row g-0">
                <div class="col-md-6 business-banner">
                    <h1>Welcome, Business Partner</h1>
                    <img src="{{ asset('images/login.png') }}" alt="Business Illustration">
                </div>
                <div class="col-md-6 form-section">
                    <h2>Login to Your Account</h2>
                    <form action="{{ route('business.login') }}" method="POST">
                        @csrf
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn login-btn w-100">Login</button>
                    </form>
                    <div class="helper-links">
                        <p><a href="#">Forgot your password?</a></p>
                        <p><a href="{{ route('business.register') }}">Create a Business Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
