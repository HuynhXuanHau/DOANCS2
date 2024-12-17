<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 30px;
        }

        .login-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .business-banner {
            background: linear-gradient(135deg, #1e40af, #1d4ed8);
            color: #fff;
            text-align: center;
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .business-banner h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .business-banner img {
            max-width: 70%;
            margin: 0 auto;
        }

        .form-section {
            padding: 2.5rem;
        }

        .form-section h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.8rem;
            color: #1e3a8a;
        }

        .form-control {
            border-radius: 8px;
            font-size: 1rem;
        }

        .login-btn {
            background-color: #1d4ed8;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 500;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #1e40af;
        }

        .helper-links {
            margin-top: 1.2rem;
            text-align: center;
            font-size: 0.95rem;
        }

        .helper-links a {
            color: #1d4ed8;
            text-decoration: none;
        }

        .helper-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .business-banner {
                padding: 1.5rem;
            }

            .business-banner h1 {
                font-size: 1.8rem;
            }

            .form-section {
                padding: 2rem;
            }

            .form-section h2 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="row g-0">
                <div class="col-md-6 business-banner">
                    <img src="{{ asset('images/login.png') }}" alt="Business Illustration">
                    <!-- <h1>Chào mừng bạn đến</h1> -->
                </div>
                <div class="col-md-6 form-section">
                    <h2>Sign In</h2>
                    <form action="{{ route('business.login') }}" method="POST">
                        @csrf
                        @if(session('error'))
                            <div class="alert alert-danger mb-3">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="mb-4">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn login-btn w-100">Đăng nhập</button>
                    </form>
                    <div class="helper-links">
                        <p><a href="#">Quên mật khẩu?</a></p>
                        <p><a href="{{ route('business.register') }}">Đăng kí tài khoản doanh nghiệp</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>