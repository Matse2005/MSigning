// Open event selector
addEventListener("keydown", function (e) {
  // Search for:
  // - Ctrl + s (Windows)
  // - Command + s (Mac)
  if ((e.ctrlKey || e.metaKey) && e.key === "s") {
    // Open the popup
    e.preventDefault;
    openPopup("eventSelector");
  }
});
