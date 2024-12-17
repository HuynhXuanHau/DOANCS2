@extends('layouts.appBusiness')

@section('content')
<div class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-lg border-0 rounded-lg">
            <div class="bg-blue-600 text-white text-center py-5 rounded-t-lg">
                <h1 class="text-4xl font-bold mb-0">HỒ SƠ CÁ NHÂN</h1>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Avatar Section -->
                    <div class="text-center">
                        <div class="profile-avatar mb-5">
                            <img 
                                src="{{ asset('storage/' . $profile->avatarcv) ?? 'N/A' }}" 
                                alt="Profile Avatar" 
                                class="w-48 h-48 rounded-full object-cover shadow-sm mx-auto"
                            >
                        </div>
                        <div class="bg-gray-800 text-white rounded-lg p-5">
                            <h4 class="text-lg font-bold mb-3 text-center">Thông Tin Cá Nhân</h4>
                            <ul class="list-none">
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-user text-blue-500 mr-2"></i>
                                    <strong>Họ và tên:</strong> {{ $profile->name ?? 'N/A' }}
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-birthday-cake text-blue-500 mr-2"></i>
                                    <strong>Năm sinh:</strong> {{ $profile->birthday ?? 'N/A' }}
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-venus-mars text-blue-500 mr-2"></i>
                                    <strong>Giới tính:</strong> {{ $profile->sex ?? 'N/A' }}
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-id-card text-blue-500 mr-2"></i>
                                    <strong>Số CMND:</strong> {{ $profile->cccd ?? 'N/A' }}
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-phone text-blue-500 mr-2"></i>
                                    <strong>Số điện thoại:</strong> {{ $profile->phone ?? 'N/A' }}
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-envelope text-blue-500 mr-2"></i>
                                    <strong>Email:</strong> {{ $profile->email ?? 'N/A' }}
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                                    <strong>Địa chỉ:</strong> {{ $profile->address ?? 'N/A' }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Profile Details Section -->
                    <div class="profile-details">
                        <!-- Học Vấn -->
                        <div class="mb-6">
                            <h3 class="border-b pb-2 mb-3 text-blue-600 font-bold">
                                <i class="fas fa-graduation-cap mr-2"></i>HỌC VẤN
                            </h3>
                            <p class="text-gray-600">{{ $profile->study ?? 'N/A' }}</p>
                        </div>

                        <!-- Kinh Nghiệm -->
                        <div class="mb-6">
                            <h3 class="border-b pb-2 mb-3 text-blue-600 font-bold">
                                <i class="fas fa-briefcase mr-2"></i>KINH NGHIỆM LÀM VIỆC
                            </h3>
                            <p class="text-gray-600">{{ $profile->experience ?? 'N/A' }}</p>
                        </div>

                        <!-- Chứng Chỉ -->
                        <div class="mb-6">
                            <h3 class="border-b pb-2 mb-3 text-blue-600 font-bold">
                                <i class="fas fa-award mr-2"></i>CHỨNG CHỈ
                            </h3>
                            <p class="text-gray-600">{{ $profile->certificate ?? 'N/A' }}</p>
                        </div>

                        <!-- Giải Thưởng -->
                        <div class="mb-6">
                            <h3 class="border-b pb-2 mb-3 text-blue-600 font-bold">
                                <i class="fas fa-trophy mr-2"></i>GIẢI THƯỞNG
                            </h3>
                            <p class="text-gray-600">{{ $profile->award ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Button -->
                <div class="text-center mt-6">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg" onclick="window.history.back();">
                        <i class="fas fa-arrow-left mr-2"></i>Quay lại
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection