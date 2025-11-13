<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SIKOMPETEN')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
</head>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<body class="min-h-screen bg-[#F4F5F7] text-gray-800 flex flex-col">

    <!-- Konten Utama -->
    <main class="flex-1 overflow-y-auto p-6 md:p-10 bg-[#F4F5F7]">
        @yield('content')
    </main>

</body>
</html>
