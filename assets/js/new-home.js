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

  const addCTAWhatsapp = () => {
    const container = document.querySelector("body");
    // console.log({ container });
    // if (!settingsTheme.whatsapp) return;
    const html = `
      <div class="whatsapp-container">
        <a class="cta-wsp" href="https://api.whatsapp.com/send/?phone=51954691632&text&type=phone_number&app_absent=0" target="_blank">
          <div class="cta-wsp__content shadow-lg">
            <span class="cta-wsp__title">¿TIENES UNA DUDA?</span>
            <span class="cta-wsp__txt">Escríbenos</span>
          </div>
          <img src="https://honda.sorsa.pe/wp-content/themes/eura-child-sorsa/assets/img/btn-wsp.png" alt="Boton Whatsapp" width="113" height="113" class="cta-wsp__img"/>
        </a>
      </div>
    `;
    container.insertAdjacentHTML("beforeend", html);
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
    // insertWhatsAppButton();
    // showMenuTablet();
    addCTAWhatsapp();
  };

  document.addEventListener("DOMContentLoaded", () => {
    initDomReady();
  });
})();
