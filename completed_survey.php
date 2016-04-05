<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="survey_form.css">
	<title>Completed Survey</title>
</head>
<body>
	<div class="container">
		<div id="survey_results">
		<h3>Submitted Information</h3>
		<?php  
			echo "<p>Name: " . $_POST['name'] . "</p>";
			echo "<p>Dojo Location: " . $_POST['location'] . "</p>";
			echo "<p>Favorite Language: " . $_POST['language'] . "</p>";
			echo "<p id='comment_p'>Comment: " . $_POST['comment'] . "</p>";
		?>

		<form action="survey_form.php" id="survey">
			<input type="submit" value="Go Back" class="submit"></input>
		</form>


		</div>
	</div>
</body>
</html>