<?php
/**
 * d5k Social Links widget
 *
 * @package d5k
 */
class Social_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'social_widget', // Base ID
			__('Landing Page Social Links', 'text_domain'), // Name
			array( 'description' => __( 'Add social links to your landing page', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
     	echo $args['before_widget'];
		echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];

		if ( $instance['twitter'] ) {
			echo '<a href="http://twitter.com/'.$instance['twitter'].'" class="genericon genericon-twitter">Twitter</a>';
		}
		if ( $instance['facebook'] ) {
			echo '<a href="http://facebook.com/'.$instance['facebook'].'" class="genericon genericon-facebook">Facebook</a>';
		}
		if ( $instance['instagram'] ) {
			echo '<a href="http://instagram.com/'.$instance['instagram'].'" class="genericon genericon-instagram">Instagram</a>';
		}
		if ( $instance['github'] ) {
			echo '<a href="http://github.com/'.$instance['github'].'" class="genericon genericon-github">Github</a>';
		}
		if ( $instance['dribbble'] ) {
			echo '<a href="http://dribbble.com/'.$instance['dribbble'].'" class="genericon genericon-dribbble">Dribbble</a>';
		}
		if ( $instance['flickr'] ) {
			echo '<a href="http://flickr.com/'.$instance['flickr'].'" class="genericon genericon-flickr">Flickr</a>';
		}
		if ( $instance['linkedin'] ) {
			echo '<a href="http://linkedin.com/in/'.$instance['linkedin'].'" class="genericon genericon-linkedin">LinkedIn</a>';
		}
		if ( $instance['pinterest'] ) {
			echo '<a href="http://pinterest.com/'.$instance['pinterest'].'" class="genericon genericon-pinterest">Pinterest</a>';
		}
		if ( $instance['tumblr'] ) {
			echo '<a href="http://'.$instance['tumblr'].'.tumblr.com" class="genericon genericon-tumblr">Tumblr</a>';
		}
		if ( $instance['youtube'] ) {
			echo '<a href="http://youtube.com/user/'.$instance['youtube'].'" class="genericon genericon-youtube">YouTube</a>';
		}
		if ( $instance['wordpress'] ) {
			echo '<a href="'.$instance['wordpress'].'" class="genericon genericon-wordpress">WordPress</a>';
		}

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : 'Find me elsewhere';
		$dribbble = isset( $instance['dribbble'] ) ? $instance['dribbble'] : '';
		$email = isset( $instance['email'] ) ? $instance['email'] : '';
		$facebook = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
		$flickr = isset( $instance['flickr'] ) ? $instance['flickr'] : '';
		$github = isset( $instance['github'] ) ? $instance['github'] : '';
		$instagram = isset( $instance['instagram'] ) ? $instance['instagram'] : '';
		$linkedin = isset( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		$pinterest = isset( $instance['pinterest'] ) ? $instance['pinterest'] : '';
		$tumblr = isset( $instance['tumblr'] ) ? $instance['tumblr'] : '';
		$twitter = isset( $instance['twitter'] ) ? $instance['twitter'] : '';
		$youtube = isset( $instance['youtube'] ) ? $instance['youtube'] : '';
		$wordpress = isset( $instance['wordpress'] ) ? $instance['wordpress'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<hr>
		<p>Enter just the usernames of your social accounts below unless otherwise noted.</p>
		<table cellpadding="0" cellspacing="10" width="100%">
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><span class="genericon genericon-twitter"></span> <?php _e( 'Twitter:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><span class="genericon genericon-facebook"></span> <?php _e( 'Facebook:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><span class="genericon genericon-instagram"></span> <?php _e( 'Instagram:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'github' ); ?>"><span class="genericon genericon-github"></span> <?php _e( 'Github:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" type="text" value="<?php echo esc_attr( $github ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><span class="genericon genericon-dribbble"></span> <?php _e( 'Dribbble:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" type="text" value="<?php echo esc_attr( $dribbble ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><span class="genericon genericon-flickr"></span> <?php _e( 'Flickr:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" type="text" value="<?php echo esc_attr( $flickr ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><span class="genericon genericon-linkedin"></span> <?php _e( 'LinkedIn:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><span class="genericon genericon-pinterest"></span> <?php _e( 'Pinterest:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><span class="genericon genericon-tumblr"></span> <?php _e( 'Tumblr:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" type="text" value="<?php echo esc_attr( $tumblr ); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><span class="genericon genericon-youtube"></span> <?php _e( 'YouTube:' ); ?></label>
				</td>
				<td>
					<input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>">
				</td>
			</tr>
			<tr>
				<td valign="top">
					<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><span class="genericon genericon-wordpress"></span> <?php _e( 'WordPress:' ); ?></label>
				</td>
				<td valign="top">
					<input class="widefat" id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" type="text" value="<?php echo esc_attr( $wordpress ); ?>">
					<p class="description">Enter full WordPress or blog URL</p>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<label for="<?php echo $this->get_field_id( 'email' ); ?>"><span class="genericon genericon-mail"></span> <?php _e( 'Email Address:' ); ?></label>
				</td>
				<td valign="top">
					<input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
					<p class="description">Enter full email address</p>
				</td>
			</tr>
		</table>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : 'Find me elsewhere';
		$instance['dribbble'] = ( ! empty( $new_instance['dribbble'] ) ) ? strip_tags( $new_instance['dribbble'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
		$instance['flickr'] = ( ! empty( $new_instance['flickr'] ) ) ? strip_tags( $new_instance['flickr'] ) : '';
		$instance['github'] = ( ! empty( $new_instance['github'] ) ) ? strip_tags( $new_instance['github'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
		$instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
		$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
		$instance['tumblr'] = ( ! empty( $new_instance['tumblr'] ) ) ? strip_tags( $new_instance['tumblr'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
		$instance['wordpress'] = ( ! empty( $new_instance['wordpress'] ) ) ? strip_tags( $new_instance['wordpress'] ) : '';

		return $instance;
	}

} // register Social_Widget
add_action( 'widgets_init', function(){
     register_widget( 'Social_Widget' );
});