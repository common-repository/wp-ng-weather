=== wp-ng-weather ===
Contributors: tonysamperi
Donate link: //tonysamperi.github.io/
Tags: easy, weather, forecast, temperature, widget
Requires at least: 4.5.0
Tested up to: 4.8
Stable tag: 1.0.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

wp-ng-weather let's you put a weather widget anywhere in your blog

== Description ==
wp-ng-weather is a simple widget for Wordpress, which allows you to put a weather widget in your website, by using a simple shortcode like this:

> [ng-weather api-key="my-api-key" city="Bergamo" locale="it"]

No coding is required!
wp-ng-weather is a wrapper for Tony Samperi's ng-weather (tonysamperi.github.io/ng-weather/), which is an AngularJS Directive.
Weather data is got from http://www.openweathermap.org, but they need to track api usage.
So you'll need your personal API KEY to use this widget, see "Installation" to learn how to get one!
With a FREE API KEY it's possibile to make 60 calls per minute.

== Installation ==

1. Register here: https://home.openweathermap.org/users/sign_up. When done, you will be redirected to https://home.openweathermap.org/.
Now in the tab "API Keys" - https://home.openweathermap.org/api_keys - you'll find your API KEY!
2. Upload the plugin files to the `/wp-content/plugins/wp-ng-weather` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress

and your done!


== Frequently Asked Questions ==

= What do I need to start? =
You only need an API KEY. See Installation to learn how to get one!

= Why do I need an API KEY to get started? =
Because openweathermap offers both free and paid services.
A free API KEY gives you up to 60 calls per minute (1 call per second! It's quite a lot!).
Thanks to the API KEY openweathermap can keep track of theirs api usage and avoid abuses!

= Can I put wp-ng-weather in the main content? =

Yes. By putting the following snippet in your article or page:
[ng-weather api-key="my-api-key" city="Bergamo" locale="it"]

= Can I put wp-ng-weather into the widgets section? =

It's possible, by adding the following function to the "functions.php" file of your template
add_filter('widget_text', 'do_shortcode');
But be careful!

== Screenshots ==

1. wp-ng-weather in the widgets sidebar and in the main content

== Changelog ==

= 1.0.0 =
* First Release.
= 1.0.1 =
* Added "Thunderstorm" and "Hurricane" weather conditions
= 1.0.2 =
* Added "Fog" and fixed settings select width
= 1.0.3 =
* Added Angular check and warning
= 1.0.4 =
* Fixed missing base url
= 1.0.5 =
* Spinner fixed
= 1.0.6 =
* CSS override prevented
= 1.0.7 =
* Version updated
= 1.0.8 =
* Safe deps load
= 1.0.9 =
* Fixed loading issue


== Upgrade Notice ==

= 1.0.0 =
* It's actually not an update
= 1.0.1 =
* This will add new weather conditions: "Thunderstorm" and "Hurricane"
= 1.0.2 =
* This will add "Fog" to your weather conditions and improve graphics!
= 1.0.3 =
* This will make ngWeather safer, because it won't mess with other plugins which may require angularjs
= 1.0.4 =
* This will make ngWeather work again after the broken update 1.0.3. D'oh!
= 1.0.5 =
* This will make ngWeather show a spinner while loading data
= 1.0.6 =
* This will fix compatibility with some templates
= 1.0.7 =
* Version updated
= 1.0.8 =
* Prevent issues on certain wordpress installations
= 1.0.9 =
* A small issue was in the previous release. This will fix it.

== parameters ==

* **api-key**: Your API KEY you got from openweathermap.org. **REQUIRED**
* **city**: A string with the name of your city. This isn't required **if** you set "city-id"
* **city-id**: A string with the ID of your city. This isn't required **if** you set "city"
* **locale**: A string with your locale. **"en"** or **"it"** are supported at the moment. Default value "en".