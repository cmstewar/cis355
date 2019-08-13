<?php
printForm();
#-----------------------------------------------------------------------------
// display the entry form for course search
function printForm(){
	echo '<h2>Course Lookup</h2>';
	// print user entry form
    echo '<a class="btn" href="https://github.com/cmstewar/cis355" >Git-Hub code</a>';
    echo '&nbsp; &nbsp;<a class="btn" href="index.php">Homepage</a><br><br>';
	echo "<form action='courses.php'>";
	echo "Course Prefix (Department)<br/>";
	echo "<input type='text' placeholder='Either CS or CIS' name='prefix'><br/>";
	echo "Course Number<br/>";
	echo "<input type='text' placeholder='Course Number (116)' name='courseNumber'><br/>";
	echo "Instructor<br/>";
	echo "<input type='text' placeholder='Username (gpcorser)' name='instructor'><br/>";
	echo "Day of the week<br/>";
    echo "<input type='text' placeholder='Day of the Week' name='weekDay'><br><br/>";
	echo "<input type='submit' value='Submit'>";
	echo "</form>";
}
?>
