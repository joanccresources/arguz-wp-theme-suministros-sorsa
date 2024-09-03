<?php
function shortcode_tipo_productos_galeria($atts)
{
  // Iniciar el buffer de salida
  ob_start();

  // Obtener los términos de la taxonomía "tipo_de_producto"
  $terms = get_terms(array(
    'taxonomy' => 'tipo_de_producto',
    'hide_empty' => false,
  ));

  if (is_wp_error($terms) || empty($terms)) {
    echo '<p>No hay productos disponibles.</p>';
    return ob_get_clean(); // Retornar el contenido del buffer
  }
  // elementor-widget-container
  echo '<div class="content-galery">';
  echo '<div class="artech-portfolio-tabs">';
  echo '<div class="tab-content">';
  echo '<div class="tab-pane fade show active" id="pills-all">';
  echo '<div class="projects"><div class="row">';

  // Contador para manejar las columnas
  $count = 0;

  foreach ($terms as $term) {
    // Obtener el array de la imagen principal desde el campo personalizado "imagen_principal"
    $imagen_principal = get_field('imagen_principal', $term);

    // Obtener la URL de la imagen si el campo tiene valor
    $imagen_url = isset($imagen_principal['url']) ? $imagen_principal['url'] : '';

    // Definir el tamaño de la columna basado en el contador
    $col_class = ($count < 2) ? 'col-lg-6' : 'col-lg-4';

    echo '<div class="' . esc_attr($col_class) . '">';
    echo '<a href="' . esc_url(get_term_link($term)) . '" class="project-card grid shadow-style drop-shadow-card">';
    echo '<div class="img">';
    echo '<img decoding="async" src="' . esc_url($imagen_url) . '" alt="' . esc_attr($term->name) . '" class="thumbnail-image" />';
    echo '</div>';
    echo '<div class="info shadow-style">';
    echo '<h6 class="title">' . esc_html($term->name) . '</h6>';
    echo '</div>';
    echo '</a>';
    echo '</div>';

    $count++;
  }

  echo '</div></div></div></div></div></div>';

  // Retornar el contenido del buffer y limpiarlo
  return ob_get_clean();
}
add_shortcode('tipo_productos_galeria', 'shortcode_tipo_productos_galeria');
