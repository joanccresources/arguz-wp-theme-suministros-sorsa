<?php
/*
function shortcode_tipo_productos_galeria($atts)
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
    // echo '<a href="' . esc_url(get_term_link($term)) . '" class="project-card grid shadow-style drop-shadow-card">'; // quitar
    echo '<a href="#0" class="project-card grid shadow-style drop-shadow-card">';
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
*/

function shortcode_tipo_productos_galeria($atts)
{
  ob_start();

  $terms = get_terms(array(
    'taxonomy' => 'tipo_de_producto',
    'hide_empty' => false,
    'meta_key' => 'posicion',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
  ));

  if (is_wp_error($terms) || empty($terms)) {
    echo '<p>No hay productos disponibles.</p>';
    return ob_get_clean();
  }

  echo '<div class="projects"><div class="row">';
  $count = 0;
  foreach ($terms as $term) {
    $imagen_principal = get_field('imagen_principal', $term);

    $imagen_url = isset($imagen_principal['url']) ? $imagen_principal['url'] : '';

    $col_class = ($count < 2) ? 'col-xl-6' : 'col-xl-4';

    echo '<div class="col-12 col-md-6 ' . esc_attr($col_class) . ' mt-4">';
    echo '<div href="#0" class="project-card">';
    echo '<div class="project-card__figure">';
    echo '<img decoding="async" src="' . esc_url($imagen_url) . '" alt="' . esc_attr($term->name) . '" class="project-card__img" />';
    echo '</div>';
    echo '<div class="project-card__body">';
    echo '<h6 class="project-card__title">' . esc_html($term->name) . '</h6>';
    // echo '<a href="' . esc_url(get_term_link($term)) . '" class="project-card__btn">VER CATÁLOGO</a>';
    echo '<a href="#0" class="project-card__btn">VER CATÁLOGO</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    $count++;
  }
  echo '</div></div>';

  return ob_get_clean();
}
add_shortcode('tipo_productos_galeria', 'shortcode_tipo_productos_galeria');
