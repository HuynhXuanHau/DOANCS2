
@extends('layouts.appBusiness')

@section('title', 'Đăng tin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin liên hệ Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-card {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .contact-header {
            background-color: #444;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            font-weight: bold;
        }

        .contact-icon {
            font-size: 1.2rem;
            margin-right: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <div class="text-center mb-4">
            <h2 class="fw-bold">Thông Tin Liên Hệ Admin</h2>
            <p class="text-muted">Liên hệ để đăng tin tuyển dụng nhanh chóng và hiệu quả.</p>
        </div>

        <!-- Contact Cards -->
        <div class="row">
            <!-- Hồ Chí Minh -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">Hồ Chí Minh</div>
                    <div class="mt-3">
                        <p><i class="fa-solid fa-location-dot contact-icon"></i>Phòng 302, 270-272 Cộng Hòa, P.13, Q.Tân Bình, TP. Hồ Chí Minh</p>
                        <p><i class="fa-solid fa-phone contact-icon"></i><a href="tel:02838130501" class="text-decoration-none">028 3813 0501</a></p>
                        <p><i class="fa-solid fa-envelope contact-icon"></i><a href="mailto:contact@careerlink.vn" class="text-decoration-none">contact@careerlink.vn</a></p>
                    </div>
                </div>
            </div>

            <!-- Hà Nội -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">Hà Nội</div>
                    <div class="mt-3">
                        <p><i class="fa-solid fa-location-dot contact-icon"></i>307, DMC Tower, 535 Kim Mã, Ba Đình, Hà Nội</p>
                        <p><i class="fa-solid fa-phone contact-icon"></i><a href="tel:02435190410" class="text-decoration-none">024 3519 0410</a></p>
                        <p><i class="fa-solid fa-envelope contact-icon"></i><a href="mailto:contact@careerlink.vn" class="text-decoration-none">contact@careerlink.vn</a></p>
                    </div>
                </div>
            </div>

            <!-- Đà Nẵng -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">Đà Nẵng</div>
                    <div class="mt-3">
                        <p><i class="fa-solid fa-location-dot contact-icon"></i>Số 470, đường Trần Đại Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, Thành phố Đà Nẵng</p>
                        <p><i class="fa-solid fa-phone contact-icon"></i><a href="tel:02363221767" class="text-decoration-none">0236 3221 767</a></p>
                        <p><i class="fa-solid fa-envelope contact-icon"></i><a href="mailto:contact@careerlink.vn" class="text-decoration-none">projob@gmail.com.vn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome và Bootstrap JS -->
    <script src="https://kit.fontawesome.com/241549bf03.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection