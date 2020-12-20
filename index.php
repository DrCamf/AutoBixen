<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>BilBixen</title>

    <!-- Bootstrap 4 CSS and custom CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="custom.css" />


</head>

<body>

<?php
include_once "layout_header.php";
?>

<!-- container -->
<main role="main" class="container starter-template">

	<div class="row">
		<div class="col">

			<!-- where prompt / messages will appear -->
			<div id="response"></div>

			<!-- where main content will appear -->
			<div id="content"></div>
		</div>
	</div>

</main>
<!-- /container -->

<?php
include_once "layout_footer.php";
?>

</body>
</html>