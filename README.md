Application PHP - FollowFriday utilisant Twitter API 1.1

Cette application permet de retourner ses X derniers tweet.

Le fichier config/config.php contient les paramètres lambda à renseigner :

    $count corresponds aux nombres de tweets à retourner.
    
    Informations de votre compte twitter dev : https://apps.twitter.com/
        $consumer_key=''; //Application consumer key
        $consumer_secret=''; //Application consumer secret key
        $oauth_token = ''; //oAuth Token
        $oauth_token_secret = ''; //oAuth Token Secret
