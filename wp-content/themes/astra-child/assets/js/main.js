document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".event-star").forEach((star) => {
    star.addEventListener("click", function () {
      this.classList.toggle("dashicon-star-empty");
      this.classList.toggle("dashicon-star-filled");
      this.classList.toggle("is-active");
      console.log("main.js loaded");
    });
  });
});
