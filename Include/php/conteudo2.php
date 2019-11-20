<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/conteudo2.css">
	</head>
	<body>		
		<div id="conteudo">		
			<div id="img">				
			</div>			
				<div id="img2">
				</div>
					<div id="img3">
					</div>
					<div id="texto">
						<?php
							echo readfile ("txt/h.txt");
						?>
					</div>
						<div id="texto2">
							<?php 
								echo readfile ('txt/s.txt');
							?>
						</div>
							<div id="texto3">
								<?php 
									echo readfile ('txt/hulk.txt');
								?>
							</div>
		</div>			
	</body>
</html>