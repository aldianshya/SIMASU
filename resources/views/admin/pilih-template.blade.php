{{-- resources/views/pilih-template.blade.php --}}
@extends('layout.app')

@section('main')
    <style>
        body {
            background-color: #F8FAFF;
            font-family: 'Poppins', sans-serif;
        }

        .template-card {
            background: white;
            border-radius: 8px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 16px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .template-card:hover {
            background-color: #F3F4F6;
        }

        .template-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dot {
            width: 8px;
            height: 8px;
            background-color: #1E40AF;
            /* biru */
            border-radius: 50%;
        }

        .template-name {
            font-size: 14px;
            color: #1F2937;
            font-weight: 500;
        }

        .template-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #9CA3AF;
            font-size: 16px;
        }

        .template-actions i:hover {
            color: #4C6EF5;
        }

        .template-preview {
            background: white;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
            margin-top: -10px;
            margin-bottom: 16px;
        }

        .btn-tambah {
            background-color: #1E40AF;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-tambah:hover {
            background-color: #123073;
        }
    </style>

    <div class="container py-4">
        <h4 class="mb-4 font-weight-bold" style="color:#1F2937;">Buat Surat</h4>

        @foreach ($templates as $index => $template)
        <div class="template-card" data-target="preview{{ $index }}">
            <div class="template-left">
                <div class="dot"></div>
                <span class="template-name">{{ $template->nama_surat }}</span>
            </div>
            <div class="template-actions">
                <i class="far fa-star"></i>
            </div>
        </div>
        <div id="preview{{ $index }}" class="template-preview" style="display: none;">
            <iframe src="{{ asset('storage/' . $template->file_path) }}" width="100%" height="500px"
                style="border:none; border-radius:6px;"></iframe>
            <br>
            <a href="{{ route('membuat-surat') }}" class="btn-tambah">Tambah Surat</a>
        </div>
    @endforeach
    </div>

    <script>
        document.querySelectorAll('.template-card').forEach(card => {
            card.addEventListener('click', function() {
                const target = document.getElementById(this.dataset.target);
                const isVisible = target.style.display === 'block';

                // Tutup semua preview
                document.querySelectorAll('.template-preview').forEach(p => p.style.display = 'none');

                // Buka kalau sebelumnya tertutup
                if (!isVisible) {
                    target.style.display = 'block';
                }
            });
        });

        // Event klik "Tambah Surat"
        // document.querySelectorAll('.btn-tambah').forEach(btn => {
        //     btn.addEventListener('click', function () {
        //         alert("Form tambah surat bisa dibuka di sini.");
        //     });
        // });
    </script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
