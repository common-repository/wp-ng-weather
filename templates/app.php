
<div id="wpw-<?php echo $wpw_count;?>">

	<ng-weather 
		city-id="<?php echo $params["city-id"]; ?>" 
		city="<?php echo $params["city"]; ?>" 
		app-id="<?php echo $params["api-key"]; ?>" 
		locale="<?php echo $params["locale"]; ?>">
	</ng-weather>
</div>
<script type="text/javascript">
	angular.bootstrap(document.getElementById("wpw-<?php echo $wpw_count;?>"), ['ngWeather']);
</script>