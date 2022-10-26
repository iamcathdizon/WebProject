<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/* simple if 
		$grade = 70;
		if ($grade > 74.4)
			echo 'Passed!';
		else 
			echo 'Failed';
			*/

		/* Laderrize If 
		$grade = 80;
		if ($grade > 100)
			echo 'Out of Range' ;
		elseif ($grade > 74.4) 
			echo 'Passed!';
		elseif ($grade >64.4)
			echo 'Failed';
		else 
			echo 'Out of Range!';
		*/
			/* Nested If 
			$sex = 'male';
			$age = 21;

			if ($sex == 'female'){
				if ($age == 18)
					echo 'Debutant';
				else 
					echo 'Not Debutant';
			}
			elseif ($sex == 'male') {
			if ($age == 21)
				echo 'Debutant';
			else 
				echo 'Not Debutant';
			}
			else 
				echo 'Invalid Sex!';
				*/

			/*Lazerrize if with Logical Operator
			$sex = 'male';
			$age = '18';

			if ($sex == 'female' && $age == 18)
				echo 'Debutant';
			elseif ($sex == 'male' && $age == 21) 
				echo 'Debutant';
			else 
				echo 'Not Debutant';
				*/

				/*
			switch (variableToBeTested){
				case possibeValue:
					statements;
					break;
				case possibeValue:
					statements;
					break;
				case possibeValue:
					statements;
					break;
				case possibeValue:
					statements;
					break;
				default:
					statements;
			}
			*/

			/*
			$colorCode = 'G';
			if(strtoupper($colorCode == 'R')
				echo 'Red';
			elseif ($colorCode == 'G') 
				echo 'Green';
			elseif ($colorCode == 'B') 
				echo 'Blue';
			elseif ($colorCode == 'Y') 
				echo 'Yellow';
			else 
				echo 'Unknown Color';
			*/


			$colorCode = 'r';

			switch(strtoupper($colorCode)) {
				case 'R':
					echo 'Red';
					break;
				case 'G':
					echo 'Green';
					break;
				case 'Y':
					echo 'Yellow';
					break;
				case 'B':
					echo 'Blue';
					break;
				default:
				echo 'Unknown Color';
			}

			





	?>
</body>
</html>