<?php 
	include('inc/dbconnection.php');
	include('inc/header.php');
?>
<div class="main-panel">
	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div
					class="d-flex align-items-left align-items-md-center flex-column flex-md-row"
				>
					<div>
						<h2 class="text-white pb-2 fw-bold">Profile Details</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">
			<div class="row mt--2">
					<div class="card col-md-12">
						<div class="card-header text-center">
								<div class="card-title">Director Message</div>
						</div>
						<div class="form-group">
							<label for="name">Director's message</label>
							<textarea class="form-control" id="director_message"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include('inc/footer.php');?>
<script>
$(document).ready(function() {
		$('#director_message').richText();
	});
</script>

	