<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Orens Solution</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
  
</head>

<body class="overflow-x-hidden">
  <div class="flex min-h-screen">

  <label for="toggler" class="md:hidden fixed top-4 left-4 z-50 bg-orange-500 text-white p-2 rounded shadow">
    <i class="bi bi-list text-2xl"></i>
  </label>
  <!-- The hidden checkbox trigger -->
  <input type="checkbox" id="toggler" class="peer hidden">

  <!-- Sidebar -->
  <aside id="sidebar" class="
    fixed md:sticky top-0 left-0 h-screen bg-orange-500 z-50
    w-[85px] md:w-[85px]
    peer-checked:w-[260px] md:peer-checked:w-[260px]
    transform -translate-x-full peer-checked:translate-x-0
    md:transform-none transition-all duration-300
    flex flex-col
  ">
    <label for="toggler" class="flex items-center cursor-pointer text-white p-6 text-[25px] space-x-1">
      <i class="bi bi-grid"></i>
      <span id="brand-orens" class="font-semibold text-white opacity-0 -translate-x-4 transition-all duration-300 inline-block">Orens</span>
      <span id="brand-solution" class="font-semibold text-blue-700 opacity-0 -translate-x-4 transition-all duration-300 inline-block">Solution</span>
    </label>

    <ul class="flex-1 space-y-2 mt-2 text-sm">
      <li>
        <a href="https://orenssolution.com/" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
          <i class="lni lni-home-2 mr-3"></i>
          <span class="menu-label opacity-0 -translate-x-4 transition-all duration-300">Home</span>
        </a>
      </li>
      <li>
        <a href="About Us.html" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
          <i class="bi bi-people mr-3"></i>
          <span class="menu-label opacity-0 -translate-x-4 transition-all duration-300">About Us</span>
        </a>
      </li>
      <li>
      <button onclick="openPasswordModal()" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all w-full text-left">
        <i class="bi bi-lightbulb mr-3"></i>
        <span class="menu-label opacity-0 -translate-x-4 transition-all duration-300">Hasil Karya</span>
      </button>
    </li>

    </li>

    </ul>

    <div class="mt-auto mb-4">
      <a href="#" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
        <i class="lni lni-exit mr-3"></i>
        <span class="menu-label opacity-0 -translate-x-4 transition-all duration-300">Logout</span>
      </a>
    </div>
  </aside>

  <!-- Overlay -->
  <div id="overlay" class="
    fixed inset-0 bg-black bg-opacity-50 z-40 hidden
    peer-checked:block md:hidden
  "></div>

  <!-- Main content -->
