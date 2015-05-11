<?php namespace AngryCoders\HelpInfo\modules\views;?>

<!DOCTYPE html>
<html>
	<head><title>HelpInfo</title></head>
<body>
	<h1>HELP INFORMATION ON PROCESSES</h1>
	<p>
		<?php 		
		class Home {
			
			public function __construct($result){
		echo "<pre>".print_r ($result->fetchAll(),true)."</pre><br />";
			}
		}

?>
	
	</p>
</body>
</html>
