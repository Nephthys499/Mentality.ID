const navbarNav = document.querySelector(".navbar-nav1");
document.querySelector("#hamburger-menu1").onclick = () => {
  navbarNav.classList.toggle("active");
};
const hamburger = document.querySelector("#hamburger-menu1");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Get all the icon containers and content containers
const iconContainers = document.querySelectorAll(".thumb");
const contentContainers = document.querySelectorAll(".nacc li");

// Add click event listener to each icon container
iconContainers.forEach((iconContainer, index) => {
  iconContainer.addEventListener("click", () => {
    // Remove 'active' class from all icon containers and content containers
    iconContainers.forEach(container => container.classList.remove("active"));
    contentContainers.forEach(container =>
      container.classList.remove("active")
    );

    // Add 'active' class to the clicked icon container and content container
    iconContainer.classList.add("active");
    contentContainers[index].classList.add("active");
  });
});
