<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue child scripts
 */
add_action( 'wp_enqueue_scripts', 'amely_child_enqueue_scripts' );
if ( ! function_exists( 'amely_child_enqueue_scripts' ) ) {

	function amely_child_enqueue_scripts() {
		wp_enqueue_style( 'amely-main-style', trailingslashit( get_template_directory_uri() ) . '/style.css' );
		wp_enqueue_style( 'amely-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css' );
		wp_enqueue_script( 'amely-child-script',
			trailingslashit( get_stylesheet_directory_uri() ) . 'script.js',
			array( 'jquery' ),
			null,
			true );
	}

}

// change add to cart position 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 16 );


/*
 * Hide zero value on any zero cost shipping methods
 *
 */

add_filter( 'woocommerce_cart_shipping_method_full_label', function( $label, $method ) {

    if ( $method->cost <= 0 ) {

        $label = $method->get_label();
    }

    return $label;

}, 10, 2 );



//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'product');
}
if ($query->is_search) {
$query->set('post_type', $post_type);
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}


add_filter('woocommerce_get_catalog_ordering_args', 'tk_woocommerce_catalog_orderby');
function tk_woocommerce_catalog_orderby( $args ) {
    if( is_product_category( 'alle-catergorieen' ) ) {
        $args['orderby']  = 'meta_value_num';
        $args['order']    = 'DESC';
        $args['meta_key'] = '_price'; 
    }
    return $args;
}

/* Add this to functions.php */
 add_filter( 'woocommerce_shortcode_products_query', 'woocommerce_shortcode_products_orderby' );

    function woocommerce_shortcode_products_orderby( $args ) {

        $standard_array = array('menu_order','title','date','rand','id');

        if( isset( $args['orderby'] ) && !in_array( $args['orderby'], $standard_array ) ) {
            $args['meta_key'] = '_price';
            $args['orderby'] = 'meta_value_num';
            $args['order'] = 'desc'; /* Replace DESC or ASC for highest to lowest */
        }

        return $args;

    }


    function fix_request_query_args_for_woocommerce( $query_args ) {
    if ( isset( $query_args['post_status'] ) && empty( $query_args['post_status'] ) ) {
        unset( $query_args['post_status'] );
    }
    return $query_args;
}
add_filter( 'request', 'fix_request_query_args_for_woocommerce', 1, 1 );


//sshow the most expensive shipping rate

function my_only_show_most_expensive_shipping_rate( $rates, $package ) {
	$most_expensive_method = '';
	// Loop through shipping rates
	if ( is_array( $rates ) ) :
		foreach ( $rates as $key => $rate ) :
			// Set variables when the rate is more expensive than the one saved
			if ( empty( $most_expensive_method ) || $rate->cost > $most_expensive_method->cost ) :
				$most_expensive_method = $rate;
			endif;
		endforeach;
	endif;
	// Return the most expensive rate when possible
	if ( ! empty( $most_expensive_method ) ) :
		return array( $most_expensive_method->id => $most_expensive_method );
	endif;
	return $rates;
}
// add_action( 'woocommerce_package_rates', 'my_only_show_most_expensive_shipping_rate', 10, 2 );




// DE ICAL BUTTONS VERPLAATSEN    - Minty-Pawel


add_action( 'wp_head', 'ecp_remove_month_ical' );
function ecp_remove_month_ical() {
	if ( tribe_is_month() ) {
		remove_filter( 'tribe_events_after_footer', array( 'TribeiCal', 'maybe_add_link' ), 10, 1 );
	}
}


// DROP A HIONT BUTTON    - Minty-Pawel

