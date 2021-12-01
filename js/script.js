let header = document.getElementsByTagName("header")[0];
let navElems = header.querySelectorAll("nav > ul > a");
let hamburgerMenu = document.querySelector(".hamburger-menu > span > i");

document.body.onscroll = function () {
  console.log(navElems);
  if (window.scrollY >= 350) {
    header.style.backgroundColor = "hsla(240deg, 15%, 95%, 1)";
    hamburgerMenu.style.color = "hsla(240deg, 100%, 10%, 1)";
    for (let item of navElems) {
      item.style.color = "hsla(240deg, 100%, 10%, 1)";
    }
  } else if (window.scrollY >= 120) {
    header.style.backgroundColor = "hsla(240deg, 40%, 90%, 0.6)";
    hamburgerMenu.style.color = "hsla(240deg, 100%, 10%, 1)";
    for (let item of navElems) {
      item.style.color = "hsla(240deg, 100%, 10%, 1)";
    }
  } else {
    header.style.backgroundColor = "";
    hamburgerMenu.style.color = "hsla(240deg, 15%, 95%, 1)";
    for (let item of navElems) {
      item.style.color = "hsla(240deg, 15%, 95%, 1)";
    }
  }
};
