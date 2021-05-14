<?php require_once('../templates/header.html') ?>
	<div class="container-fluid main" ng-app="sampleApp">
		<div class="container">
			<!-- view will be injected here -->
			<ui-view></ui-view>
		</div>
	</div>
<?php require_once('../templates/footer.html') ?>