add_action( 'woocommerce_after_add_to_cart_form', 'drop_a_hint_text' );
function drop_a_hint_text() {
	global $sitepress;
	$current_language = $sitepress->get_current_language();

	if( $current_language == 'nl' ){ 
		echo '<p id="btn-share"  onclick="change()"> <img src="/wp-content/uploads/2019/12/1151699015229237.VNm410q5JhlSGb2U6vbi_height640.png" style="height:25px" alt="Italian Trulli"><span style="color:white">.</span> Drop a hint dat dit bovenaan je verlanglijstje staat.</p>';
	}
    else if( $current_language == 'en') { 
		echo '<p id="btn-share"  onclick="change()"> <img src="/wp-content/uploads/2019/12/1151699015229237.VNm410q5JhlSGb2U6vbi_height640.png" style="height:25px" alt="Italian Trulli"><span style="color:white">.</span> Drop a hint that this is at the top of your wish list.</p>';
	}
}


add_action( 'woocommerce_after_single_product_summary', 'drop_a_hint_form',111000000);
function drop_a_hint_form() {

	global $sitepress;
	$current_language = $sitepress->get_current_language();
	$curretnLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if( $current_language == 'nl' ){ 
	echo '<div class="pop-up-container" id="resize"> 
			<div class="pop-up-share" id="resize">
				<div class="close-btn" onclick="change()">
					<img src="/wp-content/uploads/2019/11/x-1.svg" width="12" alt="close">
				</div>
				<div class="form">';
	echo			do_shortcode("[gravityform id=10]"); 
	echo 		'</div>
				<div class="product-image">
					'; $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
	echo'			<img src="';echo $image[0]; echo'" data-id="'; echo $loop->post->ID;  echo'">
				</div>
				<div class="product-txt">
					<h7 class="aanhef" id="htinNaam">Beste ontvanger,</h7>
					<p class="text-popup">
					ik was net op monsak.nl en kwam daar mijn droomtas tegen! Ik kon een hint laten sturen dus bij deze laat ik je weten dat deze tas bovenaan mijn verlanglijstje staat. Dan weet je hoe je mij nóg gelukkiger kan maken :)
					<br><br>
					'.$curretnLink.'
					<br><br>
					Liefs <span id="hintAfzender">afzender</span>,<br><br>
					ps. een cadeaubon is ook altijd goed hè, staat ook in hun webshop 😉
				</div>
			</div>
		</div>';
		?> 
		<script>
			var hintInputVeld = document.getElementById("input_10_1");
			var htinNaam = document.getElementById("htinNaam");
	
			hintInputVeld.addEventListener('input', function (evt) {
				console.log(hintInputVeld.value);
				if (hintInputVeld.value) {
					htinNaam.innerHTML =  'Beste '+hintInputVeld.value ;
				} else {
					htinNaam.innerHTML = 'ontvanger';
				}
			});


			var hintInputAfzender = document.getElementById("input_10_3");
			var hintAfzender = document.getElementById("hintAfzender");


			hintInputAfzender.addEventListener('input', function (evt) {
				console.log(hintInputVeld.value);
				if (hintInputVeld.value) {
					hintAfzender.innerHTML =  hintInputAfzender.value ;
				} else {
					hintAfzender.innerHTML = 'afzender';
				}
			});
		</script>
	
		<?php
	

	}
	else if( $current_language == 'en') {
	echo '<div class="pop-up-container" id="resize">
			<div class="pop-up-share" id="resize">
				<div class="close-btn" onclick="change()">
					<img src="/wp-content/uploads/2019/11/x-1.svg" width="12" alt="close">
				</div>
				<div class="form">';
	echo			do_shortcode("[gravityform id=11]"); 
	echo 		'</div>
				<div class="product-image">
					'; $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
	echo'			<img src="';echo $image[0]; echo'" data-id="'; echo $loop->post->ID;  echo'">
				</div>
				<div class="product-txt">
					<h7 class="aanhef">Beste <span id="htinNaam">recipient</span>,</h7>
					<p class="text-popup">
					I just visited monsak.nl and I came across my dream bag! I could send a hint so I will let you know that this bag is at the top of my wish list. Then you know how you can make me even happier :)
					<br><br>
					'.$curretnLink.'
					<br><br>
                        love <span id="hintAfzender"> sender</span>,<br><br>
						ps. een cadeaubon is ook altijd goed hè, staat ook in hun webshop 😉
			</div>
		</div>';
	?> 
	<script>
	var hintInputVeld = document.getElementById("input_10_1");
		var htinNaam = document.getElementById("htinNaam");

		hintInputVeld.addEventListener('input', function (evt) {
			console.log(hintInputVeld.value);
			if (hintInputVeld.value) {
				htinNaam.innerHTML = 'Best '. hintInputVeld.value ;
			} else {
				htinNaam.innerHTML = 'reciver';
			}
		});

		var hintInputAfzender = document.getElementById("input_10_3");
		var hintAfzender = document.getElementById("hintAfzender");

		hintInputAfzender.addEventListener('input', function (evt) {
			console.log(hintInputVeld.value);
			if (hintInputVeld.value) {
				hintAfzender.innerHTML =  hintInputAfzender.value ;
			} else {
				hintAfzender.innerHTML = 'sender';
			}
		});
	</script>

	<?php
	}

	?>
	<script>
		var btnRes = document.getElementById("btn-share");
		var res = document.getElementById("resize");
		var sideContainer = document.getElementsByClassName("wpb_text_column")[0].getElementsByClassName("wpb_wrapper")[0].appendChild(btnRes);

		function change() {
			btnRes.classList.toggle("on");
			res.classList.toggle("active");
		}
	</script>';

	<?php
	
}



