@extends('layouts.app-admin')

@section('title', 'Laporan Hasil Kegiatan')

@section('content')

<!-- Judul -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        DAFTAR PENGAJUAN LAPORAN KEGIATAN PENGEMBANGAN KOMPETENSI ASN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Daftar usulan laporan kegiatan yang saat ini sedang dalam proses pengajuan.
    </p>
</div>

<!-- TABLE SECTION -->
<section class="bg-white rounded-xl shadow p-4 sm:p-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-3">

        <!-- Filter -->
        <div class="flex flex-wrap gap-2">
            <button
                class="border border-gray-300 text-gray-700 px-3 py-1.5 text-sm rounded-lg hover:bg-gray-100 transition flex items-center justify-center gap-2">
                <img src="{{ asset('images/filters.png') }}" alt="Filter" class="w-3.5 h-3.5">
                Filter
            </button>
        </div>

        <!-- Cetak & Upload -->
        <div class="flex flex-wrap gap-2 w-full sm:w-auto justify-end">
            <a href="/tambah-kop"
                class="bg-[#FFA41B] text-white px-3 py-1.5 text-sm rounded-lg hover:bg-[#ff9600] transition flex items-center justify-center gap-2">
                + Tambah KOP Surat dan TTD
            </a>
            

            <a href="/form-laporan"
                class="bg-[#FFA41B] text-white px-3 py-1.5 text-sm rounded-lg hover:bg-[#ff9600] transition flex items-center justify-center gap-2">
                + Upload Laporan
            </a>
        </div>
    </div>

    <!-- TABEL -->
<div class="overflow-x-auto w-full">
    <table class="min-w-full text-sm text-gray-600">
        <thead class="border-b text-gray-700 bg-[#FAFAFB]">
            <tr>
                <th class="py-3 px-4 text-left font-semibold">No</th>
                <th class="py-3 px-4 text-left font-semibold">Nomor Surat</th>
                <th class="py-3 px-4 text-left font-semibold">Perihal Surat</th>
                <th class="py-3 px-4 text-left font-semibold">Nama Kegiatan</th>
                <th class="py-3 px-4 text-left font-semibold">Tanggal Pelaksanaan</th>
                <th class="py-3 px-4 text-left font-semibold">Status</th>
                <th class="py-3 px-4 text-left font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $i }}</td>
                    <td class="py-3 px-4">123/{{ $i }}/BKPSDM/2025</td>
                    <td class="py-3 px-4">Undangan Kegiatan {{ $i }}</td>
                    <td class="py-3 px-4">Pelatihan Kompetensi {{ $i }}</td>
                    <td class="py-3 px-4">10-11-2025</td>
                    <td class="py-3 px-4">
                        @if ($i % 2 == 0)
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                                Disetujui
                            </span>
                        @else
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-medium">
                                Menunggu
                            </span>
                        @endif
                    </td>
                   <td class="py-3 px-4">
    <div class="flex items-center gap-3" x-data="{ open: false }">
        <!-- Tombol Detail -->
        <a href="#" 
           @click.prevent="open = true"
           class="bg-[#4361EE] text-white text-xs px-3 py-1.5 rounded-md hover:bg-[#3651d4] transition">
            Detail
        </a>

        <!-- Popup Modal -->
        <div 
            x-show="open"
            x-transition
            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
        >
            <!-- Modal Card -->
            <div 
                @click.away="open = false"
                class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 text-center relative"
            >
                <!-- Tombol Close -->
                <button 
                    @click="open = false"
                    class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-lg font-bold"
                >
                    ✕
                </button>

                <!-- Judul -->
                <h2 class="text-lg font-semibold text-gray-800 mb-2">
                    Detail Laporan Kegiatan
                </h2>

                <!-- Deskripsi -->
                <p class="text-sm text-gray-500 mb-6">
                    Silakan pilih dokumen yang ingin kamu lihat:
                </p>

                <!-- Tombol Pilihan -->
                <div class="space-y-3">
                    <button 
                        class="w-full bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium py-2 rounded-lg transition">
                        Lihat Laporan Kegiatan
                    </button>
                    <button 
                        class="w-full bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium py-2 rounded-lg transition">
                        Lihat Surat Balasan
                    </button>
                </div>
            </div>
        </div>

        <!-- Icon Edit -->
        <a href="edit-laporan" title="Edit">
            <img src="{{ asset('images/edit.png') }}" 
                 alt="Edit" class="w-5 h-5 hover:opacity-80 transition">
        </a>

        <!-- Icon Hapus -->
        <form action="#" method="POST" class="inline"
              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" title="Hapus">
                <img src="{{ asset('images/delete.png') }}" 
                     alt="Hapus" class="w-5 h-5 hover:opacity-80 transition">
            </button>
        </form>

        <!-- Icon Download -->
        <a href="#" title="Download Sertifikat">
            <img src="{{ asset('images/download.png') }}" 
                 alt="Download" class="w-5 h-5 hover:opacity-80 transition">
        </a>
    </div>
</td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

</section>
@endsection