<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chọn loại tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
        }

        .card-img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
            background-color: #f8f9fa;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            overflow: hidden;
        }

        .card-img-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #666;
        }

        .btn-choose {
            background: #4facfe;
            border: none;
            color: #fff;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .btn-choose:hover {
            background: #0078ff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-white mb-5">Bạn muốn đăng nhập với vai trò nào?</h1>
        <div class="row justify-content-center">
            <!-- Card cho Ứng viên -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-img-container">
                        <img src="{{ asset('images/ungvien.png') }}" alt="Ứng viên">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ứng viên</h5>
                        <p class="card-text">Khám phá các cơ hội nghề nghiệp và ứng tuyển ngay hôm nay!</p>
                        <a href="{{ route('candidate.login') }}" class="btn btn-choose w-100">Chọn</a>
                    </div>
                </div>
            </div>
            <!-- Card cho Doanh nghiệp -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-img-container">
                        <img src="{{ asset('images/doanhnghiep.jpg') }}" alt="Doanh nghiệp">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Doanh nghiệp</h5>
                        <p class="card-text">Tìm kiếm nhân tài và đăng tin tuyển dụng ngay!</p>
                        <a href="{{ route('business.login') }}" class="btn btn-choose w-100">Chọn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
