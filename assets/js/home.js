console.log("HOME");

const simulateclickFirstOption = () => {
  const firstLink = document.querySelector("#pills-branding-tab");
  console.log({ firstLink });
  firstLink?.click();
};

const init = () => {
  // simulateclickFirstOption();
};

const initDOMReady = () => {
  // simulateclickFirstOption();
};

init();
addEventListener("DOMContentLoaded", () => {
  initDOMReady();
});
