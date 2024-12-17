@extends('layouts.app')

@section('content')
<div class="profile-page py-5 bg-light">
    <div class="container">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-primary text-white text-center py-4">
                <h1 class="display-6 mb-0">HỒ SƠ CÁ NHÂN</h1>
            </div>
            <div class="card-body p-4">
                <div class="row g-4">
                    <!-- Avatar Section -->
                    <div class="col-12 col-md-4">
                        <div class="profile-avatar text-center mb-4">
                            <img 
                                src="{{ asset('storage/' . $profile->avatarcv) ?? 'N/A' }}" 
                                alt="Profile Avatar" 
                                class="img-fluid rounded-circle shadow-sm" 
                                style="max-width: 250px; height: 250px; object-fit: cover;"
                            >
                        </div>
                        <div class="profile-contact bg-dark text-white rounded p-4">
                            <h4 class="mb-3 text-center">Thông Tin Cá Nhân</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-user me-2"></i>
                                    <strong>Họ và tên:</strong> {{ $profile->name ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-birthday-cake me-2"></i>
                                    <strong>Năm sinh:</strong> {{ $profile->birthday ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-venus-mars me-2"></i>
                                    <strong>Giới tính:</strong> {{ $profile->sex ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-id-card me-2"></i>
                                    <strong>Số CMND:</strong> {{ $profile->cccd ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-phone me-2"></i>
                                    <strong>Số điện thoại:</strong> {{ $profile->phone ?? 'N/A' }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-envelope me-2"></i>
                                    <strong>Email:</strong> {{ $profile->email ?? 'N/A' }}
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    <strong>Địa chỉ:</strong> {{ $profile->address ?? 'N/A' }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Profile Details Section -->
                    <div class="col-12 col-md-8">
                        <div class="profile-details">
                            <!-- Học Vấn -->
                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-graduation-cap me-2 text-primary"></i>HỌC VẤN
                                </h3>
                                <p class="text-muted">{{ $profile->study ?? 'N/A' }}</p>
                            </div>

                            <!-- Kinh Nghiệm -->
                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-briefcase me-2 text-primary"></i>KINH NGHIỆM LÀM VIỆC
                                </h3>
                                <p class="text-muted">{{ $profile->experience ?? 'N/A' }}</p>
                            </div>

                            <!-- Chứng Chỉ -->
                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-award me-2 text-primary"></i>CHỨNG CHỈ
                                </h3>
                                <p class="text-muted">{{ $profile->certificate ?? 'N/A' }}</p>
                            </div>

                            <!-- Giải Thưởng -->
                            <div class="mb-4">
                                <h3 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-trophy me-2 text-primary"></i>GIẢI THƯỞNG
                                </h3>
                                <p class="text-muted">{{ $profile->award ?? 'N/A' }}</p>
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