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

function shortcode_home_galeria($atts)
{
  // Iniciar el buffer de salida
  ob_start();

  // Obtener los términos de la taxonomía "tipo_de_producto"
  // Obtener los términos de la taxonomía "tipo_de_producto" ordenados por el campo "posicion"
  $terms = get_terms(array(
    'taxonomy' => 'tipo_de_producto',
    'hide_empty' => false,
    'meta_key' => 'posicion',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
  ));

  if (is_wp_error($terms) || empty($terms)) {
    echo '<p>No hay productos disponibles.</p>';
    return ob_get_clean(); // Retornar el contenido del buffer
  }

  echo '<div><div class="row"><div class="col-12">';
  echo '<div class="swiper-home">';
  echo '  <div class="swiper-wrapper">';

  foreach ($terms as $term) {
    // Obtener el array de la imagen principal desde el campo personalizado "imagen_principal"
    $imagen_principal = get_field('imagen_principal', $term);
    // Obtener la URL de la imagen si el campo tiene valor
    $imagen_url = isset($imagen_principal['url']) ? $imagen_principal['url'] : '';

    $imagen_para_el_home = get_field('imagen_para_el_home', $term);
    $imagen_para_el_home_url = isset($imagen_para_el_home['url']) ? $imagen_para_el_home['url'] : '';

    $imagen_a_mostrar_url = !empty($imagen_para_el_home_url) ? $imagen_para_el_home_url : $imagen_url;

    $enlace = get_field('enlace', $term);
    $target = $enlace !== "#0" ? '_blank' : '_self';
    
    // HTML
    // echo '<div class="">';
    // echo '<a href="#0" class="project-card grid shadow-style drop-shadow-card">';
    // echo '<div class="img">';
    // echo '<img decoding="async" src="' . esc_url($imagen_url) . '" alt="' . esc_attr($term->name) . '" class="thumbnail-image" />';
    // echo '</div>';
    // echo '<div class="info shadow-style">';
    // echo '<h6 class="title">' . esc_html($term->name) . '</h6>';
    // echo '</div>';
    // echo '</a>';
    // echo '</div>';

    echo '    <div class="swiper-slide">';
    echo '      <div class="card-productos">';
    echo '        <div class="card-productos__figure">';
    echo '          <img decoding="async" src="' . esc_url($imagen_a_mostrar_url) . '" alt="' . esc_attr($term->name) . '" class="card-productos__img"/>';
    echo '        </div>';
    echo '        <div class="card-productos__footer">';
    echo '          <a href="' . esc_url($enlace) . '" target="' . $target . '" class="card-productos__btn">' . esc_html($term->name) . '</a>';
    echo '        </div>';
    echo '      </div>';
    echo '    </div>';
  }
  echo '  </div>';

  echo '  <!-- If we need navigation buttons -->';
  echo '  <div class="swiper-button-prev-home">';
  echo '    <img src="' . get_stylesheet_directory_uri() . '/assets/img/arrow-left.png" alt="Previous" />';
  echo '  </div>';

  echo '  <div class="swiper-button-next-home">';
  echo '    <img src="' . get_stylesheet_directory_uri() . '/assets/img/arrow-right.png" alt="Next" />';
  echo '  </div>';

  echo '</div>';

  echo '</div></div></div>';

  // Style
  echo "
  <style>    
    .e-con-inner:has(.swiper-home){
      overflow: hidden;
    }
    .swiper-home [class*='swiper-button-']{
      position: absolute;
      z-index: 9;
      top: 50%;
      transform: translateY(-50%);
      width: 52px;
    }
    .swiper-home .swiper-button-prev-home{
      left: 0;
    }
    .swiper-home .swiper-button-next-home{
      right: 0;
    }
    @media(min-width: 768px){
      width: 62px;
    }
    @media(min-width: 992px){
    }
    @media(min-width: 1200px){
      .swiper-home .swiper-button-prev-home{
        left: -30px;
      }
      .swiper-home .swiper-button-next-home{
        right: -30px;
      }
    }
    @media(min-width: 1400px){
      .swiper-home [class*='swiper-button-']{
        width: auto;
      }
    }
    

    .card-productos{
      background-color: #fff;
      height: 418px;
      padding-top: 30px;
      padding-inline: 30px;
      box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
    }
    .card-productos__figure{
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card-productos__img{      
      width: auto;
      object-fit: cover;
    }
    .card-productos__footer{
      text-align: center;
      margin-top: 20px;
    }
    .card-productos__btn{
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 200px;
      border: 1px solid #004E93;
      padding-block: 4px;
      border-radius: 20px;
      font-size: 20px;
      font-weight: bold;
      color: #606060;
      transition: all 0.5s;
    }
    .card-productos__btn:hover{
      color: #606060;
      opacity: .9;
    }
    @media(min-width: 992px){
    }      
    @media(min-width: 1200px){
      .swiper-slide-next .card-productos{
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
      }    
    }
    @media(min-width: 1400px){      
    }

  </style>
  ";

  // Script
  echo "
  <script>
    (()=> {
      document.addEventListener('DOMContentLoaded', () => {
        console.log('DOMContentLoaded');
        const swiper = new Swiper('.swiper-home', {
          // autoplay: {
          //   delay: 2000,
          // },
          loop: true,
          slidesPerView: 3, // 3 slides por defecto
          spaceBetween: 30,

          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next-home',
            prevEl: '.swiper-button-prev-home',
          },

          breakpoints: {
            0: {
              slidesPerView: 1,
            },
            768: {
              slidesPerView: 2,
            },
            1200: {
              slidesPerView: 3,
            },
          },

        });
      });
    })();
  </script>";

  // Retornar el contenido del buffer y limpiarlo
  return ob_get_clean();
}
add_shortcode('home_galeria', 'shortcode_home_galeria');
