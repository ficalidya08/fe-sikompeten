@extends('layouts.app')

@section('content')
<div class="h-screen bg-[#F9FAFB] flex justify-center items-center">

    <!-- Card -->
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md border border-[#f3f4f6] relative">

        <!-- Tombol Close -->
        <button 
            onclick="window.history.back()" 
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-all">
            <i class="fa-solid fa-xmark text-2xl"></i>
        </button>

        <h2 class="text-2xl font-semibold text-[#2B3674] mb-6 text-center">Upload Tanda Tangan</h2>

        <form action="#" method="POST" enctype="multipart/form-data" 
              onsubmit="event.preventDefault(); alert('TTD diupload');">

            <!-- Label -->
            <label class="block text-sm font-medium text-[#5A5A5A] mb-2">
                File Tanda Tangan <span class="text-gray-400 text-xs">(PNG/JPG)</span>
            </label>

            <!-- Input File -->
            <div class="relative mb-5">
                <input type="file" name="file_ttd" accept=".png,.jpg,.jpeg"
                    class="block w-full text-sm text-gray-700 
                           border border-[#E0E7FF] rounded-lg cursor-pointer
                           bg-[#F9FAFF] focus:ring-2 focus:ring-[#A5B4FC] focus:outline-none p-2">
            </div>

            <!-- Tombol Simpan -->
            <button type="submit"
                class="w-full py-2.5 rounded-lg 
                       bg-gradient-to-r from-[#C4B5FD] to-[#C4B5FD] 
                       text-white font-semibold hover:opacity-90 transition">
                Simpan
            </button>
        </form>

        <!-- Info -->
        <div class="mt-6 text-center text-gray-500 text-sm">
            Pastikan tanda tangan kamu jelas dan transparan (background putih atau transparan).
        </div>
    </div>
</div>
@endsection
