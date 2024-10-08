const addClassStickyHeaderHome = () => {
  const $header = document.querySelector(".home header");
  if (!$header) return;
  console.log("window.scrollY", window.scrollY);
  if (window.scrollY >= 78) {
    $header.classList.add("v-sticky");
    const $img = $header.querySelector(".logo-pc img");
    console.log("if $img", $img);
    if (!$img) return;
    $img.setAttribute(
      "src",
      "https://corporativa.sorsa.pe/wp-content/uploads/2024/03/logo-footer.png"
    );
  } else {
    $header.classList.remove("v-sticky");
    const $img = $header.querySelector(".logo-pc img");
    console.log("else $img", $img);
    if (!$img) return;
    $img.setAttribute(
      "src",
      "https://corporativa.sorsa.pe/wp-content/uploads/2024/08/logo.png"
    );
  }
};

addEventListener("DOMContentLoaded", () => {
  const $rrssMenu = document.querySelector("#menu-main .menu-rrss");
  const $listMenu = document.querySelector("#menu-menu-sorsa");
  $listMenu?.insertAdjacentHTML("afterend", $rrssMenu.innerHTML);
});
window.addEventListener("DOMContentLoaded", addClassStickyHeaderHome);
document.addEventListener("scroll", addClassStickyHeaderHome);

const desabilitarLinks = () => {
  // Links desabilitados
  Array.from(
    document.querySelectorAll("#home .home-portafolio .col-lg-8 a")
  ).forEach((a) => {
    a.setAttribute("href", "#0");
  });
};

const showMenuTablet = () => {
  document.querySelector(".tablet-close")?.remove();
  const btnBurger = document.querySelector("header .offcanvas-toggle");
  btnBurger &&
    btnBurger.addEventListener("click", () => {
      document.querySelector("body > header").classList.add("active-mobile");
      document
        .querySelector(".fat-nav__wrapper")
        .insertAdjacentHTML(
          "afterbegin",
          `<i class="fas fa-times tablet-close"></i>`
        );
      const btnClose = document.querySelector(".tablet-close");
      btnClose &&
        btnClose.addEventListener("click", () => {
          document
            .querySelector("body > header")
            .classList.remove("active-mobile");
          document.querySelector(".offcanvas-close").click();
          btnClose.remove();
        });
    });
};

const initDomReady = () => {
  showMenuTablet();
};

addEventListener("DOMContentLoaded", () => {
  // desabilitarLinks();
  initDomReady();
});
