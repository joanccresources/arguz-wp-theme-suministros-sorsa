(() => {
  const domain = "https://suministros.sorsa.pe/wp-content/uploads/2024/09/";
  // whatsapp-3.png
  const insertWhatsAppButton = () => {
    const container = document.querySelector(
      ".home-hero .artech-header-slider"
    );
    if (!container) return;
    const htmlButton = `
    <a href="https://wa.me/51954691632?text=¡Hola," target="_blank" rel="noopener" class="wsp-hero-home">
      <img src="${domain}/whatsapp-3.png" alt="WhatsApp"/>
    </a>
    `;
    container.insertAdjacentHTML("afterbegin", htmlButton);
  };

  // const showMenuTablet = () => {
  //   document.querySelector(".tablet-close")?.remove();
  //   const btnBurger = document.querySelector("header .offcanvas-toggle");
  //   btnBurger &&
  //     btnBurger.addEventListener("click", () => {
  //       document.querySelector("body > header").classList.add("active-mobile");
  //       document
  //         .querySelector(".fat-nav__wrapper")
  //         .insertAdjacentHTML(
  //           "afterbegin",
  //           `<i class="fas fa-times tablet-close"></i>`
  //         );
  //       const btnClose = document.querySelector(".tablet-close");
  //       btnClose &&
  //         btnClose.addEventListener("click", () => {
  //           document
  //             .querySelector("body > header")
  //             .classList.remove("active-mobile");
  //           document.querySelector(".offcanvas-close").click();
  //           btnClose.remove();
  //         });
  //     });
  // };

  const initDomReady = () => {
    // Add your code here
    console.log("New Home");
    insertWhatsAppButton();
    // showMenuTablet();
  };

  addEventListener("DOMContentLoaded", () => {
    initDomReady();
  });
})();
