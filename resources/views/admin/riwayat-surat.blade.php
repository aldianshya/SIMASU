{{-- resources/views/riwayat-surat.blade.php --}}
@extends('layout.app')

@section('main')
    <div style="background: #F8FAFF;  padding: 20px;">
        <div class="bg-[#f7f9fc] min-h-screen p-6">
            <h1 class="text-2xl font-bold text-[#173f80] mb-6">Riwayat Surat</h1>

            {{-- Filter Bar --}}
            <div class="bg-white rounded-lg shadow-sm p-4 flex flex-wrap items-center gap-3 mb-6">
                <button class="flex items-center px-4 py-2 border rounded-md text-gray-700 hover:bg-gray-50">
                    <i class="fas fa-filter mr-2"></i> Filter By
                </button>
                <input type="date" class="border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"
                    value="2019-02-14">
                <select class="border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <option>Nomor Surat</option>
                </select>
                <select class="border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <option>Jenis Surat</option>
                </select>
                <button class="flex items-center px-4 py-2 text-red-500 hover:text-red-700">
                    <i class="fas fa-undo mr-2"></i> Reset Filter
                </button>
            </div>

            {{-- Tabel --}}
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-left text-gray-600">
                            <th class="py-3 px-4">NO</th>
                            <th class="py-3 px-4">NAMA</th>
                            <th class="py-3 px-4">NO SURAT</th>
                            <th class="py-3 px-4">TANGGAL</th>
                            <th class="py-3 px-4">JENIS SURAT</th>
                            <th class="py-3 px-4">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ([['00001', 'Christine Brooks', '089 Kutch Green Apt. 448', '14 Feb 2019', 'Electric'], ['00002', 'Rosie Pearson', '979 Immanuel Ferry Suite 526', '14 Feb 2019', 'Book'], ['00003', 'Darrell Caldwell', '8587 Frida Ports', '14 Feb 2019', 'Medicine'], ['00004', 'Gilbert Johnston', '76B Destiny Lake Suite 600', '14 Feb 2019', 'Mobile'], ['00005', 'Alan Cain', '042 Mylene Throughway', '14 Feb 2019', 'Watch']] as $row)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $row[0] }}</td>
                                <td class="py-3 px-4 text-[#173f80] font-medium">{{ $row[1] }}</td>
                                <td class="py-3 px-4">{{ $row[2] }}</td>
                                <td class="py-3 px-4">{{ $row[3] }}</td>
                                <td class="py-3 px-4">{{ $row[4] }}</td>
                                <td class="py-3 px-4 flex items-center gap-2">
                                    <button class="p-2 border rounded-md hover:bg-gray-100">
                                        <i class="fas fa-edit text-gray-600"></i>
                                    </button>
                                    <button class="p-2 border rounded-md hover:bg-gray-100">
                                        <i class="fas fa-download text-gray-600"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
