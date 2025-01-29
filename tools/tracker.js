// server url
const trackServer = "https://tracker.dasil.sites.grinnell.edu/dataspaces-beacon";

// function to track links
function trackLinks(event) {
  event.preventDefault();
  // Access the current url and href attribute
  const source = (window.location.pathname).substring(1); // where user is right now
  const target = $(this).attr("href"); // where user wants to go

  // track asynchronously
  fetch(`${trackServer}?source=${source ? source : "/"}&target=${target}`).then(
    () => (window.location.href = target)
  );
}

// track whenever an a tag is clicked
$(document).ready(function () {
  $("a").click(trackLinks);
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
