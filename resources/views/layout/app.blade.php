<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - SIMASU</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .d-flex {
            flex: 1;
        }

        .sidebar {
            background-color: white;
            /* Sesuai warna biru gelap di gambar */
            color: #0B2F63;
            width: 200px;
            /* Lebar lebih kecil sesuai gambar */
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
            padding-left: 10px;
            padding-right: 10px;
            overflow-y: auto;
            transition: transform 0.3s ease;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            align-items: left;
            padding-left: 25px;

        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        .sidebar h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #0B2F63;
            /* color: white; */
            align-self: flex-start;
            padding-left: 10px;
        }

        .sidebar a {
            color: #19467c;
            text-decoration: none;
            display: block;
            padding: 12px 0;
            border-bottom: none;
            font-size: 14px;
            width: 100%;
            text-align: left;
            /* Biar rata kiri */
            padding-left: 10px;
            /* Jarak dari kiri */
            cursor: pointer;
            transition: background-color 0.3s, padding-left 0.3s;
        }

        .sidebar a:hover {
            background-color: #19467c;
            color: white;
            padding-left: 15px;
            padding-left: 25px;

            /* Efek sedikit bergeser saat hover */
        }

        .sidebar a.active {
            background-color: #19467c;
            color: white;
            font-weight: bold;
            border-left: 4px solid #0B2F63;
            /* Tambahkan border kiri jika mau efek aktif */
            padding-left: 10px;
        }

        .main-content {
            margin-left: 100px;
            /* Margin kiri disesuaikan agar tidak menimpa sidebar */
            padding: 40px;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
        }

        .main-content.full {
            margin-left: 0;
            padding: 40px;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
        }

        footer.footer {
            background-color: #0B2F63;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            overflow-x: auto;
            width: 100vw;
            position: relative;
            left: 0;
            z-index: 1000;
        }

        .toggle-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001;
        }

        @media screen and (max-width: 768px) {
            .main-content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Tombol toggle sidebar -->
        {{-- <button class="btn btn-sm btn-dark toggle-button" id="toggleSidebar">☰</button> --}}

        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <h2>SIMASU</h2>
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('pilih-template') }}"
                    class="{{ request()->routeIs(['membuat-surat', 'pilih-template']) ? 'active' : '' }}">Buat Surat</a>
                <a href="{{ route('riwayat-surat') }}"
                    class="{{ request()->routeIs('riwayat-surat') ? 'active' : '' }}">Riwayat Surat</a>
                <a href="{{ route('template-surat') }}"
                    class="{{ request()->routeIs('template-surat') ? 'active' : '' }}">Template Surat</a>
                <a href="#">Pengguna</a>
                <a href="#">Log out</a>
            </div>

            <!-- Main Content -->
            <div class="main-content" id="mainContent">
                @yield('main')
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <span>&copy; 2025 SIMASU - Sistem Manajemen Surat | Developed by Aldiansyah</span>
            </div>
        </footer>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Toggle Sidebar Script -->
    <script>
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
            mainContent.classList.toggle('full');
        });
    </script>
</body>

</html>
