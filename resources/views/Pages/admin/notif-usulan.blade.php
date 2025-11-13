@extends('layouts.app-admin')

@section('content')
<div class="bg-[#F5F6FA] p-6 sm:p-10">

    {{-- ⬆ Header Middle: Lokasi + Tanggal --}}
    <div class="bg-white rounded-xl shadow p-6">

        <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-6">
            <span>Surakarta, Indonesia</span>
            <span>•</span>
            <span>24 September 2025</span>
        </div>

        {{-- ✅ SUCCESS ICON + TITLE --}}
        <div class="flex flex-col items-center text-center">
        <div class="bg-green-100 p-4 rounded-full w-fit flex items-center justify-center">
            <img src="{{ asset('images/check.png') }}" class="w-12 h-12" alt="">
        </div>
            <h2 class="text-2xl text-[#2B3674] font-semibold mt-4">
                Usulan Berhasil Diajukan!
            </h2>

            <p class="text-gray-500 max-w-lg mt-2">
                Usulan kegiatan telah berhasil diajukan ke BKPSDM untuk proses verifikasi.
            </p>

            {{-- ✅ LANGKAH SELANJUTNYA --}}
            <div class="bg-blue-50 p-4 rounded-lg mt-6 text-left max-w-xl w-full">
                <p class="text-[#2B3674] font-semibold mb-2 text-sm">Langkah Selanjutnya:</p>
                <ul class="list-disc list-inside text-sm text-gray-700 leading-relaxed">
                    <li>Tim BKPSDM akan melakukan review usulan dalam 3–5 hari kerja</li>
                    <li>Anda akan mendapat notifikasi via email mengenai status verifikasi</li>
                    <li>Pantau status usulan melalui menu Monitoring</li>
                </ul>
            </div>

            {{-- Navigation --}}
            <div class="flex flex-col sm:flex-row gap-3 mt-8">
                <a href="form-usulan"
                   class="bg-gray-300 text-gray-600 px-6 py-2 text-sm rounded-lg hover:bg-gray-300 transition">
                    Ajukan Usulan Baru
                </a>

                <a href="dashboard-opd"
                   class="bg-[#FFA41B] text-white px-6 py-2 text-sm rounded-lg hover:bg-[#ff9600] transition">
                    Kembali ke Dashboard
                </a>
            </div>

        </div>

    </div>

</div>
@endsection
