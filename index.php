<html>
<head>
	<meta charset="UTF-8">
	<title>Jquery Autocomplete plugin</title>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- jQuery UI library -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
	<h1>Autocomplete jquery</h1>
<!-- <form method="post"> -->
    <label>Your Skills:</label>
    <input type="text" name="skill_input" id="skill_input"/>
    <input type="submit" name="submit" value="SUBMIT"/>
<!-- </form> -->
<script>
	$(function() {
	    // $("#skill_input").autocomplete({
	    //     source: "search.php",
	    //      select: function( event, ui ) {
	    //         event.preventDefault();
	    //         $("#skill_input").val(ui.item.id);
	    //     }
	    // });

	    // using local source
	    $( "#skill_input" ).autocomplete({
		    source: [ "PHP", "Python", "Ruby", "JavaScript", "MySQL", "Oracle" ]
		});

		//using rempte source
		// $( ".selector" ).autocomplete({
		//     source: "http://example.com"
		// });
	});
</script>


</body>
</html>