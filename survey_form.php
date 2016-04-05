<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="survey_form.css">
	<title>Survey Form</title>
</head>
<body>
	<div class="container">
		<form action="completed_survey.php" id="survey_form" method="post">
			<label name="name">Your Name: <input type="text" name="name" placeholder="Yo Momma" value="Yo Momma"></input></label>
			<br>
			<label>Dojo Location: <select name="location">
				<option value="Mountain View">Mountain View</option>
				<option value="Seattle">Seattle</option>
				<option value="Washington, D.C.">Washington, D.C.</option>
				<option value="Dallas">Dallas</option>
				<option value="Los Angeles">Los Angeles</option>
				<option value="Chicago">Chicago</option>
				<option value="King's Landing">King's Landing</option>			
			</select> </label>
			<br>
			<label>Favorite Language: <select name="language">
				<option value="JavaScript">JavaScript</option>
				<option value="PHP">PHP</option>
				<option value="Ruby">Ruby</option>
				<option value="Python">Python</option>
				<option value="Swift">Swift</option>
				<option value="C#">C#</option>
				<option value="Dothraki">Dothraki</option>			
			</select> </label>
			<br>
			<label>Comment (optional): <br><textarea rows="4" cols="50" name="comment"></textarea></label>
			<input type="submit" value="Submit" class="submit"></input>
		</form>
	</div>
</body>
</html>