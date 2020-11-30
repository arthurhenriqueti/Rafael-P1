<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
		<?php
			$v=array(10,50,2,15,35);

			for($i=0;$i<count($v)-1;$i++){
				if($v[$i]>$v[$i+1]){
					$temp=$v[$i+1];
					$v[$i+1]=$v[$i];
					$v[$i]=$temp;
					$i=-1;
				}
			}
			for($i=0;$i<=count($v);$i++){
				echo" " . $v[$i];		
			}
		?>
	</p>

</body>
</html>