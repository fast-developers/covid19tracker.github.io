<!DOCTYPE html>
<html>
<head>
	<title>COVID-19 | TRACKER</title>
	<link rel="Icon" href="ic.jpg">
	<link rel="stylesheet" type="text/css" href="india.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="nav-div">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h6>COVID-19 | TRACKER</h6>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="indiacases.php">IndiaCases <span class="sr-only">(current)</span></a>
      </li>
  </ul>
</div>
</nav>
</div>
<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-center text-uppercase">COVID-19 LIVE UPDATE OF INDIA</h3>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">
			<tr>
				<th class="text-capitalize">LastUpdatedTime</th>
				<th class="text-capitalize">State</th>
				<th class="text-capitalize">Confirmed</th>
				<th class="text-capitalize">Active</th>
				<th class="text-capitalize">Recovered</th>
				<th class="text-capitalize">Deaths</th>
			</tr>
	</div>
</section>
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);

$statescount = count($coronalive['statewise']);
 
$i=1;

while($i < $statescount){
	?>

	<tr>
	<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
	</tr>

	<?php
	$i++;
}
	?>
	</table>
	</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>