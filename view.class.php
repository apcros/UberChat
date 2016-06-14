<?php


class View
{
	
	function head($title) {
		echo '  <!DOCTYPE html>
				  <html>
				    <head>
				    <title>'.$title.'</title>
				      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
				      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				      <meta charset="UTF-8">
				    </head>

				    <body>
				    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     				<script type="text/javascript" src="js/materialize.min.js"></script>';
	}

	function home() {
		echo '<div class="container"><div class="row">
        <div class="col s12">
          <div class="card ">
            <div class="card-content black-text">
              <span class="card-title black-text">UberChat : Welcome ! </span>
              <p>Hellu welcome on Uberchat ! You can create a new chat room below ! </p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text">Create new chat room</a>
            </div>
          </div>
        </div>
      </div></div>
            ';
	}
	function footer() {
		echo '</body>        <footer class="grey page-footer">
          <div class="container">
            <div class="row">
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
       		© 2015 Apcros
            <a class="grey-text text-lighten-4 right" href="https://twitter.com/Apcros">My twitter</a>
            </div>
          </div>
        </footer></html>';
	}
}


?>