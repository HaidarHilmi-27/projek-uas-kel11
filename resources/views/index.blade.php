
<!DOCTYPE html>
<html>
<head>
    <title>Parkiran Kampus</title>
    <style>
        .box {
            padding: 10px;
            margin: 10px;
            border-radius: 6px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>
<body>
    <!-- Navbar -->
<nav class="bg-white/40 backdrop-blur-md shadow-md fixed top-0 w-full h-16 z-50">
  <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
    <div class="text-xl font-bold text-blue-600">
      <a href="{{ url('/') }}">Parkir Kampus</a>
    </div>

    <!-- Tombol Hamburger -->
    <button id="menu-toggle" class="md:hidden text-gray-600 focus:outline-none">
      <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Menu Navigasi -->
    <div id="menu" class="hidden md:flex md:items-center md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none px-4 py-4 md:p-0 transition-all duration-300 flex-col md:flex-row space-y-4 md:space-y-0 z-40">

      <!-- Link Navigasi -->
      <div class="flex flex-col md:flex-row md:items-center md:space-x-4 w-full md:w-auto">
        <a href="#about" class="text-gray-700 hover:text-blue-500">Tentang</a>
        <a href="#info" class="text-gray-700 hover:text-blue-500">Informasi</a>
        <a href="#features" class="text-gray-700 hover:text-blue-500">Parkiran</a>
        <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500">Login</a>
        <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-500">Register</a>
      </div>

      <!-- Form Pencarian -->
      <div class="flex flex-col md:flex-row md:items-center md:space-x-2 w-full md:w-auto">
        <input type="text" id="searchArea" placeholder="Cari area parkir..." class="px-4 py-2 border border-gray-300 rounded w-full md:w-64 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <button id="searchBtn" class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition w-full md:w-auto mt-2 md:mt-0">
          <i class="fas fa-search mr-2"></i>Cari
        </button>
      </div>
    </div>
  </div>
</nav>

<section class="bg-blue-500 text-white pt-20 md:pt-24 pb-12 md:pb-20">
  <div class="max-w-7xl mx-auto text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Sistem Informasi Parkir Kampus STT Nurul Fikri</h1>
    <p class="text-lg md:text-xl mb-8">Sistem pintar untuk manajemen parkir kampus yang efisien dan aman</p>
    <div class="flex justify-center space-x-4">
      <a href="{{ route('login') }}" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Login</a>
      <a href="{{ route('register') }}" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Register</a>
    </div>
  </div>
</section>


<section id="about" class="bg-white pt-20 md:pt-24 pb-12 md:pb-20">
  <div class="max-w-7xl mx-auto px-4 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      
      <!-- Kiri: Teks -->
      <div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">Tentang Sistem</h1>
        <p class="text-base md:text-lg text-gray-600 leading-relaxed">
          <strong>Sistem Informasi Parkir Kampus</strong> adalah platform digital yang dirancang untuk mempermudah pengelolaan dan pemantauan aktivitas parkir di lingkungan kampus. Sistem ini bertujuan untuk menciptakan pengalaman parkir yang tertib, efisien, dan transparan bagi seluruh civitas akademika, termasuk mahasiswa, dosen, dan staf kampus.
        </p>
      </div>

      <!-- Kanan: 4 Card -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="bg-blue-100 rounded-xl p-4 shadow hover:shadow-lg transition">
          <h3 class="font-semibold text-lg text-blue-800 mb-2">Monitoring Real-Time</h3>
          <p class="text-sm text-blue-900">Pantau data parkir secara langsung dari dashboard.</p>
        </div>

        <div class="bg-green-100 rounded-xl p-4 shadow hover:shadow-lg transition">
          <h3 class="font-semibold text-lg text-green-800 mb-2">Integrasi Kartu Mahasiswa</h3>
          <p class="text-sm text-green-900">Mendukung autentikasi masuk dan keluar dengan kartu RFID/NFC.</p>
        </div>

        <div class="bg-yellow-100 rounded-xl p-4 shadow hover:shadow-lg transition">
          <h3 class="font-semibold text-lg text-yellow-800 mb-2">Data Historis</h3>
          <p class="text-sm text-yellow-900">Simpan dan kelola riwayat parkir untuk keperluan audit.</p>
        </div>

        <div class="bg-red-100 rounded-xl p-4 shadow hover:shadow-lg transition">
          <h3 class="font-semibold text-lg text-red-800 mb-2">Laporan Otomatis</h3>
          <p class="text-sm text-red-900">Dapatkan laporan aktivitas parkir mingguan/bulanan.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<h2 id="info" class="py-16 text-3xl font-bold text-center text-gray-800">Informasi Area Parkir</h2>

<!-- Informasi Singkat Parkiran -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10 text-center text-gray-800 mt-2">
  <div class="bg-white shadow rounded-lg p-5">
    <h4 class="text-lg font-semibold">Total Area</h4>
    <p class="text-2xl font-bold text-blue-600">{{ $total_area }}</p>
  </div>
  <div class="bg-white shadow rounded-lg p-5">
    <h4 class="text-lg font-semibold">Total Kapasitas</h4>
    <p class="text-2xl font-bold text-green-600">{{ $total_kapasitas }}</p>
  </div>
  <div class="bg-white shadow rounded-lg p-5">
    <h4 class="text-lg font-semibold">Kendaraan Hari Ini</h4>
    <p class="text-2xl font-bold text-red-600">{{ $total_kendaraan }}</p>
  </div>
</div>
<!-- Features Section -->
<section id="features" class="py-4 bg-gray-100 relative">
  <div class="max-w-7xl mx-auto px-4 relative">

    <!-- Filter Kapasitas Area Parkir -->
    <div class="mb-6 flex justify-center">
      <select id="statusFilter" class="px-4 py-2 border border-gray-300 rounded w-full md:w-1/3 shadow-sm">
        <option value="">Semua Status</option>
        <option value="Tersedia">Tersedia</option>
        <option value="Hampir Penuh">Hampir Penuh</option>
        <option value="Penuh">Penuh</option>
      </select>
    </div>

    <!-- Legend -->
    <div class="flex justify-center gap-6 mb-6 text-sm">
      <span class="flex items-center gap-2">
        <span class="w-3 h-3 rounded-full bg-blue-500"></span> Tersedia
      </span>
      <span class="flex items-center gap-2">
        <span class="w-3 h-3 rounded-full bg-yellow-500"></span> Hampir Penuh
      </span>
      <span class="flex items-center gap-2">
        <span class="w-3 h-3 rounded-full bg-red-500"></span> Penuh
      </span>
    </div>
    

    <div id="sliderWrapper" class="relative">
      <!-- Slider -->
      <div id="slider" class="overflow-x-auto scroll-smooth no-scrollbar">
        <div id="areaCards" class="flex space-x-6 min-w-max pb-4">

          @foreach ($areas as $area)
            <div class="w-64 rounded-lg shadow p-4 {{ $area['warna'] }}">
              <h3 class="text-xl font-semibold text-gray-800">{{ $area['nama'] }}</h3>
              <p class="text-sm text-gray-700 mb-2">Kapasitas: {{ $area['kapasitas'] }}</p>
              <p class="text-sm text-gray-700 mb-2">Parkir Hari Ini: {{ $area['vehicles_today'] }}</p>
              <p class="font-semibold">{{ $area['notification'] }}</p>
            </div>
          @endforeach

        </div>
      </div>

      <!-- Tombol kiri dan kanan -->
      <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700">
        &#10094;
      </button>
      <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700">
        &#10095;
      </button>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white mt-20">
    <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">
        
        <!-- Kolom 1 -->
        <div>
            <h6 class="uppercase font-bold mb-4">Parkir Kampus</h6>
            <p class="text-gray-400 text-sm">
                Sistem informasi parkir kampus STT Nurul Fikri yang memudahkan pengelolaan parkir secara efisien dan aman.
            </p>
        </div>

        <!-- Kolom 2 -->
        <div>
            <h6 class="uppercase font-bold mb-4">Produk</h6>
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="#" class="hover:underline">Dashboard Admin</a></li>
                <li><a href="#" class="hover:underline">Manajemen Parkir</a></li>
                <li><a href="#" class="hover:underline">Laporan Transaksi</a></li>
                <li><a href="#" class="hover:underline">Integrasi Kampus</a></li>
            </ul>
        </div>

        <!-- Kolom 3 -->
        <div>
            <h6 class="uppercase font-bold mb-4">Tautan Berguna</h6>
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="#" class="hover:underline">Akun Anda</a></li>
                <li><a href="#" class="hover:underline">Bantuan</a></li>
                <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
            </ul>
        </div>

        <!-- Kolom 4 -->
        <div>
            <h6 class="uppercase font-bold mb-4">Kontak</h6>
            <ul class="space-y-2 text-sm text-gray-400">
                <li><i class="fas fa-map-marker-alt mr-2"></i> Depok, Jawa Barat</li>
                <li><i class="fas fa-envelope mr-2"></i> info@sttnf.ac.id</li>
                <li><i class="fas fa-phone mr-2"></i> +62 821 1662 7234</li>
            </ul>
        </div>

    </div>

    <div class="text-center text-sm py-4 bg-gray-800 text-gray-400">
        &copy; {{ date('Y') }} Parkir Kampus STT Nurul Fikri. All rights reserved.
    </div>
</footer>
<script>
  document.getElementById("menu-toggle").addEventListener("click", function () {
    const menu = document.getElementById("menu");
    menu.classList.toggle("hidden");
  });
</script>
<script>
  // Fitur pencarian area parkir berdasarkan nama
  document.getElementById('searchBtn').addEventListener('click', function () {
    const keyword = document.getElementById('searchArea').value.toLowerCase();
    const cards = document.querySelectorAll('#areaCards > div');

    cards.forEach(card => {
      const namaArea = card.querySelector('h3').textContent.toLowerCase();
      if (namaArea.includes(keyword)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
</script>
<script>
  const searchInput = document.getElementById('searchArea');
  const searchBtn = document.getElementById('searchBtn');
  const statusFilter = document.getElementById('statusFilter');
  const cards = document.querySelectorAll('#areaCards > div');

  function filterAreas() {
    const keyword = searchInput.value.toLowerCase();
    const status = statusFilter.value;

    cards.forEach(card => {
      const namaArea = card.querySelector('h3').textContent.toLowerCase();
      const notif = card.querySelector('p.font-semibold').textContent.trim();

      const cocokNama = namaArea.includes(keyword);
      const cocokStatus = status === "" || notif === status;

      if (cocokNama && cocokStatus) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  }

  searchBtn.addEventListener('click', filterAreas);
  searchInput.addEventListener('keyup', filterAreas);
  statusFilter.addEventListener('change', filterAreas);
</script>

</body>
</html>

