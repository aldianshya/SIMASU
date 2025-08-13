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
    <div style="display: flex; align-items: center;">
        <h4 class="mb-4 font-weight-bold" style="color:#1F2937;">Kelola Template Surat</h4>
        <button id="btnTambahTemplate" class="btn-tambah" style="margin-left: auto">
            Tambah Template
        </button>
    </div>

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


    <!-- Modal -->
    <!-- Tombol Tambah Template -->
    {{-- <button id="btnTambahTemplate" 
        style="background-color: #1E3A8A; color: white; padding: 8px 16px; border: none; border-radius: 6px; cursor: pointer;">
    Tambah Template
</button> --}}

    <!-- Modal Upload Template -->
    <div id="modalTemplate"
        style="display:none; position: fixed; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; 
    background-color: rgba(0,0,0,0.4);">

        <div
            style="background: white; border-radius: 10px; max-width: 500px; margin: 100px auto; padding: 20px; position: relative;">

            <!-- Tombol Close -->
            <span id="closeModal"
                style="position: absolute; top: 10px; right: 15px; font-size: 20px; cursor: pointer;">&times;</span>

            <h2 style="color: #1E3A8A; text-align: center; margin-bottom: 10px;">Form Input Template</h2>
            <p style="text-align: center; color: #555;">Silakan masukan template baru yang ingin anda tambahkan</p>

            <form action="{{ route('template.store') }}" method="POST" enctype="multipart/form-data"
                style="margin-top: 20px;">
                @csrf
                <label style="display: block; margin-bottom: 5px;">Nama Template:</label>
                <input type="text" name="nama_surat" required placeholder="Nama Template"
                    style="display: block; margin-bottom: 15px; width: 100%; padding: 6px; border: 1px solid #ccc; border-radius: 5px;">

                <label style="display: block; margin-bottom: 5px;">Template Baru:</label>
                <input type="file" name="template" required
                    style="display: block; margin-bottom: 15px; width: 100%; padding: 6px; border: 1px solid #ccc; border-radius: 5px;">

                <button type="submit"
                    style="background-color: #1E3A8A; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                    Simpan
                </button>
            </form>

        </div>
    </div>

    <!-- Script Modal -->
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
        const modal = document.getElementById("modalTemplate");
        const btn = document.getElementById("btnTambahTemplate");
        const closeBtn = document.getElementById("closeModal");

        btn.onclick = () => {
            modal.style.display = "block";
        }

        closeBtn.onclick = () => {
            modal.style.display = "none";
        }

        window.onclick = (e) => {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    {{-- <script>
    const modal = document.getElementById('templateModal');
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');

    openBtn.addEventListener('click', () => modal.classList.remove('hidden'));
    closeBtn.addEventListener('click', () => modal.classList.add('hidden'));

    modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.add('hidden');
    });

    document.querySelectorAll('.template-card').forEach(card => {
        card.addEventListener('click', function () {
            const target = document.getElementById(this.dataset.target);
            const isVisible = target.style.display === 'block';

            document.querySelectorAll('.template-preview').forEach(p => p.style.display = 'none');

            if (!isVisible) target.style.display = 'block';
        });
    });
</script> --}}

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
