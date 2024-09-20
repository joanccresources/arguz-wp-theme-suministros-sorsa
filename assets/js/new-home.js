(() => {
  const domain = "https://suministros.sorsa.pe/wp-content/uploads/2024/09/";
  // whatsapp-3.png
  const insertWhatsAppButton = () => {
    const container = document.querySelector(
      ".home-hero .artech-header-slider"
    );
    if (!container) return;
    const htmlButton = `
    <a href="#0" class="wsp-hero-home">
      <img src="${domain}/whatsapp-3.png" alt="WhatsApp"/>
    </a>
    `;
    container.insertAdjacentHTML("afterbegin", htmlButton);
  };

  const initDomReady = () => {
    // Add your code here
    console.log("New Home");
    insertWhatsAppButton();
  };

  addEventListener("DOMContentLoaded", () => {
    initDomReady();
  });
})();