// GOOGLE OPENINGS TIJDEN     Minty-Pawel

function googleopningstijd() {

	$curlURL = 'https://www.google.com/maps/search/?api=1&query=Google&query_place_id=ChIJ4wVhsxPixUcRGtyPpyJ6Ozo';
	$curl = curl_init($curlURL);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1 );
	$response=curl_exec( $curl );
	
	$megastring = '';
	$daysOfWeek = [
		'maandag',
		'dinsdag',
		'woensdag',
		'donderdag',
		'vrijdag',
		'zaterdag',
		'zondag',
	];
	foreach($daysOfWeek as $dayofWeek) {
		$start=stripos($response,'[\"'.$dayofWeek.'\",')+strlen($dayofWeek)+9;
		$megastring .= $dayofWeek.": ".substr($response,$start,stripos($response,'\"]',$start)-$start)."<br />";
	}
	
	return $megastring;
	
	
}
add_shortcode('googleOpeningsTijden', 'googleopningstijd');


// Custom sidebar

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Event Calander',
        'id'            => 'widget-csc-introductie',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );

add_action('woocommerce_before_cart', function() {
    foreach( WC()->cart->cart_contents as $prod_in_cart_key => $prod_in_cart ) {	

        $ticket_id = $prod_in_cart['product_id'];

        if (tribe_events_get_ticket_event( $ticket_id ) !== false) {
    
            $event_id = get_post_meta( $ticket_id, '_tribe_wooticket_for_event', true );

            var_dump(get_the_title($event_id));

            $event_date = get_post_meta($event_id, '_EventStartDate');

            $event_date = substr($event_date[0], 0, 10);

            $event_date = date('d-m-Y', strtotime($event_date));
        }
    }
});

// Custom field birthday
// Hook in
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields($fields)
{
    $dob_pattern = "(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}";
    $fields['billing']['billing_birthday'] = array(
        'label' => __('Day Of Birth', 'woocommerce'),
        'placeholder' => _x('DD-MM-JJJJ', 'placeholder', 'woocommerce'),
        'required' => true,
        'class' => array('form-row-wide'),
        'id' => 'geboortedatum-picker',
        'clear' => true,
        'input_class' => array('hasDatepicker'),
        'custom_attributes' => array('pattern' => $dob_pattern),
    );
    return $fields;
}
/**
 * Display field value on the order edit page
 */
