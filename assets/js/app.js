// Navbar toggle
// let hamburger = document.querySelector("#hamburger");
// let navlinks = document.querySelector("#navlinks");

// let line = hamburger.querySelector("#line");
// let line2 = hamburger.querySelector("#line2");

// hamburger.addEventListener("click", function () {
//   if (navlinks.classList.contains("hidden")) {
//     navlinks.classList.remove("hidden");
//     line.classList.add("rotate-45", "absolute");
//     line2.classList.add("-rotate-45", "absolute");
//     line2.classList.remove("mt-1.5");
//   } else {
//     navlinks.classList.add("hidden");
//     line.classList.remove("rotate-45", "absolute");
//     line2.classList.remove("-rotate-45", "absolute");
//     line2.classList.add("mt-1.5");
//   }
// });

// Select event for the dropdown menu
function openPopup(id, chevronEventSelector) {
  // Check if the popup is already open
  if (document.getElementById(id).classList.contains("hidden")) {
    // Open the popup
    document.getElementById(id).classList.remove("hidden");
    // Change the chevron to the down arrow
    document
      .getElementById(chevronEventSelector)
      .classList.add("fa-rotate-180");
  } else {
    // Close the popup
    document.getElementById(id).classList.add("hidden");
    // Change the chevron to the up arrow
    document
      .getElementById(chevronEventSelector)
      .classList.remove("fa-rotate-180");
  }
}
