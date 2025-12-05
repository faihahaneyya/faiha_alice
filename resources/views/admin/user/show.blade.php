@extends('layouts.admin.app')
@section('content')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail User</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Detail User</h1>
                    <p class="mb-0">Informasi detail user.</p>
                </div>
                <div>
                    <a href="{{route('user.index')}}" class="btn btn-primary">
                        <i class="far fa-question-circle me-1"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <!-- Profile Picture -->
                                @if($user->profile_picture)
                                    <img src="{{ asset('storage/' . $user->profile_picture) }}"
                                         alt="{{ $user->name }}"
                                         class="rounded-circle mb-3"
                                         width="150"
                                         height="150"
                                         onerror="this.src='{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}'">
                                @else
                                    <img src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}"
                                         alt="Default Avatar"
                                         class="rounded-circle mb-3"
                                         width="150"
                                         height="150">
                                @endif

                                <h4>{{ $user->name }}</h4>
                                <span class="badge
                                    @if($user->role == 'Super Admin') bg-danger
                                    @elseif($user->role == 'Administrator') bg-warning text-dark
                                    @elseif($user->role == 'Mitra') bg-info
                                    @else bg-secondary @endif">
                                    {{ $user->role }}
                                </span>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <p class="form-control-plaintext">{{ $user->name }}</p>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <p class="form-control-plaintext">{{ $user->email }}</p>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Role</label>
                                        <p class="form-control-plaintext">{{ $user->role }}</p>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tanggal Dibuat</label>
                                        <p class="form-control-plaintext">{{ $user->created_at->format('d M Y H:i') }}</p>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Terakhir Diupdate</label>
                                        <p class="form-control-plaintext">{{ $user->updated_at->format('d M Y H:i') }}</p>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">
                                        <svg class="icon icon-xs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        Edit User
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
