@extends('layouts.app-admin')

@section('content')

<div class="bg-[#F5F6FA] p-6 sm:p-10">

    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
        <span>Surakarta, Indonesia</span>
        <span>•</span>
        <span>11 November 2025</span>
    </div>

    <!-- Judul Utama -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h1 class="text-2xl font-semibold text-[#2B3674] mb-1">
            DETAIL LAPORAN HASIL KEGIATAN
        </h1>
        <p class="text-sm text-gray-500">Informasi lengkap laporan kegiatan pengembangan kompetensi</p>
    </div>

    <!-- 🔹 Header Kegiatan -->
    <div class="bg-white shadow rounded-xl p-6 mb-10 border border-gray-100">
        <div class="flex flex-col gap-2 mb-6">
            <h2 class="text-lg font-semibold text-[#2B3674]">
                Pelatihan Manajemen Keuangan Daerah
            </h2>
            <p class="text-gray-600">Dinas Pendidikan dan Kebudayaan</p>
            <p class="text-gray-500 flex items-center gap-2">
                <i class="fa-regular fa-calendar text-[#2B3674]"></i>
                25 Oktober 2025 – 27 Oktober 2025
            </p>

            <span class="font-medium inline-block w-fit text-xs text-gray-700 bg-yellow-100 px-3 py-1 rounded-lg">
                ⏳ Menunggu Verifikasi
            </span>

            <p class="text-gray-500 mt-2 text-right text-sm">
                Diajukan 15 Oktober 2025
            </p>
        </div>
    </div>

    <!-- 🔸 Identitas Surat -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Identitas Surat</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 text-sm">
            <div>
                <p class="font-medium">Nomor Surat:</p>
                <p class="text-gray-600">001/BKPSDM/IX/2025</p>
            </div>
            <div>
                <p class="font-medium">Tanggal Surat:</p>
                <p class="text-gray-600">6 November 2025</p>
            </div>
            <div>
                <p class="font-medium">Perihal:</p>
                <p class="text-gray-600">Permohonan Izin</p>
            </div>
            <div>
                <p class="font-medium">Lampiran:</p>
                <p class="text-gray-600">1 Lampiran</p>
            </div>
        </div>
    </div>

    <!-- 🔹 Laporan Hasil Kegiatan -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Laporan Hasil Kegiatan</h2>

        <div class="text-sm space-y-4">
            <p><span class="font-medium">Usulan Kegiatan:</span> Pelatihan Pengembangan Kompetensi ASN dalam Bidang Teknologi Informasi</p>
            <p><span class="font-medium">Identitas Surat Usulan Kegiatan:</span> 070/PKT-BKPSDM/2025 – Surat Usulan Pelatihan Kompetensi ASN</p>
            <p><span class="font-medium">Cara Pelatihan:</span> Tatap Muka (Luring)</p>

            <div>
                <p class="font-medium">Latar Belakang:</p>
                <p class="text-gray-700 leading-relaxed">
                    Dalam rangka meningkatkan kemampuan ASN dalam menghadapi transformasi digital dan mendukung penerapan e-Government,
                    diperlukan peningkatan kompetensi di bidang teknologi informasi. Pelatihan ini menjadi sarana bagi ASN untuk
                    memperoleh pemahaman serta keterampilan digital guna menunjang kinerja instansi.
                </p>
            </div>

            <div>
                <p class="font-medium">Dasar Hukum:</p>
                <ul class="list-disc ml-4 text-gray-700 leading-relaxed">
                    <li>Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara</li>
                    <li>Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen PNS</li>
                    <li>Peraturan Kepala LAN Nomor 10 Tahun 2018 tentang Pengembangan Kompetensi PNS</li>
                </ul>
            </div>

            <p><span class="font-medium">Maksud Kegiatan:</span> Untuk meningkatkan kemampuan dan pengetahuan ASN dalam pemanfaatan teknologi informasi sehingga mampu bekerja lebih efisien dan adaptif terhadap perkembangan digital.</p>
            <p><span class="font-medium">Atribut Khusus:</span> Kegiatan ini difokuskan untuk ASN golongan III dan IV dengan target minimal 85% peserta lulus evaluasi akhir pelatihan.</p>
        </div>
    </div>

    <!-- 🔹 Detail Laporan Hasil Kegiatan -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h2 class="font-semibold text-[#2B3674] text-lg mb-4">Detail Laporan Hasil Kegiatan</h2>

        <div class="text-sm text-gray-700 space-y-4">
            <p class="font-medium">Rincian Kegiatan:</p>
            <p>
                Pelatihan Pengembangan Kompetensi ASN Bidang Teknologi Informasi dilaksanakan pada tanggal 10–14 Oktober 2025 di Aula BKPSDM Kota Surakarta
                dan platform Zoom Meeting untuk sesi daring. Kegiatan dibuka secara resmi oleh Kepala BKPSDM Kota Surakarta dengan menghadirkan narasumber
                dari Dinas Komunikasi dan Informatika serta praktisi teknologi digital.
            </p>
            <p>
                Peserta mengikuti pre-test dan post-test untuk mengukur peningkatan kompetensi. Selama pelatihan, peserta dibagi dalam kelompok diskusi dan melakukan studi kasus penerapan sistem informasi pemerintahan.
            </p>

            <p class="font-medium mt-6">Rundown Kegiatan:</p>
            <a href="#" class="text-blue-600 underline hover:text-blue-800">rundown_kegiatan.xlsx</a>

            <p class="font-medium mt-4">Daftar Peserta Kegiatan:</p>
            <a href="#" class="text-blue-600 underline hover:text-blue-800">daftar_peserta.xlsx</a>

            <p class="font-medium mt-4">Undangan:</p>
            <a href="#" class="text-blue-600 underline hover:text-blue-800">https://drive.google.com/file/d/UNDANGAN-PelatihanASN2025/view</a>

            <p class="font-medium mt-4">Materi Kegiatan:</p>
            <a href="#" class="text-blue-600 underline hover:text-blue-800">https://drive.google.com/drive/folders/MATERI-PelatihanIT-BKPSDM2025</a>

            <p class="font-medium mt-4">Daftar Hadir:</p>
            <a href="#" class="text-blue-600 underline hover:text-blue-800">https://drive.google.com/spreadsheets/d/DAFTARHADIR-ASN2025/edit</a>

            <p class="font-medium mt-4">Dokumentasi:</p>
            <a href="#" class="text-blue-600 underline hover:text-blue-800">https://drive.google.com/drive/folders/DOKUMENTASI-BKPSDM2025</a>

            <p class="font-medium mt-4">Gambar Dokumentasi:</p>
            <ul class="list-disc ml-4">
                <li>pembukaan_pelatihan.jpg</li>
                <li>materi.jpg</li>
                <li>penutupan_pelatihan.jpg</li>
            </ul>
        </div>
    </div>

    <!-- 🔘 Navigasi -->
    <div class="flex justify-between mt-10">
        <div class="flex justify-between mt-10">
      <a href="laporan-kegiatan" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
      </a>
    </div>

</div>

@endsection
