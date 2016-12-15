<?php
/**
 * The template used for displaying content
 *
 * @package ItalyStrap
 * @since 1.0.0
 * @since 4.0.0 Code refactoring.
 */

namespace ItalyStrap;

$template_settings = (array) apply_filters( 'italystrap_template_settings', array() );

if ( in_array( 'hide_content', $template_settings, true ) ) {
	return;
}

?><div <?php Core\get_attr( 'entry_content', array( 'class' => 'entry-content', 'itemprop' => 'articleBody' ), true ); ?>><?php the_content(); ?></div>
