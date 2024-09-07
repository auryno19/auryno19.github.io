//navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const top = document.querySelector("#to-top");
  const fixedNav = header.offsetTop;

  if (window.scrollY > fixedNav) {
    header.classList.add("navbar-fixed");
    top.classList.remove("hidden");
    top.classList.add("flex");
  } else {
    header.classList.remove("navbar-fixed");
    top.classList.remove("flex");
    top.classList.add("hidden");
  }
};

// hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// darkmode
const darkToggle = document.querySelector("#toggle");
const toggleLabel = document.querySelector("#toggle-label");
const html = document.querySelector("html");
const toggleImg = document.querySelector("#toggle-image");

darkToggle.addEventListener("click", function () {
  if (darkToggle.checked) {
    html.classList.add("dark");
    localStorage.theme = "dark";
    // toggleImg.src = "./public/img/sun.svg";
    setTimeout(function () {
      toggleImg.src = "./public/img/sun.svg";
    }, 300);
  } else {
    html.classList.remove("dark");
    localStorage.theme = "light";
    // toggleImg.src = "./public/img/moon.svg";
    setTimeout(function () {
      toggleImg.src = "./public/img/moon.svg";
    }, 300);
  }
});

// darkmode toggle
if (
  localStorage.theme === "dark" ||
  (!("theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  darkToggle.checked = true;
  toggleImg.src = "./public/img/sun.svg";
} else {
  darkToggle.checked = false;
  toggleImg.src = "./public/img/moon.svg";
}

//outside humberger
window.addEventListener("click", function (e) {
  if (
    e.target != hamburger &&
    e.target != navMenu &&
    e.target != toggleLabel &&
    e.target != darkToggle
  ) {
    hamburger.classList.remove("hamburger-active");
    navMenu.classList.add("hidden");
  }
});

// readmore
const readmore1 = document.querySelector("#read-more-1");
const readmore2 = document.querySelector("#read-more-2");
const readmore3 = document.querySelector("#read-more-3");
const readmore4 = document.querySelector("#read-more-4");
const text1 = document.querySelector(".readmore-text-1");
const text2 = document.querySelector(".readmore-text-2");
const text3 = document.querySelector(".readmore-text-3");
const text4 = document.querySelector(".readmore-text-4");
if (readmore1.checked) {
  text1.innerHTML = "- Read Less -";
} else {
  text1.innerHTML = "- Read More -";
}
if (readmore2.checked) {
  text2.innerHTML = "- Read Less -";
} else {
  text2.innerHTML = "- Read More -";
}
if (readmore3.checked) {
  text3.innerHTML = "- Read Less -";
} else {
  text3.innerHTML = "- Read More -";
}
if (readmore4.checked) {
  text4.innerHTML = "- Read Less -";
} else {
  text4.innerHTML = "- Read More -";
}
