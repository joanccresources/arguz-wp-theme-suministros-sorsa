<?php
function shortcode_nuestras_marcas_cards($atts)
{
  ob_start();

  // Obtener los términos de la taxonomía 'marca_de_catalogo'
  $terms = get_terms(array(
    'taxonomy' => 'marca_de_catalogo',
    'hide_empty' => false,
  ));

  if (empty($terms) || is_wp_error($terms)) {
    echo '<p>No se encontraron marcas de catálogo.</p>';
    return ob_get_clean();
  }

  // Comenzar a construir la salida del shortcode
  echo '<div class="elementor-element elementor-element-4aae36e e-con-full e-flex e-con e-child">';
  $count = 0;
  foreach ($terms as $term) {
    // Obtener el título del término
    $term_title = esc_html($term->name);
    $button_title = 'Ver catálogo de ' . explode(' ', $term_title)[0];
    // Obtener el enlace (slug) del término
    // $term_link = esc_url(get_term_link($term));
    $term_link = "#0"; // quitar

    // Obtener el campo personalizado 'imagen_principal' usando ACF
    $imagen_principal = get_field('imagen_principal', 'marca_de_catalogo_' . $term->term_id);
    $imagen_url = esc_url($imagen_principal['url']);

    $count++;
    $count_value = ($count <= 9) ? "0" . $count : $count;
    // Construir el HTML para cada término
    echo '
  <div
    class="elementor-element elementor-element-7a35764 animated-slow elementor-invisible elementor-widget elementor-widget-artech-service-card"
    data-id="7a35764"
    data-element_type="widget"
    data-settings=\'{"_animation":"fadeIn","_animation_delay":200,"tc_dark_mode_responsive_hide_in_dark":"no","tc_dark_mode_responsive_hide_in_light":"no"}\'
    data-widget_type="artech-service-card.default">
    <div class="elementor-widget-container">
      <div class="artech-service-card">
        <div class="row">
          <div class="col-lg-4">
            <div class="title-side">              
              <span class="num">' . $count_value . '</span>
              <h6 class="title text-md-center">' . $term_title . '</h6>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="img">
              <img
                decoding="async"
                src="' . $imagen_url . '"
                alt="' . $term_title . '" />
              <a
                href="' . $term_link . '"
                class="butn">
                <div class="cont">
                  <img
                    decoding="async"
                    class="arrow"
                    src="https://artech.themescamp.com/digital-marketing/wp-content/uploads/sites/3/2024/02/arrow_wh.svg"
                    alt="arrow" />
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 align-self-center">
            <div
              class="btn-sorsa elementor-element elementor-element-2b906e1 e-transform elementor-align-left elementor-widget elementor-widget-artech-button-animate text-center text-md-end mt-4 mt-md-0"
            >
              <div class="elementor-widget-container border-0">
                <!-- <a href="' . $term_link . '" class="artech-button fade-border-effect  -->
                <a href="' . $term_link . '" class="artech-button fade-border-effect text-decoration-none">
                  <span class="artech-button-content-wrapper">
                    <span class="artech-button-text text-center">' . $button_title . '</span>
                    <img decoding="async" src="https://suministros.sorsa.pe/wp-content/uploads/2024/03/arrow_wh.svg" alt="Arrow" class="image" style="width: 25px;">
                  </span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>';
  }

  echo '</div>';

  // Finalizar el buffer y retornar la salida
  return ob_get_clean();
}

add_shortcode('nuestras_marcas_cards', 'shortcode_nuestras_marcas_cards');
