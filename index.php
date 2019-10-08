
<!-- Esse comando include do php serve para incluir outros arquivos. -->
<!-- O __DIR__ serve para passar o endereco do arquivo atual. -->
<?php include(__DIR__.'/header.php'); ?>
<?php include(__DIR__.'/functions.php'); ?>

<?php 

$ch = curl_init();
$options = [
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => 'https://bloconotas.herokuapp.com/anotacao'
];

curl_setopt_array($ch, $options);
$noticias = json_decode(curl_exec($ch));
curl_close($ch);

?>

<body>
	<?php  ?>
	<section class="painel-notas">
		<div class="container">
			<div class="row">
				<?php foreach ($noticias->rows as $value) : ?>
					<div class="col-12 col-md-4 mb-3">
						<div class="card mx-auto text-center" data-id="<?php echo $value->id_anotacao; ?>">
							<img class="card-img-top" src="./img/bloco-notas.jpg" alt="Card image cap">
							<!-- <i class="fa fa-desktop" aria-hidden="true"></i> -->
							<div class="card-body">
								<h5 class="card-title"><?php echo $value->titulo; ?></h5>
								<p class="card-text"><?php echo limitString($value->texto, 150); ?></p>
								<a href="#" class="btn btn-primary">Entrar</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php  ?>

	<?php /* ?>
	<section class="painel-notas">
		<div class="container">
			<div class="row">
				<?php for($i = 0; $i < 10; $i++) : ?>
					<div class="col-12 col-md-4 mb-3">
						<div class="card mx-auto text-center">
							<img class="card-img-top" src="./img/bloco-notas.jpg" alt="Card image cap">
							<!-- <i class="fa fa-desktop" aria-hidden="true"></i> -->
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Entrar</a>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>
	<?php */ ?>
</body>

<?php include(__DIR__.'/footer.php'); ?>
