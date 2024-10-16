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

const readmores = document.querySelectorAll('[id^="read-more-"]');
const texts = document.querySelectorAll('[class^="readmore-text-"]');

readmores.forEach((readmore, index) => {
  readmore.addEventListener("change", () => {
    if (texts[index]) {
      texts[index].innerHTML = readmore.checked;
      if (texts[index]) {
        if (readmore.checked) {
          texts[index].innerHTML = "- Read Less -";
        } else {
          texts[index].innerHTML = "- Read Less -";
          setTimeout(() => {
            texts[index].innerHTML = "- Read More -";
          }, 800);
        }
      }
    } else {
      console.error(
        `Tidak ditemukan elemen readmore-text dengan indeks ${index}`,
      );
    }
  });
});
