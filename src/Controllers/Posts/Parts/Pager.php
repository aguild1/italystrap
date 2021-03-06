<?php
/**
 * Pager Controller API
 *
 * This class renders the Pager output on the registered position.
 *
 * @link www.italystrap.com
 * @since 4.0.0
 *
 * @package ItalyStrap
 */

namespace ItalyStrap\Controllers\Posts\Parts;

use ItalyStrap\Controllers\Controller;
use ItalyStrap\Event\Subscriber_Interface;

if ( ! defined( 'ABSPATH' ) or ! ABSPATH ) {
	die();
}

/**
 * The pagination controller class
 */
class Pager extends Controller implements Subscriber_Interface  {

	/**
	 * Returns an array of hooks that this subscriber wants to register with
	 * the WordPress plugin API.
	 *
	 * @hooked italystrap_after_entry - 10
	 *
	 * @return array
	 */
	public static function get_subscribed_events() {

		return array(
			// 'hook_name'				=> 'method_name',
			'italystrap_after_entry'	=> 'render',
		);
	}

	/**
	 * Render the output of the controller.
	 *
	 * @todo E:\xampp\htdocs\italystrap\wp-includes\link-template.php
	 *       the_post_navigation( array() );
	 */
	public function render() {
		
		if ( ! post_type_supports( $this->get_post_type(), 'post_navigation' ) ) {
			return;
		}

		if (  ! is_single()  ) {
			return;
		}
	
		/**
		 * Arguments for previous_post_link() and next_post_link()
		 *
		 * @var array
		 */
		$args = array(
			'previous_format'	=> '<li class="previous pager-prev"> %link',
			'previous_link'		=> '<i class="glyphicon glyphicon-arrow-left"></i> %title</li>',
			'next_format'		=> '<li class="next pager-next"> %link',
			'next_link'			=> '%title <i class="glyphicon glyphicon-arrow-right"></i></li>',
			);
		$args = apply_filters( 'italystrap_previous_next_post_link_args', $args );
		?>
		<ul class="pager">
			<?php previous_post_link( $args['previous_format'], $args['previous_link'] );
			next_post_link( $args['next_format'], $args['next_link'] ); ?>
		</ul>
		<span class="clearfix"></span><?php
	}
}
