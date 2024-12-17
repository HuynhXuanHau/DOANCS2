@extends('layouts.app') <!-- Or your main layout -->


@section('content')
<div class="container-fluid py-4" style="margin-top: 7%;">
  <div class="row">
    @include('partials.sidebar_admin')
    
    <div class="col-md-10 col-sm-12">
      <div class="card shadow-sm">
        <div class="card-body p-0">

          <!-- Results Table -->
          <div class="table-responsive mt-4">
            <table class="table table-hover table-striped align-middle">
              <thead class="bg-light">
                <tr>
                  @if ($state == 'Waiting')
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Thêm thông tin</th>
                    <th scope="col" class="text-center">Thao tác</th>
                @elseif ($state == 'Yes')
                    <th scope="col">Mã</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Thêm thông tin</th>
                @elseif(empty(request()->query('action')))
                    <th scope="col">#</th>
                    <th scope="col">Mã</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Thêm thông tin</th>
                @endif
                </tr>
              </thead>
              <tbody>
                @forelse($results as $row)
                  <tr>
                    <td class="text-center">{{ $row->id }}</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div>{{ $row->name }}</div>
                      </div>
                    </td>    
                    <td>{{ $row->hotline }}</td>
                    <td>{{ $row->customer_mail }}</td>
      
                       @if($state == 'Waiting')
                            <td class="text-center">
                              <a href="{{ route('showProfileBUSForAD', ['id' => $row->id]) }}" 
                                class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-file-alt me-1"></i>Xem chi tiết
                              </a>
                            </td>
                            <td style="text-align: center;">
                              <div class="btn-group" role="group">
                                <!-- Form for Approve -->
                                <form action="{{ route('applyBUS.approve') }}" method="POST" style="display:inline;">
                                  @csrf
                                  <input type="hidden" name="id" value="{{ $row->id }}">
                                  <button type="submit" class="btn btn-sm btn-success">
                                    <i class="fas fa-check me-1"></i>Duyệt
                                  </button>
                                </form>
                                
                                <!-- Form for Reject -->
                                <form action="{{ route('applyBUS.reject') }}" method="POST" style="display:inline;">
                                  @csrf
                                  <input type="hidden" name="id" value="{{ $row->id }}">
                                  <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-times me-1"></i>Từ chối
                                  </button>
                                </form>
                              </div>
                            </td>
                        @elseif ($state == 'Yes')
                            <td class="text-center">
                              <a href="{{ route('showProfileBUSForAD', ['id' => $row->id]) }}" 
                                 class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-file-alt me-1"></i>Xem chi tiết
                              </a>
                            </td>
                          @elseif(empty(request()->query('action')))
                          <td >{{ $row->state }}</td>
                            <td class="text-center">
                              <a href="{{ route('showProfileBUSForAD', ['id' => $row->id]) }}" 
                                 class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-file-alt me-1"></i>Xem chi tiết
                              </a>
                            </td>
                      @endif
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="7" class="text-center py-4 text-muted">
                      <i class="fas fa-inbox fa-3x mb-3"></i>
                      <p>Không tìm thấy kết quả nào</p>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom CSS -->
<style>
  .form-control:focus,
  .form-select:focus {
    border-color: #2C5D63;
    box-shadow: 0 0 0 0.25rem rgba(44, 93, 99, 0.25);
  }

  .btn-primary {
    background-color: #2C5D63;
    border-color: #2C5D63;
  }

  .btn-primary:hover {
    background-color: #234951;
    border-color: #234951;
  }

  .text-primary {
    color: #2C5D63 !important;
  }

  .bg-primary {
    background-color: #2C5D63 !important;
  }

  .table th {
    font-weight: 600;
    background-color: #f8f9fa;
  }

  .avatar {
    width: 32px;
    height: 32px;
    overflow: hidden;
  }

  .avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  @media (max-width: 768px) {
    .btn-group {
      flex-direction: column;
    }
    
    .btn-group .btn {
      width: 100%;
      margin-bottom: 0.25rem;
    }
    
    .table-responsive {
      font-size: 0.875rem;
    }
  }
</style>

<!-- Add Font Awesome CDN in your layout file if not already included -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
