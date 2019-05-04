<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="files/bootstrap.min.css">
	</head>
	<body>
		<?php $pokemons = json_decode(file_get_contents("files/pokemons.json"));?>

		<div class="container">
			<h1 class="text-center my-3">POKEMÓNS</h1>
			<hr>		
			<div class="row">
				<?php foreach($pokemons->pokemon as $item): ?>					
					<div class="col-3">
						<div class="card">
							<div class="card-title">
								<p class="lead text-center"><?php echo $item->name; ?></p>									
							</div>
							<div class="card-body text-center">
								<img src="<?php echo $item->img; ?>" class="img-fluid">
							</div>
							<div class="card-footer">
								<p class="lead text-muted text-center">Próximas Evoluções</p>
								<?php if(!empty($item->next_evolution)): ?>
									<ul>
										<?php foreach($item->next_evolution as $next): ?>
											<li><?php echo $next->name; ?></li>
										<?php endforeach; ?>
									</ul>
									<?php else: ?>
										Não possui próxima evolução.
								<?php endif; ?>
							</div>
						</div>
					</div>					
				<?php endforeach; ?>
			</div>	
		</div>
	</body>
</html>