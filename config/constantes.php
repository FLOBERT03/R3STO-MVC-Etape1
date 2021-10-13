<?php
// l'url de votre site à modifier en fonction du déploiement
define('URL', 'http://r3stobis.test:8080/');
// ou se trouve mon css
define('CSSURL', URL . 'css/');
// ou se trouvent mes controleurs de page
define('CONTROLLER', APPPATH . 'controleur' . DIRECTORY_SEPARATOR);
// ou se trouvent mes vues
define('VIEW', APPPATH . 'vue' . DIRECTORY_SEPARATOR);
// ou se trouvent mes models
define('MODEL', APPPATH . 'modele' . DIRECTORY_SEPARATOR);
// ou se trouvent mes images
define('IMG', URL . 'images' . DIRECTORY_SEPARATOR);
// ou se trouvent mes photos
define('FOTO', URL . 'photos' . DIRECTORY_SEPARATOR);

// les information de connexion
define('DB_HOST', 'localhost');
define('DB_NAME', 'resto-mvc');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
