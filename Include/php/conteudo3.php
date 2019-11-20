<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/conteudo3.css">
	</head>
	<body>		
		<div id="conteudo">	
										 <!--   vídeo 1      -->
			<div id="video1">
				<iframe 
					width="430" height="250" src="https://www.youtube.com/embed/q7E4XrfGGnE"
					frameborder="15" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
					<div id="texto1">
						<h3> Canal Nostalgia	</h3>
						<?php 
							echo readfile ('txt/brasil.txt');
						?>
					</div>				
			</div>			
										<!--   vídeo 2      -->
			<div id="video2">
				<iframe 
					width="430" height="250" src="https://www.youtube.com/embed/TV4Vzda09Ck"
					frameborder="15" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
					<div id="texto2">
						<h3> Canal Nostalgia </h3>
						<?php
							echo readfile ('txt/2guerra.txt');
						?>
					</div>
			
			</div>
		</div>			
	</body>
</html>













				 