  const hasilKaryaLink = document.querySelector('a[href="HasilKarya.html"]');
  const modal = document.getElementById('passwordModal');
  const passwordInput = document.getElementById('passwordInput');

  // Saat klik Hasil Karya → tampilkan popup
  hasilKaryaLink.addEventListener('click', function(e) {
    e.preventDefault();
    modal.classList.remove('hidden');
    passwordInput.value = '';
    passwordInput.focus();
  });

  // Submit password
  function submitPassword() {
    const input = passwordInput.value.trim();
    const correctPassword = "Orens Rock";

    if (input === correctPassword) {
      window.location.href = "HasilKarya.html";
    } else {
      passwordInput.value = '';
      passwordInput.placeholder = "Password salah!";
    }
  }

  // Klik di luar modal → tutup modal
  modal.addEventListener('click', function(e) {
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });

