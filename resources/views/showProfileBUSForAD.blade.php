@extends('layouts.app')

@section('content')
<div class="company-profile py-5 bg-light">
    <div class="container">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-primary text-white text-center py-4">
                <h1 class="display-6 mb-0">HỒ SƠ CÔNG TY</h1>
            </div>
            <div class="card-body p-4">
                <div class="row g-4">
                    <!-- Logo Section -->
                    <div class="col-12 col-md-4">
                        <div class="company-logo text-center mb-4">
                            <img 
                                src="{{ asset('storage/' . $profile->img) ?? 'N/A' }}" 
                                alt="Company Logo" 
                                class="img-fluid rounded-circle shadow-sm" 
                                style="max-width: 250px; height: 250px; object-fit: cover;"
                            >
                        </div>
                        <div class="company-contact bg-dark text-white rounded p-4">
                            <h4 class="mb-3 text-center">Thông Tin Liên Hệ</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-building me-2"></i>
                                    <strong>Tên công ty:</strong> {{ $profile->name ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-phone me-2"></i>
                                    <strong>Số điện thoại:</strong> {{ $profile->hotline ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-envelope me-2"></i>
                                    <strong>Email:</strong> {{ $profile->customer_mail ?? 'N/A' }}
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    <strong>Địa chỉ:</strong> {{ $profile->head_offices ?? 'N/A' }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Details Section -->
                    <div class="col-12 col-md-8">
                        <div class="company-details">
                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-globe me-2 text-primary"></i>WEBSITE CHÍNH THỨC
                                </h3>
                                <a 
                                    href="{{ $profile->official_website }}" 
                                    target="_blank" 
                                    class="text-decoration-none text-primary h5"
                                >
                                    {{ $profile->official_website ?? 'N/A' }}
                                </a>
                            </div>

                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fab fa-facebook me-2 text-primary"></i>TRANG FACEBOOK CHÍNH THỨC
                                </h3>
                                <a 
                                    href="{{ $profile->official_facebook }}" 
                                    target="_blank" 
                                    class="text-decoration-none text-primary h5"
                                >
                                    {{ $profile->official_facebook ?? 'N/A' }}
                                </a>
                            </div>

                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-chart-line me-2 text-primary"></i>TIẾN ĐỘ PHÁT TRIỂN
                                </h3>
                                <p class="text-muted">{{ $profile->progress ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Button -->
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary" onclick="window.history.back();">
                        <i class="fas fa-arrow-left me-2"></i>Quay lại
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection