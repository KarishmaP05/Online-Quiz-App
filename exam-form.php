<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "exam-form";

$con = mysqli_connect($host,$user,$pwd,$db);

if($con)
	{
		$name = $_POST['name'];
        $class = $_POST['class'];
        $seatno = $_POST['seatno'];
        $course = $_POST['course'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $que1 = $_POST['que1'];
        $que2 = $_POST['que2'];
        $que3 = $_POST['que3'];
        $que4 = $_POST['que4'];
        $que5 = $_POST['que5'];
        $que6 = $_POST['que6'];
        $que7 = $_POST['que7'];
        $que8 = $_POST['que8'];
        $que9 = $_POST['que9'];
        $que10 = $_POST['que10'];

        $sql = "INSERT INTO `forms`(`name`, `class`, `seatno`, `course`, `subject`, `email`, `que1`, `que2`, `que3`, `que4`, `que5`, `que6`, `que7`, `que8`, `que9`, `que10`) VALUES ('$name', '$class', '$seatno', '$course', '$subject', '$email', '$que1', '$que2', '$que3', '$que4', '$que5', '$que6', '$que7', '$que8', '$que9', '$que10')";

		$query = mysqli_query($con, $sql);

		if($query)
			{
				echo "Form submitted succesfully.";
			}
        else
            {
                printf("error: %s\n", mysqli_error($con));
            }
	}
else
	{
		echo "Connection Error!";
		echo $exc->getTraceAsString();
	}

?>