<main id="main-content"
  class="transition-all duration-300 flex-1 min-h-screen p-6 flex flex-col items-center justify-start">

  <!-- Konten utama -->
  <h2 data-aos="fade-down" class="text-center text-2xl font-semibold mb-6">Welcome to Orens Solution</h2>

  <img data-aos="fade-down" src="Lab RPL.jpg" alt="Orens Solution Logo" class="block mx-auto max-w-[800px] w-full rounded-lg"/>

  <div class="text-center mt-8">
    <h2 data-aos="fade-down" class="text-2xl md:text-3xl font-semibold">Welcome to Orens Solution</h2>
    <p data-aos="fade-down" class="text-lg text-gray-600 mt-2">Mencetak Generasi Unggul dan Berkarakter</p>
    <p data-aos="fade-down" class="max-w-2xl mx-auto mt-4 text-gray-700">
      Orens Solution adalah portal resmi dari SMK Prestasi Prima yang memuat berbagai informasi penting seperti hasil karya siswa, kegiatan sekolah, dan struktur organisasi. Website ini bertujuan untuk memperkenalkan potensi siswa secara luas dan sebagai media informasi internal maupun eksternal.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-10 text-center max-w-5xl mx-auto">
    <div>
      <i data-aos="fade-down" class="lni lni-calendar text-4xl text-blue-500 mb-2"></i>
      <h3 data-aos="fade-down" class="font-semibold text-lg">Agenda & Kegiatan</h3>
      <p  data-aos="fade-down" class="text-gray-600">Beragam kegiatan dan acara menarik siswa kami.</p>
    </div>
    <div>
      <i data-aos="fade-down" class="lni lni-network text-4xl text-orange-500 mb-2"></i>
      <h3 data-aos="fade-down" class="font-semibold text-lg">Struktur Organisasi</h3>
      <p data-aos="fade-down" class="text-gray-600">Struktur lengkap organisasi Orens Solution.</p>
    </div>
  </div>

  <div class="flex justify-center mt-8">
    <a data-aos="flip-left" href="/Contact.html" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded shadow">Hubungi Kami</a>
  </div>

  <!-- Struktur Organisasi -->
  <div class="mt-16 px-4 md:px-20 text-center">
    <h2 data-aos="fade-down" class="text-2xl md:text-3xl font-bold text-orange-600 mb-8">Struktur Organisasi Orens Solution</h2>

  <!-- Ketua -->
  <div class="mb-10 flex justify-center">
    <div data-aos="flip-up" class="w-52 rounded shadow overflow-hidden">
      <div class="bg-orange-500 text-white py-2 font-semibold">Ketua Orens Solution</div>
      <div class="bg-white text-orange-500 py-2 font-medium">Zwingli Savanarola</div>
    </div>
  </div>

  <!-- Wakil, Sekum, SekPJBL -->
  <div data-aos="flip-up" class="mb-10 flex flex-wrap justify-center gap-6">
    <div class="w-52 rounded shadow overflow-hidden">
      <div class="bg-blue-500 text-white py-2 font-semibold">Ketua PJBL (Wakil)</div>
      <div class="bg-white text-blue-500 py-2 font-medium">Rizky Putra</div>
    </div>
    <div class="w-52 rounded shadow overflow-hidden">
      <div class="bg-blue-500 text-white py-2 font-semibold">Sekretaris Umum</div>
      <div class="bg-white text-blue-500 py-2 font-medium">Desti Ariana</div>
    </div>
    <div class="w-52 rounded shadow overflow-hidden">
      <div class="bg-blue-500 text-white py-2 font-semibold">Sekretaris PJBL</div>
      <div class="bg-white text-blue-500 py-2 font-medium">Dyah Ayu</div>
    </div>
  </div>

  <!-- Kadiv -->
  <div data-aos="flip-up" class="mb-8 flex flex-wrap justify-center gap-8">
    <!-- Kadiv Cyber -->
    <div>
      <div class="w-52 rounded shadow overflow-hidden mb-2 mx-auto">
        <div class="bg-orange-500 text-white py-2 font-semibold">Kadiv Cyber</div>
        <div class="bg-white text-orange-500 py-2 font-medium">Nayomi Bataritoja</div>
      </div>
     <div class="flex justify-center gap-4">
  <!-- Mentor Cyber 1 -->
  <div class="w-40 rounded shadow overflow-hidden">
    <div class="bg-blue-500 text-white py-2 font-semibold">Mentor</div>
    <div class="bg-white text-blue-500 py-2 font-medium">Benediktus Bintang</div>
  </div>
  <!-- Mentor Cyber 2 -->
  <div class="w-40 rounded shadow overflow-hidden">
    <div class="bg-blue-500 text-white py-2 font-semibold">Mentor</div>
    <div class="bg-white text-blue-500 py-2 font-medium">Micheal Hotni</div>
  </div>
</div>

    </div>

    <!-- Kadiv Website -->
    <div>
      <div class="w-52 rounded shadow overflow-hidden mb-2 mx-auto">
        <div class="bg-orange-500 text-white py-2 font-semibold">Kadiv Website</div>
        <div class="bg-white text-orange-500 py-2 font-medium">Gibran Rakabuming</div>
      </div>
      <div class="flex justify-center gap-4">
  <!-- Mentor Website 1 -->
  <div class="w-40 rounded shadow overflow-hidden">
    <div class="bg-blue-500 text-white py-2 font-semibold">Mentor</div>
    <div class="bg-white text-blue-500 py-2 font-medium">Jazman Susilo</div>
  </div>
  <!-- Mentor Website 2 -->
  <div class="w-40 rounded shadow overflow-hidden">
    <div class="bg-blue-500 text-white py-2 font-semibold">Mentor</div>
    <div class="bg-white text-blue-500 py-2 font-medium">Ella Zenmai</div>
  </div>
</div>

    </div>

    <!-- Kadiv Game -->
    <div>
      <div class="w-52 rounded shadow overflow-hidden mb-2 mx-auto">
        <div class="bg-orange-500 text-white py-2 font-semibold">Kadiv Game</div>
        <div class="bg-white text-orange-500 py-2 font-medium">Ilham Dwi</div>
      </div>
      <div class="flex justify-center gap-4">
  <!-- Mentor Game 1 -->
  <div class="w-40 rounded shadow overflow-hidden">
    <div class="bg-blue-500 text-white py-2 font-semibold">Mentor</div>
    <div class="bg-white text-blue-500 py-2 font-medium">Andreas Raja</div>
  </div>
  <!-- Mentor Game 2 -->
  <div class="w-40 rounded shadow overflow-hidden">
    <div class="bg-blue-500 text-white py-2 font-semibold">Mentor</div>
    <div class="bg-white text-blue-500 py-2 font-medium">Belum tau/ada wok</div>
  </div>
</div>

    </div>
  </div>
</main>


<div id="glitchOverlay" class="glitch-overlay hidden"></div>
<div id="accessGranted" class="access-granted hidden">ACCESS GRANTED</div>
<div id="accessDenied" class="access-denied hidden">ACCESS DENIED</div>

