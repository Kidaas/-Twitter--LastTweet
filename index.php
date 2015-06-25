<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title>Afficher LastTweet</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>

<body class="page lang-fr">
	<aside id="reseaux">
		<li><a href="https://twitter.com/Kidaas" class="social-button twitter" data-show-count="false" target="_Blank">Follow @Kidaas</a></li>
		<li><a href="https://github.com/Kidaas" target="_Blank"><img src="./img/github.gif" width="100px"/></a></li>
	</aside>

	<div id="content">
		<h2>Last tweet</h2>
		<?php
			// Paramètres de configuration
			include('./config/config.php');
			//La bibliothèque oAuth
			require_once ('./twitteroauth/twitteroauth.php');


			if (time() - filemtime($cache) > 600){
				//Création de l'objet
				$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
				$connection->host = "https://api.twitter.com/1.1/";
				// Requete
				$content = $connection->get('statuses/user_timeline', array('count' => $count));
				var_dump($content);
				file_put_contents($cache, serialize($content));
			}else{
				$content = unserialize(file_get_contents($cache));
			}


			// parcour les tweets et les affiches
			foreach ($content as $key => $tweet){
				echo '<li>'.$tweet->text.'</li>';
			}

		?>
	</div>
	</body>
</html>
