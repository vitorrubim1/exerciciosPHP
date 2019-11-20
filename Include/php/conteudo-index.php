<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/conteudo-index.css">
	</head>
	<body>		
		<div id="conteudo">
			<div id="img">
			</div>
				<div id="insta">
					<a href="https://www.facebook.com/vitor.rubimpassos"><img src="img/face.png" height="100%" width="100%"> </a> <p id="vp"> Vitoor1</p>
				</div> </br>
					<div id="face">
						<a href="https://www.instagram.com/vitooor1/"><img src="img/insta.png" height="100%" width="100%"> </a> <p id="v"> Vitor Rubim</p>
					</div>
					<div id="texto">
						<?php
							echo readfile ("txt/apresentacao.txt");
						?>				
					</div>				
		</div>	
			
	</body>
</html>






