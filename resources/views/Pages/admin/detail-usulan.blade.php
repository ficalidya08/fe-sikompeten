@extends('layouts.app-admin')

@section('content')

<div class="bg-[#F5F6FA] p-6 sm:p-10">

    {{-- Breadcrumb + Title --}}
    <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
        <span>Surakarta, Indonesia</span>
        <span>•</span>
        <span>24 September 2025</span>
    </div>


    <div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        DETAIL USULAN KEGIATAN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Informasi lengkap usulan kegiatan pengembangan kompetensi
    </p>
</div>

    {{-- ✅ CARD HEADER --}}
        <div class="mt-6 mb-10 bg-white shadow rounded-xl p-6 border border-gray-100">
            
            <div class="flex flex-col gap-2 mb-10">
                <h2 class="text-lg font-semibold text-[#2B3674]">
                    Pelatihan Manajemen Keuangan Daerah
                </h2>

                <p class="text-gray-500">
                    Dinas Pendidikan dan Kebudayaan
                </p>

                <p class="text-gray-500">
                    📅 25 Oktober 2025 – 27 Oktober 2025
                </p>

                <span class="font-medium inline-block w-fit text-xs text-gray-700 bg-yellow-100 px-3 py-1 rounded-lg">
                    ⏳ Menunggu Verifikasi
                </span>

                <p class="text-gray-500 mt-2 text-right">
                    Diajukan 15 Oktober 2025
                </p>
            </div>
        </div>



    {{-- Identitas Surat --}}
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="font-semibold text-[#2B3674] text-lg">Identitas Surat</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-2 text-sm mt-4">
            <div>
                <p class="font-medium">Nomor Surat:</p>
                <p class="text-gray-500">001/BKPSDM/IX/2025</p>
            </div>
            <div>
                <p class="font-medium">Tanggal Surat:</p>
                <p class="text-gray-500">6 November 2025</p>
            </div>

            <div>
                <p class="font-medium">Perihal:</p>
                <p class="text-gray-500">Permohonan Izin</p>
            </div>
            <div>
                <p class="font-medium">Lampiran:</p>
                <p class="text-gray-500">1 Lampiran</p>
            </div>
        </div>
    </div>

    {{-- Usulan Kegiatan --}}
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="font-semibold text-[#2B3674] text-lg">Usulan Kegiatan</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 text-sm mt-4">
            <div>
                <p class="font-medium">Sub Unit Kerja Pengajuan Kegiatan:</p>
                <p class="text-gray-500">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</p>
            </div>

            <div>
                <p class="font-medium">Nama Kegiatan:</p>
                <p class="text-gray-500">Pelatihan Kepemimpinan Dasar bagi Pegawai Baru</p>
            </div>

            <div>
                <p class="font-medium">Lokasi Kegiatan:</p>
                <p class="text-gray-500">Aula BKPSDM Kota Surakarta</p>
            </div>

            <div>
                <p class="font-medium">Cara Pelatihan Kegiatan:</p>
                <p class="text-gray-500">Tatap Muka (Luring)</p>
            </div>

            <div>
                <p class="font-medium">Tanggal Pelaksanaan Kegiatan:</p>
                <p class="text-gray-500">3 Desember 2025</p>
            </div>

            <div>
                <p class="font-medium">Dilajukan Oleh:</p>
                <p class="text-gray-500">Tatap Muka (Luring)</p>
            </div>
        </div>
    </div>

    {{-- Detail Kegiatan --}}
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="font-semibold text-[#2B3674] text-lg">Detail Kegiatan</h2>

        <div class="space-y-6 text-sm mt-4">

            {{-- Latar Belakang --}}
            <div>
                <p class="font-medium mb-1">Latar Belakang Kegiatan:</p>
                <p class="text-gray-700 leading-relaxed">
                    Dalam rangka meningkatkan kompetensi pegawai baru, diperlukan pelatihan kepemimpinan dasar agar mampu memahami nilai-nilai organisasi dan mengembangkan potensi diri dalam bekerja secara profesional.
                </p>
            </div>

            {{-- Dasar Hukum --}}
            <div>
                <p class="font-medium mb-1">Dasar Hukum Kegiatan:</p>
                <ol class="list-decimal ml-4 text-gray-700 leading-relaxed">
                    <li>Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara.</li>
                    <li>Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen PNS.</li>
                </ol>
            </div>

            {{-- Uraian --}}
            <div>
                <p class="font-medium mb-1">Uraian Kegiatan:</p>
                <p class="text-gray-700 leading-relaxed">
                    Pelatihan ini akan dilaksanakan selama 3 hari dengan metode ceramah, diskusi, dan simulasi kepemimpinan.
                </p>
            </div>

            {{-- Maksud --}}
            <div>
                <p class="font-medium mb-1">Maksud Kegiatan:</p>
                <p class="text-gray-700 leading-relaxed">
                    Meningkatkan pemahaman pegawai baru tentang konsep dasar kepemimpinan dan etika kerja di lingkungan pemerintahan.
                </p>
            </div>

            {{-- Tujuan --}}
            <div>
                <p class="font-medium mb-1">Tujuan Kegiatan:</p>
                <p class="text-gray-700 leading-relaxed">
                    Membentuk pegawai yang memiliki jiwa kepemimpinan, tanggung jawab, dan kemampuan beradaptasi dengan budaya kerja organisasi.
                </p>
            </div>

            {{-- Hasil --}}
            <div>
                <p class="font-medium mb-1">Hasil Kegiatan:</p>
                <ul class="list-disc ml-4 text-gray-700 leading-relaxed">
                    <li>Memiliki kompetensi dasar kepemimpinan, komunikasi, dan kerja tim.</li>
                    <li>Mampu menerapkan nilai-nilai dasar ASN.</li>
                    <li>Mendapatkan sertifikat pelatihan kepemimpinan.</li>
                    <li>Tersusunnya laporan hasil pelatihan dan dokumentasi.</li>
                </ul>
            </div>

            {{-- Narasumber --}}
            <div>
                <p class="font-medium mb-1">Narasumber Kegiatan:</p>
                <p class="text-gray-700 leading-relaxed">
                    Drs. Bambang Widodo, M.Si (BKPSDM Provinsi Jawa Tengah) <br>
                    Dra. Siti Nurhayati, M.Pd (Kepala Pusat Diklat ASN)
                </p>
            </div>

            {{-- Jumlah Peserta --}}
            <div>
                <p class="font-medium mb-1">Jumlah Peserta Kegiatan:</p>
                <p class="text-gray-700">40 orang pegawai baru</p>
            </div>

            {{-- Anggaran --}}
            <div>
                <p class="font-medium mb-1">Alokasi Anggaran Kegiatan:</p>
                <p class="text-gray-700">Rp 25.000.000,-</p>
            </div>

            {{-- Metode --}}
            <div>
                <p class="font-medium mb-1">Metode Pelatihan Kegiatan:</p>
                <p class="text-gray-700">Pelatihan Berbasis Kompetensi (dengan Sertifikat Kompetensi)</p>
            </div>

            {{-- Jadwal --}}
            <div>
                <p class="font-medium mb-1">Jadwal Pelaksanaan Kegiatan:</p>
                <a href="#" class="text-blue-600 underline hover:text-blue-800">
                    Jadwal_Pelatihan_Kepemimpinan.xlsx
                </a>
            </div>

        </div>
    </div>

    <!-- 🔘 Navigation -->
    <div class="flex justify-between mt-10">
      <a href="pengajuan-usulan" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
      </a>
    </div>

</div>

@endsection
