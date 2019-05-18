<html>
	<head>
		<title>Board Game</title>
		<link rel="stylesheet" href="css/styles.css" />
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<?php
			
			function escreverPosicao($x, $y) {
				echo "[ " . $x . ", " . $y . " ]";
			}

			// Posição do Thanos
			$a = 0;
			$b = 0;
			if (isset($_GET['thanos_x'])) {
				$a = $_GET['thanos_x'];
			}
			if (isset($_GET['thanos_y'])) {
				$b = $_GET['thanos_y'];
			}

			// Posição da Manopla
			$c = rand(1,4);
			$d = rand(1,4);
			if (isset($_GET['manopla_x'])) {
				$c = $_GET['manopla_x'];
			}
			if (isset($_GET['manopla_y'])) {
				$d = $_GET['manopla_y'];
			}
		?>
		
		<div style="position:relative; float: left; width: 300px;">
			<div class="bloco">	
				<p>Controles:</p>		
				<div>
					<img src="img/up1.png" tooltop="Para Cima" class="botao" onClick="mover('U');"/>
				</div>
				<div>
					<img src="img/left1.png" tooltop="Para a Esquerda" class="botao"  style="float:left" onClick="mover('L');" />
					<img src="img/down1.png" tooltop="Para Baixo" class="botao"  onClick="mover('D');"/>
					<img src="img/right1.png" tooltop="Para a Direita" class="botao"  style="float:right"  onClick="mover('R');" />
				</div>
			</div>

			<div class="bloco">
				<form id="form_posicao" name="form_posicao" method="GET">
					<div>
						<p>Posição do Thanos:</p>
						X: <input type="text" id="thanos_x" name="thanos_x" size="3" value="<?php echo $a; ?>" />
						Y: <input type="text" id="thanos_y" name="thanos_y" size="3" value="<?php echo $b; ?>" />
					</div>
					<div>
						<p>Posição da Manopla:</p>
						X: <input type="text" id="manopla_x" name="manopla_x" size="3" value="<?php echo $c; ?>" />
						Y: <input type="text" id="manopla_y" name="manopla_y" size="3" value="<?php echo $d; ?>" />
					</div>
					<br />
					<a href="./">Reiniciar</a>	
					<input type="submit" value="Atualizar" style="float:right"/>		
				</form>
			</div>
		</div>

		<div style="position:relative; float: left">
				<table>
					<?php
						for ($i = 0; $i < 5; $i++) {
							?>
								<tr>
									<?php
										for ($j = 0; $j < 5; $j++) {
											?>
												<td>
													<div class="peca">
														<?php
															if ($a == $j && $b == $i) {
																?>
																	<img src="img/thanos.png" widht="80px" height="80px" id="boneco" />
																<?php
															} else if ($c == $j && $d == $i) {
																?>
																	<img src="img/manopla.png" widht="80px" height="80px" id="boneco" />
																<?php
															} else {
																escreverPosicao($i, $j);
															}
														?>
													</div>
												</td>
												<?php
										}
									?>
								</tr>
							<?php
						}
					?>
				</table>

				<?php
					if ($a == $c && $b == $d) {
						?>
							<span style="text-align:center; color: red; font-size: 40px">Você ganhou!!!!!</span>
						<?php
					}
				?>
		</div>
	</body>
</html>