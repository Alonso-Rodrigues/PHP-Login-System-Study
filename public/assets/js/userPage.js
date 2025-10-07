const form = document.querySelector(".form-photo-upload");
const loadingOverlay = document.getElementById("loading-overlay");

form.addEventListener("submit", (e) => {
  loadingOverlay.style.display = "flex";
  e.preventDefault();
  setTimeout(() => {
    form.submit();
  }, 1000);
});