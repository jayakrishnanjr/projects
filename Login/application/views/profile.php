<!DOCTYPE html>
<html>
	<head>
	<title>CodeIgniter : Login Facebook via Oauth 2.0</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div id="main">
		<div id="login">
		<h2>


		 <img class='fb_profile' src="https://graph.facebook.com/<?php echo $user_profile['id'];?>/picture">


        <p>Welcome <p><?php echo $user_profile['name'];?></p>

      <a class='logout' href='<?php echo $logout_url;?>'>Logout</a>";
		?>
		</div>
	</div>
	</body>
</html>




<!-- echo "<p>Facebook URL : "."<a href=".$user_profile['link']." target='_blank'"."> https://www.facebook.com/".$user_profile['id']."</a></p>";
?> 
-->