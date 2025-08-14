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

        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-wrapper {
            display: flex;
            flex: 1;
        }

        .sidebar {
            background-color: white;
            color: #0B2F63;
            width: 200px;
            padding: 20px 10px 20px 25px;
            overflow-y: auto;
            position: fixed;
            flex-shrink: 0;
    
        }

        .sidebar h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #0B2F63;
            padding-left: 10px;
        }

        .sidebar a {
            color: #19467c;
            text-decoration: none;
            display: block;
            padding: 12px 10px;
            font-size: 14px;
            transition: background-color 0.3s, padding-left 0.3s;
        }

        .sidebar a:hover {
            background-color: #19467c;
            color: white;
            padding-left: 25px;
        }

        .sidebar a.active {
            background-color: #19467c;
            color: white;
            font-weight: bold;
        }

        .main-content {
             margin-left: 200px;
            flex: 1;
            padding: 40px;
            background-color: #ffffff; /* Latar biru */
            color: white;
            min-height: calc(100vh - 60px); /* ruang untuk footer */
        }

        footer.footer {
            background-color: #0B2F63;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            width: 100%;
        }

        /* Responsif */
        @media screen and (max-width: 992px) {
            .content-wrapper {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #ddd;
                padding: 10px;
            }

            .main-content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Sidebar -->
            <div class="sidebar">
                <h2>SIMASU</h2>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('pilih-template') }}" class="{{ request()->routeIs(['membuat-surat', 'pilih-template']) ? 'active' : '' }}">Buat Surat</a>
                <a href="{{ route('riwayat-surat') }}" class="{{ request()->routeIs('riwayat-surat') ? 'active' : '' }}">Riwayat Surat</a>
                <a href="{{ route('template-surat') }}" class="{{ request()->routeIs('template-surat') ? 'active' : '' }}">Template Surat</a>
                <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Pengguna</a>

                <a href="#">Log out</a>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('main')
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <span>&copy; 2025 SIMASU - Sistem Manajemen Surat | Developed by Aldiansyah</span>
            </div>
        </footer>
    </div>
</body>

</html>
