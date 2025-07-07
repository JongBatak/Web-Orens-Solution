const introVideo = document.getElementById("introVideo");
const intro = document.getElementById("intro");
const mainContent = document.getElementById("mainContent");

// When video ends, show main content
introVideo.addEventListener("ended", () => {
  intro.style.display = "none";
  mainContent.style.display = "block";
  document.body.style.overflow = "auto"; // re-enable scrolling
});
