@extends('layouts.app-admin')

@section('content')

<div class="bg-[#F5F6FA] p-6 sm:p-10">

    {{-- Breadcrumb + Title --}}
    <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
        <span>Surakarta, Indonesia</span>
        <span>•</span>
        <span>24 September 2025</span>
    </div>

    <!-- ✏️ Header -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h1 class="text-2xl font-semibold text-[#2B3674]">EDIT FORMULIR PENGAJUAN USULAN</h1>
        <p class="text-sm text-gray-500 max-w-2xl">
            Perbarui data usulan kegiatan sesuai kebutuhan sebelum disimpan.
        </p>
    </div>

    <form class="space-y-10">

        {{-- Identitas Surat --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Identitas Surat</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <label class="font-medium block mb-1">Nomor Surat</label>
                    <input type="text" value="001/BKPSDM/IX/2025" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Tanggal Surat</label>
                    <input type="date" value="2025-11-06" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Perihal</label>
                    <input type="text" value="Permohonan Izin" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Lampiran</label>
                    <input type="text" value="1 Lampiran" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>
            </div>
        </div>

        {{-- Usulan Kegiatan --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Usulan Kegiatan</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <label class="font-medium block mb-1">Sub Unit Kerja</label>
                    <input type="text" value="BKPSDM Kota Surakarta" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Nama Kegiatan</label>
                    <input type="text" value="Pelatihan Kepemimpinan Dasar bagi Pegawai Baru" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Lokasi</label>
                    <input type="text" value="Aula BKPSDM Kota Surakarta" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Cara Pelatihan</label>
                    <select class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                        <option selected>Tatap Muka (Luring)</option>
                        <option>Daring</option>
                        <option>Campuran</option>
                    </select>
                </div>

                <div>
                    <label class="font-medium block mb-1">Tanggal Pelaksanaan</label>
                    <input type="date" value="2025-12-03" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>

                <div>
                    <label class="font-medium block mb-1">Dilaksanakan Oleh</label>
                    <input type="text" value="BKPSDM Kota Surakarta" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>
            </div>
        </div>

        {{-- Detail Kegiatan --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Detail Kegiatan</h2>

            <div class="space-y-4 text-sm">
                <div>
                    <label class="font-medium block mb-1">Latar Belakang</label>
                    <textarea rows="3" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">Dalam rangka meningkatkan kompetensi pegawai baru...</textarea>
                </div>

                <div>
                    <label class="font-medium block mb-1">Dasar Hukum</label>
                    <textarea rows="3" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">Undang-Undang Nomor 5 Tahun 2014...</textarea>
                </div>

                <div>
                    <label class="font-medium block mb-1">Uraian Kegiatan</label>
                    <textarea rows="3" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">Pelatihan ini akan dilaksanakan selama 3 hari...</textarea>
                </div>

                <div>
                    <label class="font-medium block mb-1">Tujuan Kegiatan</label>
                    <textarea rows="3" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">Membentuk pegawai yang memiliki jiwa kepemimpinan...</textarea>
                </div>

                <div>
                    <label class="font-medium block mb-1">Anggaran</label>
                    <input type="number" value="25000000" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#2B3674]/30">
                </div>
            </div>
        </div>

        <!-- 🔘 Tombol Aksi -->
        <div class="flex justify-between mt-10">
            <button type="button" onclick="window.history.back()"
                class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left mr-2"></i>Batal
            </button>

        <a href="pengajuan-usulan" 
            class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
            Kirim Perubahan<i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
        </div>
    </form>
</div>

@endsection
