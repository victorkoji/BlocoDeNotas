	$(document).ready(function(){
		$(".btn-bloco").click(function(){
			texto = $(this).siblings(".texto-bloco").html();
			$("#conteudo-modal").html(texto);
		});
	});
