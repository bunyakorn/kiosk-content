document.addEventListener("DOMContentLoaded", function (event) {
  // Set to reload content all 1 hour
  setInterval(function () {
    reload_page();
  }, 60 * 60000);
});

function reload_page() {
  window.location.reload(true);
}
