
//direct page n animate

document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".retro-button");
  const overlay = document.getElementById("glitchOverlay");
  const deniedBox = document.getElementById("accessDenied");

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const isDenied = button.getAttribute("data-deny");
      const targetPage = button.getAttribute("data-target");

      // Reset overlay animation
      overlay.classList.remove("hidden");
      overlay.style.animation = 'none';
      void overlay.offsetWidth;
      overlay.style.animation = 'glitch-flicker 1s ease-in-out forwards';

      if (isDenied) {
        // Tampilkan ACCESS DENIED
        setTimeout(() => {
          overlay.classList.add("hidden");

          deniedBox.classList.remove("hidden");
          deniedBox.style.animation = 'none';
          void deniedBox.offsetWidth;
          deniedBox.style.animation = 'showDenied 0.3s ease-out, hideDenied 0.4s ease-in 1.6s forwards';

          setTimeout(() => {
            deniedBox.classList.add("hidden");
          }, 2400);
        }, 1000);
        return;
      }

      // ACCESS GRANTED
      localStorage.setItem("accessStatus", "granted");

      setTimeout(() => {
        window.location.href = targetPage;
      }, 1100);
    });
  });
});






//dawg itu cuman buat buka ama sembunyiin deskripsi