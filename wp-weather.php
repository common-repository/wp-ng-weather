<?php
    /*
    Plugin Name: WP NG Weather
    Plugin URI: //wordpress.org/plugins/wp-ng-weather/
    Description: A simple weather widget for Wordpress!
    Version: 1.0.9
    Author: Tony Samperi
    Author URI: //tonysamperi.github.io
    */

    // Exit if accessed directly.
    defined("ABSPATH") or die("No script kiddies please!");
    if(!defined("ABSPATH")) {
        exit;
    }

    function wpw_safely_load_deps () {
        //PREVENT ANGULAR FROM LOADING TWICE
        $angularHandle = "angular129";
        $angularVersion = FALSE;

        global $wp_scripts, $wpw_url;

        if(!isset($wp_scripts)) {
            wp_scripts();
        }
        foreach($wp_scripts->queue as $handle) {
            if(stripos($handle, "angular") !== FALSE) {
                $angularHandle = $handle;
            }
        }
        
        wp_enqueue_style("wpwMisc", $wpw_url . "/css/misc.css");
        wp_enqueue_style("wpwWeatherCss", $wpw_url . "/ng-weather/css/ng-weather.css");
        wp_enqueue_style("wpwFont", $wpw_url . "/ng-weather/css/owfont.css");

        wp_register_script($angularHandle, $wpw_url . "/js/angular.js");
        wp_enqueue_script("wpwWeatherJs", $wpw_url . "/ng-weather/ng-weather.js", [$angularHandle]);
        wp_localize_script("wpwWeatherJs", "wpNgW", array("base" => $wpw_url));
    }

    $wpw_count = 1;
    $wpw_url = WP_PLUGIN_URL . "/" . basename(__DIR__);
    if(!is_admin()) {

        wpw_safely_load_deps();

        add_shortcode("ng-weather", "wpw_load_ng_weather");
        function wpw_load_ng_weather ($atts) {
            global $wpw_count, $wpw_url;
            $params = shortcode_atts(["city" => null, "city-id" => null, "api-key" => null, "locale" => "en"], $atts);
            foreach($params as &$p) {
                $p = trim($p);
            }
            if(empty($params["api-key"])) {
                $error = "<strong>app-id</strong> cannot be empty!<br />Go to <a target=\"_blank\" href=\"http://openweathermap.org\">http://openweathermap.org</a> and register to get your free API KEY";
                include "templates/messagesBox.php";

                return FALSE;
            }
            if(empty($params["city"]) && empty($params["city-id"])) {
                $error = "Either <strong>city</strong> or <strong>city-id</strong> must be defined!";
                include "templates/messagesBox.php";

                return FALSE;
            }
            ob_start();
            include "templates/app.php";
            $wpw_count++;

            return ob_get_clean();
        }
    }
    // end if !is_admin

?>