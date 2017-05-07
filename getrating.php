<?php
			$date = date('m/d/Y h:i:s a', time());
			
			$rating = $_POST['button'];
			$position = $_POST['position'];
			$heading = $_POST['heading'];
			$pitch = $_POST['pitch'];
			$pano = $_POST['pano'];
			$url = $_POST['url'];
			
			$filename = "data/ratings.txt";
			$fp = fopen ($filename, 'a');
			
			//creating string of data to write to file
			$data = "date".":".$date.","."postion:".$position.","."rating:".$rating.","."img_url:".$url.","."heading:".$heading.","."pitch:".$pitch.","."pano:".$pano."\n";
			
			//write data to file
			fwrite($fp, $data);
			
			fclose($fp);
			
			header("Location: DreamTeamProject_new.htm", true, 301);
		?>
	