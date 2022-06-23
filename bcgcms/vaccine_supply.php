<?php include('inc/header.php');?>
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="page-header">
								<ul class="breadcrumbs">
										<li class="nav-item">
												<a href="#" class="sub_bread">Products</a>
										</li>
										<li class="separator">
												<i class="flaticon-right-arrow"></i>
										</li>
										<li class="nav-item">
												<a href="vaccine_supply.php">Supply of BCG Vaccine</a>
										</li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<?php   
							$sql    = "SELECT * FROM vaccine_supply";
							$res    = pg_query($db,$sql);
							$result = pg_fetch_assoc($res);
							?>
							
							<input type="hidden" name="vs_id">
							<textarea id="vs_supply" rows="5">
							</textarea>
						</div>
						<div class="card-action">
							<button class="btn btn-success updateobj">Submit</button>
							<a href="viewSupply.php" class="btn btn-danger">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footer.php');?>
<script>
	var content_desc = <?php echo json_encode($result['vs_details'] ?? '');?>;  
	tinymce.init({
		selector: "textarea#vs_supply",
		height: 500,
		plugins: ["advlist autolink textcolor colorpicker lists link image  charmap print anchor",
										"searchreplace visualblocks code",
										"insertdatetime media paste codesample table preview"
		],
		toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ",
		toolbar_mode: "floating",
		tinycomments_mode: "embedded",
		tinycomments_author: "Author name",
		statusbar: false,
		setup: function (editor) {
			editor.on('init', function (e) {
				editor.setContent(content_desc);
			});
		}
});

//  About us updating;
$(".updateobj").on("click", function () {
	var vs_id = <?php echo json_encode($result['vs_id'] ?? ''); ?>;
		var content = tinymce.get("vs_supply").getContent();
		var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
		// alert(updated_by);
		// console.log(content_id);
		$.ajax({
			type: "POST",
			url: "updateSupply.php",
			data: {
				vs_id : vs_id,
				vs_details: content,
				updated_by: updated_by,
			},
			success: function (data) {
				if (data == 1) {
					swal({
						type: "success",
						title: "Done!",
						html: "Successfully Updated",
					});
				}
			},
		});
	});
</script>