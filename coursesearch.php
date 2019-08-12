<?php
printForm();
#-----------------------------------------------------------------------------
// display the entry form for course search
function printForm(){
	echo '<h2>Course Lookup</h2>';
	// print user entry form 
	echo "<form action='courses.php'>";
	echo "Course Prefix (Department)<br/>";
	echo "<input type='text' placeholder='Either CS or CIS' name='prefix'><br/>";
	echo "Course Number<br/>";
	echo "<input type='text' placeholder='Course Number (116)' name='courseNumber'><br/>";
	echo "Instructor<br/>";
	echo "<input type='text' placeholder='Instructor Username (gpcorser)' name='instructor'><br/>";
	#echo "Day of the week<br/>";
    #echo "<input type='text' placeholder='Day of the Week' name='weekDay'><br/>";
	echo "<input type='submit' value='Submit'>";
	echo "</form>";
}
?>
