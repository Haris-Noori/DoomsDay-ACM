<?php

	$random_number = 0;
	/**
	 * 
	 * @return: false when number is already in list, 
	 *		    true  when number is not in list and is added to list succesfully
	 */
	function Save($rand_num)
	{
		//$rand_num = 10;
		$found = false;
		//-------------------------------------------------------------------
		$fileName = "../../rand_nums.txt";    //Giving file path
		$fp = fopen($fileName,"a+");
		if( $fp == false )
		{
		  echo ( "Error in opening file" );    //if file is not opened 
		  exit();
		}
		else
		{
			while(!feof($fp))    //while file is open
			{
			  //echo fgets($fp). "<br>";

			  $line = (string) fgets($fp);    //gets a line from file
			  // echo $line;
			  //echo "[*] Going through ".$line."<br>";


			  if($line == $rand_num)    //if already in file
			  {
			  	//echo "[*] FOUND";
			  	fclose( $fp );

			  	Save(rand(1,1000));
			  	//$found = false;
			  	return true;
			  }
			}
		}

		if(!$found) {
			// echo "<br>[*] Writing to file <br>";
			fwrite( $fp, "\n".$rand_num );
			fclose( $fp );
			$GLOBALS["random_number"] = $rand_num;
			// header("Location:hello.php?num=$rand_num");
			return true;
		}
		
		//---------------------------------------------------FILE CLOSED----------
	}

	function main() 
	{
			$var = rand(1,1000);

			if(Save($var)) {
				// echo "[SUCCESS] ~ ".$var." ~ added number to list <br>";
				// header("Location:hello.php");
			} 
			else 
			{
				// echo "[WARNING] ~ ".$var." ~ number already in list <br>";
			}
		
 	}

	main();

	// echo $random_number;

?>