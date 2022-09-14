<?php 
session_start();	
if($_SESSION !==''){
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
						<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
					</div>
					<!-- <div class="ml-md-auto py-2 py-md-0">
						<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
					</div> -->
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">
			<div class="row mt--2">
				<div class="col-md-4">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title text-center">Whats's New</div>
							<ul class="dash">
								<?php $sql = "SELECT * FROM what_new ORDER BY whats_id limit 5"; 
									$res = pg_query($db, $sql);
									$result = pg_fetch_all($res);
									if (is_array($result) || is_object($result)){
									foreach ($result as $value) { ?>
									<li><?php echo $value['whats_title']; ?></li>
								<?php }} ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title text-center">Recruitments</div>
							<ul class="dash">
								<?php $sql = "SELECT * FROM recruitment order by rec_id limit 5"; 
									$res = pg_query($db, $sql);
									$result = pg_fetch_all($res);
									if (is_array($result) || is_object($result)){
									foreach ($result as $value) { ?>
									<li><?php echo $value['rect_title']; ?></li>
								<?php } }?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title text-center">Tenders</div>
							<ul class="dash">
								<?php $sql = "SELECT * FROM tenders order by tender_id limit 5"; 
									$res = pg_query($db, $sql);
									$result = pg_fetch_all($res);
									if (is_array($result) || is_object($result)){
									foreach ($result as $value) { ?>
									<li><?php echo $value['tender_title']; ?></li>
								<?php } }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php');
  }else{
	header("Location: index.php"); 
  }

?>
<script type="application/javascript">
	$(document).ready(function(){
	});
</script>
	<!-- <script src="assets/js/demo.js"></script>
	<script>
		Circles.create({
			id: "circles-1",
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: 5,
			colors: ["#f1f1f1", "#FF9E27"],
			duration: 400,
			wrpClass: "circles-wrp",
			textClass: "circles-text",
			styleWrapper: true,
			styleText: true,
		});

		Circles.create({
			id: "circles-2",
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ["#f1f1f1", "#2BB930"],
			duration: 400,
			wrpClass: "circles-wrp",
			textClass: "circles-text",
			styleWrapper: true,
			styleText: true,
		});

		Circles.create({
			id: "circles-3",
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ["#f1f1f1", "#F25961"],
			duration: 400,
			wrpClass: "circles-wrp",
			textClass: "circles-text",
			styleWrapper: true,
			styleText: true,
		});

		var totalIncomeChart = document
			.getElementById("totalIncomeChart")
			.getContext("2d");

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: "bar",
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [
					{
						label: "Total Income",
						backgroundColor: "#ff9e27",
						borderColor: "rgb(23, 125, 255)",
						data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
					},
				],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [
						{
							ticks: {
								display: false, //this will remove only the label
							},
							gridLines: {
								drawBorder: false,
								display: false,
							},
						},
					],
					xAxes: [
						{
							gridLines: {
								drawBorder: false,
								display: false,
							},
						},
					],
				},
			},
		});

		$("#lineChart").sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: "line",
			height: "70",
			width: "100%",
			lineWidth: "2",
			lineColor: "#ffa534",
			fillColor: "rgba(255, 165, 52, .14)",
		});
	</script> -->