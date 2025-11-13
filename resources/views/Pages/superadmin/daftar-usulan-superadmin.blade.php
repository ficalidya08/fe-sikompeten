@extends('layouts.app-superadmin')

@section('title', 'Daftar Usulan SuperAdmin')

@section('content')

<!-- Judul -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        DAFTAR PENGAJUAN USULAN KEGIATAN PENGEMBANGAN KOMPETENSI ASN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Daftar usulan kegiatan yang saat ini sedang dalam proses pengajuan.
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

<!-- Popup Modal (Detail + Review) -->
<div 
    x-show="open"
    x-transition
    class="fixed inset-0 bg-gray-900 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
>
    <!-- Modal Card -->
    <div 
        @click.away="open = false"
        class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 relative"
    >
        <!-- Tombol Close -->
        <button 
            @click="open = false"
            class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-lg font-bold"
        >
            ✕
        </button>

        <!-- Judul -->
        <h2 class="text-lg font-semibold text-gray-800 mb-2 text-center">
            Detail Usulan Kegiatan
        </h2>

        <!-- Deskripsi -->
        <p class="text-sm text-gray-500 mb-6 text-center">
            Silakan pilih dokumen yang ingin kamu lihat:
        </p>

        <!-- Tombol Pilihan -->
        <div class="space-y-3">
            <button 
                class="w-full bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium py-2 rounded-lg transition">
                Lihat Surat Usulan
            </button>
        </div>

        <!-- Garis Pemisah -->
        <div class="my-6 border-t border-gray-200"></div>

        <!-- Review Section -->
        <div x-data="{ openReview: false }" class="mt-4">
            <h3 class="text-md font-semibold text-gray-800 mb-3 text-center">
                Review Usulan Kegiatan
            </h3>

            <!-- Textarea -->
            <textarea 
                class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B] focus:border-transparent resize-none"
                rows="4"
                placeholder="Tulis Catatan Review (opsional)..."
            ></textarea>

            <!-- Tombol Aksi -->
            <div class="flex justify-center gap-4 mt-6">
                <button 
                    class="bg-green-100 hover:bg-green-200 text-green-700 font-medium px-6 py-2 rounded-lg transition">
                    Setuju
                </button>

                <button 
                    class="bg-red-100 hover:bg-red-200 text-red-700 font-medium px-6 py-2 rounded-lg transition">
                    Tolak
                </button>
            </div>
        </div>
    </div>
</div>
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
    </div>
</td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

</section>
@endsection
