document.addEventListener("DOMContentLoaded", function () {
  var iconSearchBox = document.querySelector(".icon-search-box"),
      mobileNavToggle = document.querySelector(".mobile-nav-toggle"),
      dropdownMobile = document.querySelector(".dropbtn-mobile");

  iconSearchBox.addEventListener("click", openSearch);
  mobileNavToggle.addEventListener("click", openNav);
  dropdownMobile.addEventListener("click", openDropdown);
});

function openSearch() {
  document.querySelector(".search-box-form").classList.toggle("search-open");
}

function openNav() {
  document.querySelector(".mobile-nav-toggle").classList.toggle("is-open");
  document.querySelector(".mobile-nav").classList.toggle("is-open");
}

function openDropdown() {
  document.querySelector(".dropbtn-mobile").classList.toggle("dropdown-open");
  document.querySelector(".mobile-dropdown-content").classList.toggle("dropdown-open");
}