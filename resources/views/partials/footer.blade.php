<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JOB SEARCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
</head>
<style>
    /* General footer styles */
.page-footer {
    background-color: #f8f9fa; /* Light gray background */
}

.page-footer h4 {
    font-weight: 600;
    color: #000; /* Dark text */
}

.page-footer a {
    color: #333;
    text-decoration: none;
}

.page-footer a:hover {
    text-decoration: underline;
}

.page-footer ul {
    padding: 0;
    list-style: none;
}

.page-footer p {
    margin-bottom: 0;
}

.page-footer img {
    max-width: 100%;
    height: auto;
}

/* Responsive Design */
@media (max-width: 992px) {
    .page-footer .d-flex.justify-content-between {
        flex-wrap: wrap; /* Wrap items in smaller screens */
    }

    .page-footer .d-flex > div {
        width: 48%; /* 2 items per row */
        margin-bottom: 20px;
    }
}

@media (max-width: 768px) {
    .page-footer .d-flex > div {
        width: 100%; /* Stack items vertically */
        text-align: center;
    }

    .page-footer .text-center {
        margin-top: 10px;
    }

    .page-footer .text-center h3 {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .page-footer {
        padding: 10px; /* Smaller padding for small screens */
    }

    .page-footer .btn img {
        width: 40px; /* Reduce social icon size */
        height: 40px;
    }

    .page-footer small {
        font-size: 0.8rem;
    }
}

</style>
<body>
    <footer class="page-footer shadow" style="background-color: white;">
        <div class="d-flex flex-column mx-auto py-5" style="width: 80%">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="d-flex align-items-center p-0 text-dark" style="text-decoration: none">
                        <img alt="logo" src="{{ asset('images/login.png') }}" width="150px">
                        <span class="ml-3 h2" style="color: blue;"><i>Nice to meet you!</i></span>
                    </a>
                    <div>
                        <ul style="list-style: none; cursor: pointer; padding-left: 0px; width: 400px;">
                            <li class="my-2">
                                <p class="text-dark">Địa chỉ: Số 470, đường Trần Đại Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, Thành phố Đà Nẵng</p>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" style="text-decoration: none">Liên hệ: (028) 23 888 666; Fax: (028) 37 444 456</a>
                            </li>
                            <li class="my-2">
                                <a class="text-dark" style="text-decoration: none">Email: projob@gmail.com.vn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h4 class="mb-4" style="font-weight: 600"><b>Về IT Jobs</b></h4>
                    <ul style="list-style: none; cursor: pointer; padding-left: 0px;">
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Giới thiệu</a></li>
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Cơ hội việc làm</a></li>
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Hồ sơ năng lực</a></li>
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Tuyển dụng</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-4" style="font-weight: 600"><b>Các dịch vụ</b></h4>
                    <ul style="list-style: none; cursor: pointer; padding-left: 0px;">
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Đăng tin tức thời</a></li>
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Điều khoản dịch vụ</a></li>
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Tìm kiếm nhân tài</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-4" style="font-weight: 600"><b>Kênh giúp đỡ</b></h4>
                    <ul style="list-style: none; cursor: pointer; padding-left: 0px;">
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Liên hệ</a></li>
                        <li class="my-2"><a class="text-dark" style="text-decoration: none" href="#">Hỏi đáp</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <h3>THEO DÕI CHÚNG TÔI TẠI</h3>
                <div class="mb-4">
                    <button class="btn btn-flat">
                        <img src="{{ asset('images/logo_facebook.png') }}" style="border-radius: 9px;" alt="Facebook" width="50px" height="50px">
                    </button>
                    <button class="btn btn-flat">
                        <img src="{{ asset('images/logo_insta.png') }}" style="border-radius: 9px;" alt="Instagram" width="50px" height="50px">
                    </button>
                </div>
                <small>&copy; IT JOB, 2024 - Nơi tìm kiếm việc làm Công nghệ thông tin</small>
            </div>
        </div>
    </footer>
</body>

</html>
