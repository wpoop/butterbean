<?php
/**
 * Excerpt control class.  Note that this control isn't meant to be tied to a setting.  Core
 * WP will save the excerpt.  Also, make sure to disable the core excerpt metabox if using
 * this control.
 *
 * @package    ButterBean
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2015-2016, Justin Tadlock
 * @link       https://github.com/justintadlock/butterbean
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Excerpt control class.
 *
 * @since  1.0.0
 * @access public
 */
class ButterBean_Control_Excerpt extends ButterBean_Control_Textarea {

	/**
	 * Get the value for the setting.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed
	 */
	public function get_value() {

		return get_post( $this->manager->post_id )->post_excerpt;
	}
}
