@extends('layouts.app-admin')

@section('title', 'Form Pelaksanaan Kegiatan')

@section('content')
<div class="bg-[#F5F6FA] p-6 sm:p-10">

    {{-- Breadcrumb + Title --}}
    <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
        <span>Surakarta, Indonesia</span>
        <span>•</span>
        <span>{{ date('d F Y') }}</span>
    </div>

    {{-- Judul --}}
    <div class="bg-white rounded-xl shadow p-6 mb-10">
        <h1 class="text-2xl font-semibold text-[#2B3674]">
            FORM UPLOAD BUKTI PELAKSANAAN KEGIATAN
        </h1>
        <p class="text-sm text-gray-500 max-w-2xl">
            Silakan lengkapi informasi pelaksanaan kegiatan dan unggah bukti dokumentasinya.
        </p>
    </div>

    {{-- CARD FORM --}}
    <form action="#" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Data Pelaksanaan</h2>
            <p class="text-gray-500 text-sm mb-6">Informasi pelaksanaan kegiatan.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                {{-- Nama Kegiatan --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Nama Kegiatan</label>
                    <input 
                        type="text" 
                        value="{{ $data->nama_kegiatan ?? 'Pelatihan Jarak Jauh' }}"
                        readonly
                        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm bg-gray-100">
                </div>

                {{-- Lokasi --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Lokasi Kegiatan</label>
                    <input 
                        type="text" 
                        value="{{ $data->lokasi ?? 'BKPSDM Surakarta' }}"
                        readonly
                        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm bg-gray-100">
                </div>

                {{-- Tanggal --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Tanggal Kegiatan</label>
                    <input 
                        type="text" 
                        value="{{ $data->tanggal ?? '12/06/2026' }}"
                        readonly
                        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm bg-gray-100">
                </div>

                {{-- Upload Bukti --}}
                <div class="sm:col-span-2">
                    <label class="text-sm font-medium text-gray-700">
                        Unggah Bukti Pelaksanaan (JPG, PNG, JPEG)
                    </label>

                    <label class="mt-2 border border-gray-300 rounded-lg px-3 py-6 
                          flex flex-col items-center text-sm text-gray-500 cursor-pointer
                          hover:bg-gray-50 transition">

                        <i class="fa-solid fa-upload text-2xl mb-2"></i>
                        Klik untuk upload atau drag & drop
                        <input type="file" name="bukti[]" class="hidden" multiple required>

                    </label>

                    @error('bukti')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        {{-- Tombol Navigasi --}}
        <div class="flex justify-between mt-10">
            <a href="{{ url('/pengajuan-usulan') }}" 
                class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
                <i class="fa-solid fa-arrow-left mr-2"></i>Batal
            </a>

            <a href="{{ url('/pengajuan-usulan') }}" 
                class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
                Kirim <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
        </div>

    </form>

</div>
@endsection
