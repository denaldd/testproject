 <div layout="row" layout-xs="column" class="md-flex-bg">
     <div flex class="md-padding">
     	<h3>Grafiku i shitjeve <?php echo date('Y'); ?></h3>
		<div ng-controller="MyController">
  			<canvas class="chart chart-line" chart-data="data" chart-labels="labels" chart-series="series" chart-click="onClick">
  			</canvas> 
		</div>
	</div>
	<div flex>
		
	</div>
</div>
