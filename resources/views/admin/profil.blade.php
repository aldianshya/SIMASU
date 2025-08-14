@extends('layout.app')

@section('main')
<style>
    body {
        font-family: 'Poppins', sans-serif;

        color: #19467c;
    }

    .form-card {
        background: white;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        color: #19467c;
        max-width: 900px;
        margin: 0 auto;
    }

    .profile-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #E5E7EB;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px auto;
        font-size: 24px;
        color: #6B7280;
    }

    .user-info {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px 40px;
    }

    .info-label {
        font-weight: 500;
        color: #1F2937;
        font-size: 14px;
    }

    .info-value {
        font-size: 14px;
        color: #374151;
        background-color: #F9FAFB;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #E5E7EB;
    }

    .btn-edit {
        background-color: #4C6EF5;
        border: none;
        color: white;
        font-size: 16px;
        padding: 10px 40px;
        border-radius: 8px;
        transition: background-color 0.2s ease;
    }

    .btn-edit:hover {
        background-color: #3B5BDB;
    }
</style>

<div style="background: #F8FAFF;  padding: 20px;">
    <h3 class="text-left mb-4 font-weight-bold " style="color: #19467c;">Halaman Pengguna</h3>

    <div class="form-card">
        <!-- Foto Profil -->
        <div class="profile-img">
            <i class="fas fa-user"></i>
        </div>

        <!-- Informasi Pengguna -->
        <div class="user-info">
            <div>
                <div class="info-label">First Name</div>
                <div class="info-value">{{ $user->first_name ?? '-' }}</div>
            </div>
            <div>
                <div class="info-label">Last Name</div>
                <div class="info-value">{{ $user->last_name ?? '-' }}</div>
            </div>
            <div>
                <div class="info-label">Email</div>
                <div class="info-value">{{ $user->email ?? '-' }}</div>
            </div>
            <div>
                <div class="info-label">Phone Number</div>
                <div class="info-value">{{ $user->phone ?? '-' }}</div>
            </div>
            <div>
                <div class="info-label">Date of Birth</div>
                <div class="info-value">{{ $user->birth_date ?? '-' }}</div>
            </div>
            <div>
                <div class="info-label">Gender</div>
                <div class="info-value">{{ $user->gender ?? '-' }}</div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn-edit">Edit Profil</a>
        </div>
    </div>
</div>
@endsection
