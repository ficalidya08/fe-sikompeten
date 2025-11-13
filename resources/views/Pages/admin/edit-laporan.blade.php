@extends('layouts.app-admin')

@section('title', 'Edit Laporan Hasil Kegiatan')

@section('content')

<div class="bg-[#F5F6FA] p-6 sm:p-10">

    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
        <span>Surakarta, Indonesia</span>
        <span>•</span>
        <span>11 November 2025</span>
    </div>

    <!-- Judul -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h1 class="text-2xl font-semibold text-[#2B3674] mb-1">
            EDIT LAPORAN HASIL KEGIATAN
        </h1>
        <p class="text-sm text-gray-500">Ubah dan perbarui informasi laporan kegiatan pengembangan kompetensi ASN.</p>
    </div>

    <form action="/laporan-kegiatan" method="POST" class="space-y-10">
        @csrf
        @method('PUT')

        <!-- Identitas Surat -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Identitas Surat</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <label class="font-medium">Nomor Surat:</label>
                    <input type="text" name="nomor_surat" value="001/BKPSDM/IX/2025"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">
                </div>

                <div>
                    <label class="font-medium">Tanggal Surat:</label>
                    <input type="date" name="tanggal_surat" value="2025-11-06"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">
                </div>

                <div>
                    <label class="font-medium">Perihal:</label>
                    <input type="text" name="perihal" value="Permohonan Izin"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">
                </div>

                <div>
                    <label class="font-medium">Lampiran:</label>
                    <input type="text" name="lampiran" value="1 Lampiran"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">
                </div>
            </div>
        </div>

        <!-- Laporan Hasil Kegiatan -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Laporan Hasil Kegiatan</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <label class="font-medium">Usulan Kegiatan:</label>
                    <input type="text" name="usulan" value="Pelatihan Pengembangan Kompetensi ASN dalam Bidang Teknologi Informasi"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">
                </div>

                <div>
                    <label class="font-medium">Cara Pelatihan:</label>
                    <select name="cara" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">
                        <option selected>Tatap Muka (Luring)</option>
                        <option>Daring (Online)</option>
                        <option>Blended (Campuran)</option>
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <label class="font-medium">Latar Belakang:</label>
                <textarea name="latar_belakang" rows="4"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">Dalam rangka meningkatkan kemampuan ASN dalam menghadapi transformasi digital...</textarea>
            </div>

            <div class="mt-4">
                <label class="font-medium">Dasar Hukum:</label>
                <textarea name="dasar_hukum" rows="3"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">UU No. 5 Tahun 2014, PP No. 11 Tahun 2017, Peraturan LAN No. 10 Tahun 2018</textarea>
            </div>

            <div class="mt-4">
                <label class="font-medium">Maksud Kegiatan:</label>
                <textarea name="maksud" rows="3"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-2 focus:ring-[#2B3674] focus:outline-none">Untuk meningkatkan kemampuan dan pengetahuan ASN dalam pemanfaatan teknologi informasi...</textarea>
            </div>
        </div>

        <!-- 🔹 Upload File -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Lampiran & Dokumentasi</h2>

            <div class="space-y-3 text-sm">
                <div>
                    <label class="font-medium">Rundown Kegiatan:</label>
                    <input type="file" name="rundown" class="block w-full mt-1 text-sm text-gray-600">
                </div>

                <div>
                    <label class="font-medium">Daftar Peserta:</label>
                    <input type="file" name="peserta" class="block w-full mt-1 text-sm text-gray-600">
                </div>

                <div>
                    <label class="font-medium">Dokumentasi:</label>
                    <input type="file" name="dokumentasi" class="block w-full mt-1 text-sm text-gray-600">
                </div>
            </div>
        </div>

        <!-- 🔘 Tombol Aksi -->
        <div class="flex justify-between">
            <button type="button" onclick="window.history.back()"
                class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left mr-2"></i>Batal
            </button>

            <a href="laporan-kegiatan" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Kirim Perubahan<i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </form>

</div>

@endsection
