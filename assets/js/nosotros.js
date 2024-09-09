const addButtonInValores = () => {
  console.log("Hola mundo desde Nosotros");
  const $sectionValores = document.querySelector(
    ".nuestros-valores .sorsa-artech-capabilities-slider .elementor-widget-container"
  );
  if (!$sectionValores) return;
  const $htmlBtn = `
<div
  class="elementor-element elementor-element-4a53ba0 e-transform btn-sorsa elementor-align-left elementor-widget elementor-widget-artech-button-animate text-center mt-5"
>
  <div class="elementor-widget-container">
    <a
      href="https://api.whatsapp.com/send?phone=51954691632&amp;text=%C2%A1Hola,%20deseo%20precios%20al%20por%20mayor%20de%20sorsa!"
      target="_blank"
      class="artech-button fade-border-effect"
    >
      <span class="artech-button-content-wrapper">
        <span class="artech-button-text"> Contactar a un asesor </span>
        <img
          decoding="async"
          src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/arrow_wh.svg"
          alt=""
          class="image"
        />
      </span>
    </a>
  </div>
</div>
  `;
  $sectionValores.insertAdjacentHTML("beforeend", $htmlBtn);
};

const initDOMReady = () => {
  addButtonInValores();
};

initDOMReady();
