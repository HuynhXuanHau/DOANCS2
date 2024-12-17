<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Sign Up Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .signup-container {
            display: flex;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1200px;
            min-height: 600px;
        }

        .signup-form {
            flex: 1;
            padding: 3rem;
            transition: all 0.3s ease;
        }

        .signup-image {
            flex: 1;
            position: relative;
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
            padding: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .signup-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
            transform: skewX(-15deg);
        }

        .signup-image img {
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 2rem;
            text-align: left;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }

        .input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f7fafc;
        }

        .input:focus {
            outline: none;
            border-color: #4299e1;
            background: white;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.1);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .checkbox {
            width: 1.2rem;
            height: 1.2rem;
            margin-right: 0.75rem;
            cursor: pointer;
        }

        .link {
            color: #4299e1;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .link:hover {
            color: #2b6cb0;
        }

        .btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(45deg, #4299e1 0%, #667eea 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
        }

        .btn:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            font-size: 0.9rem;
            color: #718096;
        }

        /* Responsive Design */
        @media screen and (max-width: 1024px) {
            .signup-container {
                max-width: 900px;
            }
        }

        @media screen and (max-width: 768px) {
            .signup-container {
                flex-direction: column;
                min-height: auto;
            }

            .signup-image {
                padding: 2rem;
                order: -1;
                min-height: 300px;
            }

            .signup-form {
                padding: 2rem;
            }

            .form-title {
                font-size: 2rem;
                text-align: center;
            }
        }

        @media screen and (max-width: 480px) {
            body {
                padding: 1rem;
            }

            .signup-form {
                padding: 1.5rem;
            }

            .signup-image {
                padding: 1.5rem;
                min-height: 200px;
            }

            .form-title {
                font-size: 1.75rem;
                margin-bottom: 1.5rem;
            }
        }
        .input-group {
    margin-bottom: 20px;
}

.label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.password-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.password-wrapper .input {
    padding-right: 40px; /* Để tránh trùng với icon */
}

.password-toggle {
    position: absolute;
    right: 10px;
    cursor: pointer;
    color: #666;
}

        </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h1 class="form-title">Đăng ký công ty</h1>
            <form action="{{ route('business.register') }}" method="post">
                @csrf
                <div class="input-group">
                    <label class="label" for="rg_name">Tên công ty</label>
                    <input type="text" id="rg_name" name="rg_name" class="input" placeholder="Nhập tên công ty" required>
                </div>
                <div class="input-group">
    <label class="label" for="rg_email">Email đại diện</label>
    <input type="email" id="rg_email" name="rg_email" class="input" placeholder="Nhập email đại diện" required>
</div>

<div class="input-group">
    <label class="label" for="rg_password">Mật khẩu</label>
    <div class="password-wrapper">
        <input type="password" id="rg_password" name="rg_password" class="input" placeholder="Tạo mật khẩu" required>
        <span class="password-toggle" onclick="togglePassword('password')">
            <i class="fas fa-eye"></i>
        </span>
    </div>
</div>

<div class="input-group">
    <label class="label" for="rg_password_confirmation">Xác nhận mật khẩu</label>
    <div class="password-wrapper">
        <input type="password" id="rg_password_confirmation" name="rg_password_confirmation" class="input" placeholder="Nhập lại mật khẩu" required>
        <span class="password-toggle" onclick="togglePassword('rg_password_confirmation')">
            <i class="fas fa-eye"></i>
        </span>
    </div>
</div>


                <div class="checkbox-group">
                    <input type="checkbox" id="checkAgree" name="checkAgree" class="checkbox" required>
                    <label for="checkAgree">
                        Tôi đồng ý với <a href="#" class="link">Điều khoản dịch vụ</a> và <a href="#" class="link">Chính sách bảo mật</a>
                    </label>
                </div>
                <button type="submit" class="btn">Đăng ký</button>
                <p class="login-link">
                    Đã có tài khoản? <a href="{{ route('login') }}" class="link">Đăng nhập</a>
                    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                </p>
            </form>
        </div>
        <div class="signup-image">
            <img src="{{ asset('images/register.jpg') }}" alt="Minh họa đăng ký">
        </div>
    </div>
    <script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const icon = input.nextElementSibling.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}



</script>
</body>
</html>