<div id="passwordModal" class="fixed inset-0 bg-black bg-opacity-60 z-50 hidden flex items-center justify-center">
  <div class="modal-box bg-white rounded-lg shadow-lg p-6 max-w-md w-full text-center space-y-4 relative">

    <button onclick="closePasswordModal()" class="absolute top-3 right-4 text-gray-500 hover:text-black text-2xl font-bold leading-none">
      &times;
    </button>

    <div class="text-4xl text-yellow-500">❗</div>
    <h2 class="text-xl font-bold text-black">Tolong Submit Password</h2>
    <p class="text-gray-500 text-sm">Hint: passwordnya <strong>Orens Rock</strong></p>

    <input
      type="password"
      id="passwordInput"
      placeholder="Masukkan password..."
      class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none text-black"
    >
    <button
      onclick="submitPassword()"
      class="bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-400 text-black font-bold px-6 py-2 rounded-full shadow-lg hover:opacity-90 transition"
    >
      Submit
    </button>

  </div>
</div>

  <script>
  const toggler = document.getElementById('toggler');
  const overlay = document.getElementById('overlay');
  const sidebar = document.getElementById('sidebar');
  const mainContent = document.getElementById('main-content');

  const labels = document.querySelectorAll('.menu-label');
  const brandOrens = document.getElementById('brand-orens');
  const brandSolution = document.getElementById('brand-solution');

  toggler.addEventListener('change', () => {
    if (toggler.checked) {
      // OPEN STATE
      overlay.classList.remove('hidden');

      // Animate brand
      brandOrens.classList.replace('opacity-0', 'opacity-100');
      brandOrens.classList.replace('-translate-x-4', 'translate-x-0');
      brandSolution.classList.replace('opacity-0', 'opacity-100');
      brandSolution.classList.replace('-translate-x-4', 'translate-x-0');

      // Animate labels
      labels.forEach(label => {
        label.classList.replace('opacity-0', 'opacity-100');
        label.classList.replace('-translate-x-4', 'translate-x-0');
      });

      // Expand sidebar on desktop
      sidebar.classList.remove('w-[85px]');
      sidebar.classList.add('w-[260px]');
      mainContent.classList.remove('md:ml-[85px]');
      mainContent.classList.add('md:ml-[260px]');
    } else {
      // CLOSE STATE
      overlay.classList.add('hidden');

      // Animate brand
      brandOrens.classList.replace('opacity-100', 'opacity-0');
      brandOrens.classList.replace('translate-x-0', '-translate-x-4');
      brandSolution.classList.replace('opacity-100', 'opacity-0');
      brandSolution.classList.replace('translate-x-0', '-translate-x-4');

      // Animate labels
      labels.forEach(label => {
        label.classList.replace('opacity-100', 'opacity-0');
        label.classList.replace('translate-x-0', '-translate-x-4');
      });

      // Collapse sidebar on desktop
      sidebar.classList.remove('w-[260px]');
      sidebar.classList.add('w-[85px]');
      mainContent.classList.remove('md:ml-[260px]');
      mainContent.classList.add('md:ml-[85px]');
    }
  });
</script>
  </div>
  <div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true,
  });
</script>
<script>
  function openPasswordModal() {
    const modal = document.getElementById('passwordModal');
    const box = modal?.querySelector('.modal-box'); 

    if (modal && box) {
      modal.classList.remove('hidden');


      box.classList.remove('zoom-in'); 
      void box.offsetWidth; 
      box.classList.add('zoom-in');

      document.getElementById('passwordInput').value = '';
      document.getElementById('passwordInput').placeholder = 'Masukkan password...';
    }
  }

  function submitPassword() {
    const input = document.getElementById('passwordInput').value.trim();
    const overlay = document.getElementById('glitchOverlay');
    const granted = document.getElementById('accessGranted');
    const denied = document.getElementById('accessDenied');
    const modal = document.getElementById('passwordModal');

    if (!overlay || !granted || !denied || !modal) return;

    overlay.classList.remove('hidden');

    setTimeout(() => {
      overlay.classList.add('hidden');

      if (input === 'Orens Rock') {
        granted.classList.remove('hidden');

        setTimeout(() => {
          granted.classList.add('hidden');
          modal.classList.add('hidden');
          window.location.href = 'HasilKarya.html';
        }, 1200);

      } else {
        denied.classList.remove('hidden');

        setTimeout(() => {
          denied.classList.add('hidden');
          document.getElementById('passwordInput').value = '';
          document.getElementById('passwordInput').placeholder = 'Password salah!';
        }, 1500);
      }

    }, 600);
  }

  function closePasswordModal() {
    const modal = document.getElementById('passwordModal');
    if (modal) {
      modal.classList.add('hidden');
      document.getElementById('passwordInput').value = '';
      document.getElementById('passwordInput').placeholder = 'Masukkan password...';
    }
  }
</script>

</body>
</html>