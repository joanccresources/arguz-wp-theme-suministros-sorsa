<?php
function shortcode_home_portafolio($atts)
{
  ob_start();
  /*
  echo '
<div
  class="elementor-element elementor-element-3fdbf02 sorsa-artech-portfolio-content elementor-widget elementor-widget-artech-portfolio-content"
  data-id="3fdbf02"
  data-element_type="widget"
  data-settings=\'{"tc_dark_mode_responsive_hide_in_dark":"no","tc_dark_mode_responsive_hide_in_light":"no"}\'
  data-widget_type="artech-portfolio-content.default"
>
  <div class="elementor-widget-container">
    <div class="artech-portfolio-content">
      <div class="row">
        <div class="col-lg-4">
          <div class="info pe-lg-5">
            <h2 class="main-title">Nuestro portafolio</h2>
            <div class="text">
              Descubre nuestra amplia gama de productos, desde lubricantes
              premium hasta repuestos y baterías de marcas reconocidas
            </div>
            <ul
              class="nav nav-pills"
              id="pills-tab-66d9ae38edf0c"
              role="tablist"
            >
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="pills-all-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-all"
                >
                  All
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-branding-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-branding"
                >
                  Branding
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-modern-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-modern"
                >
                  Modern
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-ux/ui-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-ux/ui"
                >
                  UX/UI
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-web-design-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-web-design"
                >
                  Web Design
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="tab-content" id="pills-content-66d9ae38edf0e">
            <div class="tab-pane fade show active" id="pills-all">
              <div class="works">
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website/"
                  class="item active"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/2-1-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-2/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/1-2.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-3/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/3.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-4/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/4-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-5/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/5-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-branding">
              <div class="works">
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website/"
                  class="item active"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/2-1-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-2/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/1-2.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-3/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/3.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-4/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/4-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-5/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/5-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-modern">
              <div class="works">
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website/"
                  class="item active"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/2-1-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-2/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/1-2.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-3/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/3.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-4/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/4-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-5/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/5-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-ux/ui">
              <div class="works">
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website/"
                  class="item active"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/2-1-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-2/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/1-2.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-3/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/3.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-4/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/4-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-5/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/5-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-web-design">
              <div class="works">
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website/"
                  class="item active"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/2-1-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-2/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/1-2.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-3/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/3.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-4/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/4-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
                <a
                  href="https://suministros.sorsa.pe/portfolio/branding-website-5/"
                  class="item"
                >
                  <div class="img">
                    <img
                      decoding="async"
                      src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/5-1.jpg"
                      alt=""
                      class="thumbnail-image"
                    />
                  </div>
                  <div class="inf">
                    <h6 class="title">Branding Website</h6>
                    <p class="tag"></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
  ';
*/
  $tabs = [
    "all" => "All",
    "branding" => "Branding",
    "modern" => "Modern",
    "ux/ui" => "UX/UI",
    "web-design" => "Web Design"
  ];

  $portfolio_items = [
    [
      "href" => "https://suministros.sorsa.pe/portfolio/branding-website/",
      "src" => "https://suministros.sorsa.pe/wp-content/uploads/2024/03/2-1-1.jpg",
      "title" => "Branding Website"
    ],
    [
      "href" => "https://suministros.sorsa.pe/portfolio/branding-website-2/",
      "src" => "https://suministros.sorsa.pe/wp-content/uploads/2024/03/1-2.jpg",
      "title" => "Branding Website"
    ],
    [
      "href" => "https://suministros.sorsa.pe/portfolio/branding-website-3/",
      "src" => "https://suministros.sorsa.pe/wp-content/uploads/2024/03/3.jpg",
      "title" => "Branding Website"
    ],
    // Agrega más elementos según sea necesario
  ];

  echo '
<div
  class="elementor-element elementor-element-3fdbf02 sorsa-artech-portfolio-content elementor-widget elementor-widget-artech-portfolio-content"
  data-id="3fdbf02"
  data-element_type="widget"
  data-settings=\'{"tc_dark_mode_responsive_hide_in_dark":"no","tc_dark_mode_responsive_hide_in_light":"no"}\'
  data-widget_type="artech-portfolio-content.default"
  >
  <div class="elementor-widget-container">
    <div class="artech-portfolio-content">
      <div class="row">
        <div class="col-lg-4">
          <div class="info pe-lg-5">
            <h2 class="main-title">Nuestro portafolio</h2>
            <div class="text">
              Descubre nuestra amplia gama de productos, desde lubricantes
              premium hasta repuestos y baterías de marcas reconocidas
            </div>
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
';

  foreach ($tabs as $id => $label) {
    echo '
    <li class="nav-item" role="presentation">
      <button class="nav-link' . ($id == "all" ? " active" : "") . '" id="pills-' . $id . '-tab" data-bs-toggle="pill" data-bs-target="#pills-' . $id . '">' . $label . '</button>
    </li>
  ';
  }

  echo '
        </ul>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="tab-content" id="pills-content">
';

  foreach ($tabs as $id => $label) {
    echo '
    <div class="tab-pane fade' . ($id == "all" ? " show active" : "") . '" id="pills-' . $id . '">
      <div class="works">
  ';
    foreach ($portfolio_items as $item) {
      echo '
        <a href="' . $item['href'] . '" class="item' . ($id == "all" ? " active" : "") . '">
          <div class="img">
            <img decoding="async" src="' . $item['src'] . '" alt="" class="thumbnail-image" />
          </div>
          <div class="inf">
            <h6 class="title">' . $item['title'] . '</h6>
            <p class="tag"></p>
          </div>
        </a>
      ';
    }
    echo '
      </div>
    </div>
  ';
  }

  echo '
      </div>
    </div>
  </div>
</div>
</div>
</div>
';

  // Finalizar el buffer y retornar la salida
  return ob_get_clean();
}

add_shortcode('home_portafolio', 'shortcode_home_portafolio');
