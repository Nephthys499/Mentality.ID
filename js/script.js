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
const socialIconsContainer = document.querySelector(".social-icons");

function toggleSocialIcons(imageElement) {
  socialIconsContainer.innerHTML = "";

  const linkedinLink = imageElement.getAttribute("data-linkedin");
  const envelopeLink = imageElement.getAttribute("data-envelopel");
  const instagramLink = imageElement.getAttribute("data-instagram");

  const socialIcons = [
    { class: "fab fa-linkedin", href: linkedinLink },
    { class: "fas fa-envelope", href: envelopeLink },
    { class: "fab fa-instagram", href: instagramLink },
    // Add more social icons here
  ];

  socialIcons.forEach(icon => {
    const iconElement = document.createElement("a");
    iconElement.href = icon.href;
    iconElement.target = "_blank";
    const iconIcon = document.createElement("i");
    iconIcon.className = icon.class;
    iconElement.appendChild(iconIcon);
    socialIconsContainer.appendChild(iconElement);
  });

  socialIconsContainer.style.left = imageElement.offsetLeft + "px";
  socialIconsContainer.style.top =
    imageElement.offsetTop + imageElement.clientHeight + "px";
  socialIconsContainer.classList.toggle("active");
}

const toggleImages = document.querySelectorAll(".toggle");
toggleImages.forEach(image => {
  image.addEventListener("click", function () {
    toggleSocialIcons(this);
  });
});

document.addEventListener("click", function (event) {
  // Close social icons if clicked outside the toggles or social icons container
  if (
    !socialIconsContainer.contains(event.target) &&
    !event.target.classList.contains("toggle")
  ) {
    socialIconsContainer.classList.remove("active");
  }
});
// Temukan semua elemen kartu album
const albumBoxes = document.querySelectorAll(".container .box-container .box");

// Tambahkan event listener untuk setiap kartu album
albumBoxes.forEach(albumBox => {
  albumBox.addEventListener("click", () => {
    // Hapus kelas 'active' dari semua kartu album
    albumBoxes.forEach(box => {
      box.classList.remove("active");
    });

    // Tambahkan kelas 'active' ke kartu album yang diklik
    albumBox.classList.add("active");
  });
});
