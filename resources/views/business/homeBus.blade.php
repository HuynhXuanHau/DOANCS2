@extends('layouts.appBus')

@section('title', 'Nhà Tuyển Dụng')

@section('content')
<body class="bg-gray-900 text-white">
    <div class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold mb-8">Nhà tuyển dụng</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-lg p-6">
                    <img src="{{ asset('images/job_listing_placeholder.png') }}" alt="Job Listing" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Đăng tin tuyển dụng</h3>
                    <p class="text-gray-400 mb-4">Đăng việc làm của bạn lên trang web của chúng tôi để thu hút ứng viên tiềm năng</p>
                    <a href="{{ route('createJobforBusiness') }}" class="bg-blue-500 text-white rounded-lg px-4 py-2 inline-block hover:bg-blue-600">Đăng tin ngay</a>
                </div>
                
                <div class="bg-gray-800 rounded-lg p-6">
                    <img src="{{ asset('images/job_search_placeholder.png') }}" alt="Job Listing" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Tìm kiếm hồ sơ ứng viên</h3>
                    <p class="text-gray-400 mb-4">Truy cập kho ứng viên chất lượng để tìm nhân tài cho công ty bạn</p>
                    <a href="{{ route('homeBusiness') }}" class="bg-blue-500 text-white rounded-lg px-4 py-2 inline-block hover:bg-blue-600">Tìm kiếm ngay</a>
                    </div>
                
                <div class="bg-gray-800 rounded-lg p-6">
                    <img src="{{ asset('images/executive_service_placeholder.png') }}" alt="Job Listing" class="rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Dịch vụ Nhân sự cao cấp</h3>
                    <p class="text-gray-400 mb-4">Executive Search - Giải pháp tối ưu cho nhân sự chủ chốt, nhân sự cấp cao</p>
                    <!-- <a href="{{ route('homeBusiness') }}" class="bg-blue-500 text-white rounded-lg px-4 py-2 inline-block hover:bg-blue-600">Tìm hiểu thêm</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-800 py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6">Tại sao chọn CareerLink.vn?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="{{ asset('images/careerlink_placeholder.png') }}" alt="CareerLink.vn" class="rounded-lg mb-4">
                    <p class="text-gray-400">Là nhà cung cấp hàng đầu các dịch vụ tuyển dụng trực tuyến tại Việt Nam, CareerLink.vn có hơn 100,000 người tìm việc mỗi ngày.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Cẩm nang tuyển dụng</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <img src="{{ asset('images/guide_placeholder.png') }}" alt="Tuyet chieu xay dung doi ngu" class="w-12 h-12 rounded-lg mr-4">
                            <div>
                                <h4 class="text-lg font-bold mb-2">Tuyệt chiêu xây dựng đội ngũ hợp tác</h4>
                                <p class="text-gray-400">Những điều bạn có thể đơn giản để gặt hái thành quả từ một đội ngũ hợp tác.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="{{ asset('images/tips_placeholder.png') }}" alt="5 sao ngu can tranh" class="w-12 h-12 rounded-lg mr-4">
                            <div>
                                <h4 class="text-lg font-bold mb-2">5 sao ngự cần tránh khi viết tin tuyển dụng</h4>
                                <p class="text-gray-400">Các ngữ pháp tránh khi viết tin tuyển dụng để nâng cao tính thu hút cho công ty bạn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