add_action('woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1);
function my_custom_checkout_field_display_admin_order_meta($order)
{
    echo '<p><strong>' . __('Day Of Birth') . ':</strong> ' . get_post_meta($order->id, '_billing_birthday', true) . '</p>';
}
//add birtday to mc4wp plugin  //
add_filter('mc4wp_integration_woocommerce_data', function ($data) {
    foreach( WC()->cart->cart_contents as $prod_in_cart_key => $prod_in_cart ) {	
		$ticket_id = $prod_in_cart['product_id'];
		if ($prod_in_cart['product_id'] == 20915 || 
			$prod_in_cart['product_id'] == 20943 || 
			$prod_in_cart['product_id'] == 20940 ||
			$prod_in_cart['product_id'] == 20939 ||
			$prod_in_cart['product_id'] == 20941 ||
			$prod_in_cart['product_id'] == 21052) {
			$data['interests']['7d5ab75041'] = "729ff52f11";
        } else if ($prod_in_cart['product_id'] == 20334 || 
                	$prod_in_cart['product_id'] == 20342 ||
                   	$prod_in_cart['product_id'] == 20645 ||
                   	$prod_in_cart['product_id'] == 20644 ||
					$prod_in_cart['product_id'] == 20341 ||
					$prod_in_cart['product_id'] == 20335 ||
					$prod_in_cart['product_id'] == 20345 ||
					$prod_in_cart['product_id'] == 20648 ||
					$prod_in_cart['product_id'] == 20647 ||
					$prod_in_cart['product_id'] == 20344) {
            $data['interests']['7d5ab75041'] = "8bb17057e7";
        } else if ($prod_in_cart['product_id'] == 21076 || 
					$prod_in_cart['product_id'] == 21077 ||
					$prod_in_cart['product_id'] == 21078 ||
					$prod_in_cart['product_id'] == 21079 ||
					$prod_in_cart['product_id'] == 21080) {
			$data['interests']['7d5ab75041'] = "3ef5e7864d";

		} else if (tribe_events_get_ticket_event( $ticket_id ) !== false) {
            $event_id = get_post_meta( $ticket_id, '_tribe_wooticket_for_event', true );

            $event_date = get_post_meta($event_id, '_EventStartDate');
            $event_date = substr($event_date[0], 0, 10);
			$event_date = date('d-m-Y', strtotime($event_date));
			
			$event_time = get_post_meta($event_id, '_EventStartDate');
			$event_time = substr($event_time[0], -8);

			$event_title = get_the_title($event_id);


            $data['interests']['7d5ab75041'] = "a8c4bea568";
			$data['EVENT'] = $event_date;
			$data['EVENTTIME'] = $event_time;
			$data['EVENTTITLE'] = $event_title;
        } else {
            $data['interests']['7d5ab75041'] = "a7bb93345a";
		}
    }
    // map of WooCommerce checkout field names => MailChimp field names
    $field_map = array(
        'billing_birthday' => 'BDAY',
    );
    foreach ($field_map as $woocommerce_field => $mailchimp_field) {
        if (!empty($_POST[$woocommerce_field])) {
            //$data[ $mailchimp_field ] = sanitize_text_field(  preg_replace('-', '/', $_POST[ $woocommerce_field ]) );
            $data[$mailchimp_field] = sanitize_text_field($_POST[$woocommerce_field]);
        }
    }
    
//    $data['interests'];
    return $data;
});



//hide other shipping when free shipping is avaible
function hide_shipping_when_free_is_available( $rates, $package ) {
	$new_rates = array();
	foreach ( $rates as $rate_id => $rate ) {
		// Only modify rates if free_shipping is present.
		if ( 'free_shipping' === $rate->method_id ) {
			$new_rates[ $rate_id ] = $rate;
			break;
		}
	}

	if ( ! empty( $new_rates ) ) {
		//Save local pickup if it's present.
		foreach ( $rates as $rate_id => $rate ) {
			if ('local_pickup' === $rate->method_id ) {
				$new_rates[ $rate_id ] = $rate;
				break;
			}
		}
		return $new_rates;
	}

	return $rates;
}

add_filter( 'woocommerce_package_rates', 'hide_shipping_when_free_is_available', 10, 2 );


