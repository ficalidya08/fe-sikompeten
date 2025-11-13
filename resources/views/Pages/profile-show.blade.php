@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="min-h-screen bg-white flex items-center justify-center py-10 px-4 relative">

    <!-- Tombol Close -->
<button 
    onclick="window.history.back()" 
    class="absolute top-6 right-6 text-gray-500 hover:text-gray-700 transition-all">
    <i class="fa-solid fa-xmark text-2xl"></i>
</button>


    <div class="w-full max-w-4xl bg-white shadow-lg rounded-2xl p-8 border border-[#E1BEE7]">

        <!-- HEADER -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-[#6A1B9A]">Profile Settings</h1>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Profile Information -->
            <div class="bg-[#F3E5F5] rounded-xl p-6 border border-[#D1C4E9]">
                <h2 class="text-lg font-semibold text-[#7E57C2] mb-2 flex items-center gap-2">
                    <i class="fa-solid fa-user text-[#9575CD]"></i> Profile Information
                </h2>
                <p class="text-gray-600 text-sm mb-4">Update your name and email address.</p>

                <form class="space-y-4">
                    <div>
                        <label for="name" class="block font-medium text-[#4A148C]">Name</label>
                        <input id="name" name="name" type="text" placeholder="Your Name"
                            class="mt-1 w-full border border-[#D1C4E9] bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#B39DDB] focus:outline-none">
                    </div>

                    <div>
                        <label for="email" class="block font-medium text-[#4A148C]">Email</label>
                        <input id="email" name="email" type="email" placeholder="you@example.com"
                            class="mt-1 w-full border border-[#D1C4E9] bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#B39DDB] focus:outline-none">
                    </div>

                    <button type="button"
                        class="bg-[#B39DDB] text-white px-4 py-2 rounded-lg font-medium hover:bg-[#9575CD] transition-all">
                        Save Changes
                    </button>
                </form>
            </div>

            <!-- Update Password -->
            <div class="bg-[#F3E5F5] rounded-xl p-6 border border-[#D1C4E9]">
                <h2 class="text-lg font-semibold text-[#7E57C2] mb-2 flex items-center gap-2">
                    <i class="fa-solid fa-lock text-[#9575CD]"></i> Update Password
                </h2>
                <p class="text-gray-600 text-sm mb-4">Keep your account secure with a strong password.</p>

                <form class="space-y-4">
                    <div>
                        <label for="current_password" class="block font-medium text-[#4A148C]">Current Password</label>
                        <input id="current_password" name="current_password" type="password"
                            class="mt-1 w-full border border-[#D1C4E9] bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#B39DDB] focus:outline-none">
                    </div>

                    <div>
                        <label for="new_password" class="block font-medium text-[#4A148C]">New Password</label>
                        <input id="new_password" name="new_password" type="password"
                            class="mt-1 w-full border border-[#D1C4E9] bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#B39DDB] focus:outline-none">
                    </div>

                    <div>
                        <label for="confirm_password" class="block font-medium text-[#4A148C]">Confirm Password</label>
                        <input id="confirm_password" name="confirm_password" type="password"
                            class="mt-1 w-full border border-[#D1C4E9] bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#B39DDB] focus:outline-none">
                    </div>

                    <button type="button"
                        class="bg-[#B39DDB] text-white px-4 py-2 rounded-lg font-medium hover:bg-[#9575CD] transition-all">
                        Update Password
                    </button>
                </form>
            </div>
        </div>

        <!-- Delete Account -->
        <div class="mt-8 bg-[#FCE4EC] rounded-xl p-6 border border-[#F8BBD0]">
            <h2 class="text-lg font-semibold text-[#AD1457] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-trash-can text-[#D81B60]"></i> Delete Account
            </h2>
            <p class="text-gray-700 text-sm mb-4">
                Once your account is deleted, all resources and data will be permanently lost.
            </p>
            <button type="button"
                class="bg-[#F48FB1] text-white px-4 py-2 rounded-lg font-medium hover:bg-[#EC407A] transition-all">
                Delete Account
            </button>
        </div>

    </div>
</div>
@endsection
