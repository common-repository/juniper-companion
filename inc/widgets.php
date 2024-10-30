<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// #################################################
// Register Widget Area.
// #################################################

    // frontpage - about
    register_sidebar(array(
        'id' => 'frontpage-about-left',
        'name' => __('Frontpage About Left', 'juniper-companion' ),
        'before_widget' => '<div class="col-sm-4" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    
    register_sidebar(array(
        'id' => 'frontpage-about-center',
        'name' => __('Frontpage About Center', 'juniper-companion' ),
        'before_widget' => '<div class="col-sm-4" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    
    
    register_sidebar(array(
        'id' => 'frontpage-about-right',
        'name' => __('Frontpage About Right', 'juniper-companion' ),
        'before_widget' => '<div class="col-sm-4" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - left
    register_sidebar(array(
        'id' => 'frontpage-team-left',
        'name' => __('Frontpage Team Left', 'juniper-companion' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));

    // frontpage - team - center left
    register_sidebar(array(
        'id' => 'frontpage-team-center-left',
        'name' => __('Frontpage Team Center Left', 'juniper-companion' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - center right
    register_sidebar(array(
        'id' => 'frontpage-team-center-right',
        'name' => __('Frontpage Team Center Right', 'juniper-companion' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - right
    register_sidebar(array(
        'id' => 'frontpage-team-right',
        'name' => __('Frontpage Team Right', 'juniper-companion' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));    
    
    // frontpage - social
    register_sidebar(array(
        'id' => 'frontpage-social-media',
        'name' => __('Frontpage Social Media', 'juniper-companion' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));


// #################################################
// About Row Content Widget
// #################################################

class juniper_companion_about_content_widget extends WP_Widget {
    
    // Register widget
    function __construct() {
        parent::__construct(
          'juniper-companion-about-content-widget', // Base ID
          'Juniper - About Content Widget', // Name
          array( 'description' => __('Display about content boxes on the frontpage', 'juniper-companion' ))  // Description
        );
    }
    
    // Create output function
    public function widget($args, $instance) {
		echo $args['before_widget'];
		?>
            <div class="about-content">
                <?php if ( ! empty( $instance['content'] ) ) { 
                    echo esc_html($instance['content']); 
                } ?>
            </div>  
		<?php
		echo $args['after_widget'];
    }  
    
    // Create widget form
	public function form( $instance ) {
		$content = ! empty( $instance['content'] ) ? esc_html($instance['content']) : __( '', 'juniper-companion' );
		?>
		<p>
			<textarea id="<?php echo esc_attr($this->get_field_id( 'content' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'content' )); ?>" rows="4" cols="50"><?php echo esc_html( $content ); ?></textarea>
		</p>
		<?php 
	}
    
    // Save stuff
    public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
		return $instance;
	}
        
}

// Register about row content widget
function register_juniper_companion_about_content_widget() {
    register_widget( 'juniper_companion_about_content_widget' );
}
add_action( 'widgets_init', 'register_juniper_companion_about_content_widget' );



// #################################################
// About Row Quote Widget
// #################################################

class juniper_companion_about_quote_widget extends WP_Widget {
    
    // Register widget
    function __construct() {
        parent::__construct(
          'juniper-companion-about-quote-widget', // Base ID
          'Juniper - About Quote Widget', // Name
          array( 'description' => __('Display quote boxes on the frontpage', 'juniper-companion' ))  // Description
        );
    }
    
    // Create output function
    public function widget($args, $instance) {
		echo $args['before_widget'];
		?>
            <div class="about-quote">
                <?php if ( ! empty( $instance['quote'] ) ) { 
                    echo esc_html($instance['quote']) ."<span>~" . esc_html($instance['tag']) ."</span>"; 
                } ?>
            </div>  
		<?php
		echo $args['after_widget'];
    }  
    
    // Create widget form
	public function form( $instance ) {
		$quote = ! empty( $instance['quote'] ) ? esc_html($instance['quote']) : __( '', 'juniper-companion' );
		$tag = ! empty( $instance['tag'] ) ? esc_html($instance['tag']) : __( '', 'juniper-companion' );
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'quote' )); ?>"><?php _e( 'Quote:', 'juniper-companion' ); ?></label> 
			<textarea id="<?php echo esc_attr($this->get_field_id( 'quote' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'quote' )); ?>" rows="4" cols="50"><?php echo esc_html( $quote ); ?></textarea>
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'tag' )); ?>"><?php _e( 'Name:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'tag' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'tag' )); ?>" type="text" value="<?php echo esc_html( $tag ); ?>">
		</p>
		<?php 
	}
    
    // Save stuff
    public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['quote'] = ( ! empty( $new_instance['quote'] ) ) ? strip_tags( $new_instance['quote'] ) : '';
		$instance['tag'] = ( ! empty( $new_instance['tag'] ) ) ? strip_tags( $new_instance['tag'] ) : '';
		return $instance;
	}
        
}

// Register about row content widget
function register_juniper_companion_about_quote_widget() {
    register_widget( 'juniper_companion_about_quote_widget' );
}
add_action( 'widgets_init', 'register_juniper_companion_about_quote_widget' );



// #################################################
// Team Row Content Widget
// #################################################

class juniper_companion_team_content_widget extends WP_Widget {
    
    // Register widget
    function __construct() {
        parent::__construct(
          'juniper-companion-team-content-widget', // Base ID
          'Juniper - Team Content Widget', // Name
          array( 'description' => __('Display team content boxes on the frontpage', 'juniper-companion' )) // Description
        );
    }
    
    // Create output function
    public function widget($args, $instance) {
		echo $args['before_widget'];
		?>
		    <h4 class="team-item-title">
                <?php if ( ! empty( $instance['name'] ) ) { 
                    echo esc_html($instance['name']); 
                } ?>            	
            </h4>
            <img class="img-responsive center-block" src="<?php if ( ! empty( $instance['imgurl184sq'] ) ) { echo esc_url($instance['imgurl184sq']); } ?>" />

            <h5 class="team-item-sub-title">
                <?php if ( ! empty( $instance['title'] ) ) { 
                    echo esc_html($instance['title']); 
                } ?> 
            </h5>
            <p class="team-social-icons">
            	<?php if (!empty( $instance['social1']) && !empty( $instance['faclass1'])) { ?>
            		<a href="<?php echo esc_url($instance['social1']); ?>"><i class="fa <?php echo esc_attr($instance['faclass1']); ?>"></i></a>
            	<?php } ?>
            	<?php if (!empty( $instance['social2']) && !empty( $instance['faclass2'])) { ?>
            		<a href="<?php echo esc_url($instance['social2']); ?>"><i class="fa <?php echo esc_attr($instance['faclass2']); ?>"></i></a>
            	<?php } ?>
            	<?php if (!empty( $instance['social3']) && !empty( $instance['faclass3'])) { ?>
            		<a href="<?php echo esc_url($instance['social3']); ?>"><i class="fa <?php echo esc_attr($instance['faclass3']); ?>"></i></a>
            	<?php } ?>
            </p>  
		<?php
		echo $args['after_widget'];
    }  
    
    // Create widget form
	public function form( $instance ) {
		$imgurl184sq = ! empty( $instance['imgurl184sq'] ) ? $instance['imgurl184sq'] : __( '', 'juniper-companion' );
		$name = ! empty( $instance['name'] ) ? $instance['name'] : __( '', 'juniper-companion' );
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( '', 'juniper-companion' );
		$social1 = ! empty( $instance['social1'] ) ? $instance['social1'] : __( '', 'juniper-companion' );
		$faclass1 = ! empty( $instance['faclass1'] ) ? $instance['faclass1'] : __( '', 'juniper-companion' );
		$social2 = ! empty( $instance['social2'] ) ? $instance['social2'] : __( '', 'juniper-companion' );
		$faclass2 = ! empty( $instance['faclass2'] ) ? $instance['faclass2'] : __( '', 'juniper-companion' );
		$social3 = ! empty( $instance['social3'] ) ? $instance['social3'] : __( '', 'juniper-companion' );
		$faclass3 = ! empty( $instance['faclass3'] ) ? $instance['faclass3'] : __( '', 'juniper-companion' );
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'imgurl184sq' )); ?>"><?php _e( 'Headshot Image (262x262px):', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'imgurl184sq' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'imgurl184sq' )); ?>" type="text" value="<?php echo esc_url($imgurl184sq ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'name' )); ?>"><?php _e( 'Name:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'name' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'name' )); ?>" type="text" value="<?php echo esc_html( $name ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e( 'Title:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_html( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'social1' )); ?>"><?php _e( 'Social Media Link #1:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'social1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'social1' )); ?>" type="text" value="<?php echo esc_url( $social1 ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'faclass1' )); ?>"><?php _e( 'FontAwesome Class #1:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'faclass1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'faclass1' )); ?>" type="text" value="<?php echo esc_attr( $faclass1 ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'social2' )); ?>"><?php _e( 'Social Media Link #2:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'social2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'social2' )); ?>" type="text" value="<?php echo esc_url( $social2 ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'faclass2' )); ?>"><?php _e( 'FontAwesome Class #2:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'faclass2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'faclass2' )); ?>" type="text" value="<?php echo esc_attr( $faclass2 ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'social3' )); ?>"><?php _e( 'Social Media Link #3:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'social3' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'social3' )); ?>" type="text" value="<?php echo esc_url( $social3 ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'faclass3' )); ?>"><?php _e( 'FontAwesome Class #3:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'faclass3' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'faclass3' )); ?>" type="text" value="<?php echo esc_attr( $faclass3 ); ?>">
		</p>
		<?php 
	}
    
    // Save stuff
    public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['imgurl184sq'] = ( ! empty( $new_instance['imgurl184sq'] ) ) ? esc_url_raw($new_instance['imgurl184sq']) : '';
		$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? sanitize_text_field($new_instance['name']) : '';
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field($new_instance['title']) : '';
		$instance['social1'] = ( ! empty( $new_instance['social1'] ) ) ? esc_url_raw($new_instance['social1']) : '';
		$instance['faclass1'] = ( ! empty( $new_instance['faclass1'] ) ) ? esc_attr($new_instance['faclass1']) : '';
		$instance['social2'] = ( ! empty( $new_instance['social2'] ) ) ? esc_url_raw($new_instance['social2']) : '';
		$instance['faclass2'] = ( ! empty( $new_instance['faclass2'] ) ) ? esc_attr($new_instance['faclass2']) : '';
		$instance['social3'] = ( ! empty( $new_instance['social3'] ) ) ? esc_url_raw($new_instance['social3']) : '';
		$instance['faclass3'] = ( ! empty( $new_instance['faclass3'] ) ) ? esc_attr($new_instance['faclass3']) : '';
		return $instance;
	}
        
}

// Register widget
function register_juniper_companion_team_content_widget() {
    register_widget( 'juniper_companion_team_content_widget' );
}
add_action( 'widgets_init', 'register_juniper_companion_team_content_widget' );



// #################################################
// Social Media Row Content Widget
// #################################################

class juniper_companion_social_content_widget extends WP_Widget {
    
    // Register widget
    function __construct() {
        parent::__construct(
          'juniper-companion-social-content-widget', // Base ID
          'Juniper - Social Media Content Widget', // Name
          array( 'description' => __('Display social content boxes on the frontpage', 'juniper-companion' ))  // Description
        );
    }
    
    // Create output function
    public function widget($args, $instance) {
		echo $args['before_widget'];
		?>
			<div data-sr="wait 0.2s, scale up 25%">
	            <a href="<?php if ( ! empty( $instance['url'] ) ) { echo esc_url($instance['url']); } ?>">
	            	<i class="fa <?php if ( ! empty( $instance['faclass'] ) ) { echo esc_attr($instance['faclass']); } ?>"></i><br>
	            	<span class="social-item-title h5">
		                <?php if ( ! empty( $instance['title'] ) ) { 
		                    echo esc_html($instance['title']); 
		                } ?> 	
	            	</span><br>
	            	<span class="social-item-sub-title h5">
		                <?php if ( ! empty( $instance['sub-title'] ) ) { 
		                    echo esc_html($instance['sub-title']); 
		                } ?>
	            	</span>
	            </a>  
            </div>
		<?php
		echo $args['after_widget'];
    }  
    
    // Create widget form
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'juniper-companion' );
		$sub_title = ! empty( $instance['sub-title'] ) ? $instance['sub-title'] : __( '', 'juniper-companion' );
		$faclass = ! empty( $instance['faclass'] ) ? $instance['faclass'] : __( 'fa-star', 'juniper-companion' );
		$url = ! empty( $instance['url'] ) ? $instance['url'] : __( '', 'juniper-companion' );
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e( 'Title:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_html( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'sub-title' )); ?>"><?php _e( 'Sub-title:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'sub-title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'sub-title' )); ?>" type="text" value="<?php echo esc_html( $sub_title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'faclass' )); ?>"><?php _e( 'FontAwesome Class:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'faclass' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'faclass' )); ?>" type="text" value="<?php echo esc_attr( $faclass ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'url' )); ?>"><?php _e( 'URL:', 'juniper-companion' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'url' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'url' )); ?>" type="text" value="<?php echo esc_url( $url ); ?>">
		</p>
		<?php 
	}
    
    // Save stuff
    public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['sub-title'] = ( ! empty( $new_instance['sub-title'] ) ) ? sanitize_text_field($new_instance['sub-title']) : '';
        $instance['faclass'] = ( ! empty( $new_instance['faclass'] ) ) ? esc_attr($new_instance['faclass']) : '';	
	    $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? esc_url_raw($new_instance['url']) : '';
		return $instance;
	}
        
}

// Register widget
function register_juniper_companion_social_content_widget() {
    register_widget( 'juniper_companion_social_content_widget' );
}
add_action( 'widgets_init', 'register_juniper_companion_social_content_widget' );