@extends('layouts.app-superadmin')

@section('title', 'Daftar Balasan SuperAdmin')

@section('content')

<!-- Judul -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        DAFTAR SURAT BALASAN LAPORAN KEGIATAN PENGEMBANGAN KOMPETENSI ASN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Daftar surat balasan laporan kegiatan yang saat ini sudah terkirim.
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
                    <th class="py-3 px-4 text-left font-semibold">Nomor Surat Balasan</th>
                    <th class="py-3 px-4 text-left font-semibold">Perihal</th>
                    <th class="py-3 px-4 text-left font-semibold">Usulan Kegiatan</th>
                    <th class="py-3 px-4 text-left font-semibold">Tanggal Dikirim</th>
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
                            <div class="flex items-center gap-3" x-data="{ open: false }">
                                <!-- Tombol Detail -->
                                <button 
                                    @click="open = true"
                                    class="bg-[#4361EE] text-white text-xs px-3 py-1.5 rounded-md hover:bg-[#3651d4] transition">
                                    Detail
                                </button>

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

                                <!-- Popup Modal -->
                                <div 
                                    x-show="open"
                                    x-transition
                                    class="fixed inset-0 bg-gray-900 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
                                >
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
                                            Detail Balasan Laporan Kegiatan
                                        </h2>

                                        <p class="text-sm text-gray-500 mb-6 text-center">
                                            Silakan pilih dokumen yang ingin kamu lihat:
                                        </p>

                                        <!-- Tombol Lihat -->
                                        <button 
                                            class="w-full bg-indigo-100 hover:bg-indigo-200 text-indigo-700 font-medium py-2 rounded-lg transition">
                                            Lihat Surat Balasan
                                        </button>

                                        <div class="my-6 border-t border-gray-200"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</section>
@endsection
