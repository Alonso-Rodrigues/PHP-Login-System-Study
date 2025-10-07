const form = document.querySelector(".form-photo-upload");
const loadingOverlay = document.getElementById("loading-overlay");
form.addEventListener("submit", (e) => {
  loadingOverlay.style.display = "flex";
  e.preventDefault();
  setTimeout(() => {
    form.submit();
  }, 1000);
});

const inputPhoto = document.getElementById("input-photo");
const preview = document.getElementById("photo-preview");
inputPhoto.addEventListener("change", () => {
  const file = inputPhoto.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = (e) => {
      preview.src = e.target.result; 
    };
    reader.readAsDataURL(file);
  }
});
