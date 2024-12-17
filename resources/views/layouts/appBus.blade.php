<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Trang chủ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/241549bf03.js" crossorigin="anonymous"></script>
    <style>
        /* Custom styles for the navbar and footer */
        .navbar-brand {
            font-size: 1.5rem;
            color: #007bff !important;
        }
        .navbar-nav .nav-link {
            font-size: 1.2rem;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
            text-align: center;
        }
        .container-content {
            padding: 2rem;
            margin-top: 4.5rem; /* Add space to avoid content overlap with fixed navbar */
            min-height: 60vh;
        }
        .container-content {
            padding-top: 5rem; /* Dành cho desktop */
        }
        @media (max-width: 768px) {
            .container-content {
                padding-top: 6.5rem; /* Dành cho màn hình nhỏ */
            }
        }
        /* Custom card and grid styles */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            text-align: center;
        }


/* Media Query: Tablet */
@media (max-width: 768px) {
    .page-footer .d-flex {
        flex-direction: column; /* Xếp cột dọc */
        align-items: center; /* Căn giữa */
    }

    .page-footer .d-flex > div {
        text-align: center; /* Căn giữa nội dung */
        margin: 10px 0;
    }
}

/* Media Query: Mobile */
@media (max-width: 576px) {
    .page-footer .d-flex {
        flex-direction: column; /* Cột xếp dọc */
        text-align: center;
    }

    .page-footer .d-flex > div {
        padding: 0 15px; /* Thêm padding cho nội dung thoáng hơn */
    }

    .page-footer h4 {
        font-size: 18px; /* Giảm kích thước tiêu đề */
    }

    .page-footer ul li {
        font-size: 14px; /* Giảm kích thước chữ */
    }

    .page-footer img {
        width: 40px; /* Giảm kích thước icon */
    }

    .page-footer small {
        font-size: 12px;
    }
}

    </style>
</head>
<body>
    <!-- Navbar -->
    <!-- Navbar -->
<nav class="bg-white shadow-lg fixed top-0 left-0 right-0 z-10">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('business.home') }}" class="font-bold text-gray-800 text-lg">IT JOB _Business</a>
        <div class="relative inline-block">
            <button class="flex items-center space-x-2 text-gray-800 focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true" onclick="toggleUserMenu()">
                <img src="{{ asset('images/admin.png') }}" alt="Avatar" class="w-8 h-8 rounded-full">
                <span>{{ session('business_name') }}</span>
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" id="user-menu">
                <div class="py-1" role="none">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    function toggleUserMenu() {
        const userMenu = document.getElementById('user-menu');
        userMenu.classList.toggle('hidden');
    }
</script>
    <!-- Content -->
    <div class="container container-content">
        
        @yield('content')
    </div>

    <footer class="page-footer shadow" style="background-color: rgba(82, 75, 94, 0.1);">
<div class="d-flex flex-column mx-auto py-5" style="width: 80%">
    <div class="d-flex justify-content-between">
        <div>
            <a href="#" class="d-flex align-items-center p-0 text-light" style="text-decoration: none">
                <img alt="logo" src="{{ asset('images/login.png') }}" width="150px">
                <span class="ml-3 h2" style="color: #ffffff;"><i>Nice to meet you!</i></span>
            </a>
            <div>
                <ul style="list-style: none; cursor: pointer; padding-left: 0px; width: 400px;">
                    <li class="my-2">
                        <p style="color: #ffffff;">Địa chỉ: Số 470, đường Trần Đại Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, Thành phố Đà Nẵng</p>
                    </li>
                    <li class="my-2">
                        <a class="text-light" style="text-decoration: none; color: #ffffff;">Liên hệ: (028) 23 888 666; Fax: (028) 37 444 456</a>
                    </li>
                    <li class="my-2">
                        <a class="text-light" style="text-decoration: none; color: #ffffff;">Email: projob@gmail.com.vn</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <h4 class="mb-4" style="font-weight: 600; color: #ffffff;"><b>Về IT Jobs</b></h4>
            <ul style="list-style: none; cursor: pointer; padding-left: 0px;">
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Giới thiệu</a></li>
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Cơ hội việc làm</a></li>
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Hồ sơ năng lực</a></li>
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Tuyển dụng</a></li>
            </ul>
        </div>
        <div>
            <h4 class="mb-4" style="font-weight: 600; color: #ffffff;"><b>Các dịch vụ</b></h4>
            <ul style="list-style: none; cursor: pointer; padding-left: 0px;">
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Đăng tin tức thời</a></li>
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Điều khoản dịch vụ</a></li>
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Tìm kiếm nhân tài</a></li>
            </ul>
        </div>
        <div>
            <h4 class="mb-4" style="font-weight: 600; color: #ffffff;"><b>Kênh giúp đỡ</b></h4>
            <ul style="list-style: none; cursor: pointer; padding-left: 0px;">
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Liên hệ</a></li>
                <li class="my-2"><a class="text-light" style="text-decoration: none; color: #ffffff;" href="#">Hỏi đáp</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-4">
        <h3 style="color: #ffffff;">THEO DÕI CHÚNG TÔI TẠI</h3>
        <div class="mb-4">
            <button class="btn btn-flat">
                <img src="{{ asset('images/logo_facebook.png') }}" style="border-radius: 9px;" alt="Facebook" width="50px" height>
            </button>
            <button class="btn btn-flat">
                <img src="{{ asset('images/logo_insta.png') }}" style="border-radius: 9px;" alt="Instagram" width="50px" height>
            </button>
        </div>
        <small style="color: #ffffff;">&copy; IT JOB, 2024 - Nơi tìm kiếm việc làm Công nghệ thông tin</small>
    </div>
</div>
</footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
