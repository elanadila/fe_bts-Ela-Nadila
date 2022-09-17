<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ela Nadila</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{!! asset('img/icon.ico') !!}" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{!! asset('js/plugin/webfont/webfont.min.js') !!}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ["{!! asset('css/fonts.min.css') !!}"]
			},

			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/atlantis.min.css') !!}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{!! asset('css/demo.css') !!}">
</head>

<style>
	.main-panel>.content {
		margin-top: 40px;
	}
</style>

<body>
	<div class="wrapper">


		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<!-- Card -->

					<h4 class="page-title">LOGIN</h4>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<!-- <div class="card-header">
									<div class="card-title">Form Elements</div>
								</div> -->
								<div class="card-body">
									<form action="{{ route('loginCheck')}}" method="POST">
										@csrf
										<div class="row">
											<div class="col-md-5 pl-md-0 pr-md-0">
												<div class="form-group form-group-default">
													<label>Username</label>
													<input type="text"  name="username" class="form-control" placeholder="Masukkan Username">
												</div>
												<div class="form-group form-group-default">
													<label>Password</label>
													<input type="text" name="password" class="form-control" placeholder="Masukkan Password">
												</div>
											</div>
										</div>
										<div class="card-action">
											<button type="submit" class="btn btn-success">Login</button>
										</div>
									</form>
								</div>
								
							</div>
						</div>

					</div>
					<!-- Customized Card -->


				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>
				</div>
			</footer>
		</div>




	</div>
	<!--   Core JS Files   -->
	<script src="{!! asset('js/core/jquery.3.2.1.min.js') !!}"></script>
	<script src="{!! asset('js/core/popper.min.js') !!}"></script>
	<script src="{!! asset('js/core/bootstrap.min.js') !!}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{!! asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') !!}"></script>


	<!-- Chart JS -->
	<script src="{!! asset('js/plugin/chart.js/chart.min.js') !!}"></script>

	<!-- jQuery Sparkline -->
	<script src="{!! asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') !!}"></script>

	<!-- Chart Circle -->
	<script src="{!! asset('js/plugin/chart-circle/circles.min.js') !!}"></script>

	<!-- Datatables -->
	<script src="{!! asset('js/plugin/datatables/datatables.min.js') !!}"></script>

	<!-- Atlantis JS -->
	<script src="{!! asset('js/atlantis.min.js') !!}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{!! asset('js/setting-demo.js') !!}"></script>
	<script src="{!! asset('js/demo.js') !!}"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: 5,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>

</html>