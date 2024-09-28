<hr>
</main>
	<footer class="container">
        <?php $hoje = new Datetime("now", new DatetimeZone("America/Sao_Paulo")); ?>
		<p>&copy; 2023 a <?php echo $hoje->format("Y") ?> - Projeto SW1 - Bryan Vinicius e Gabriel Rodrigues(O Lamentavelman)</p>
	</footer>

    <script src="<?php echo BASEURL; ?>js/jquery-3.7.0.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/popper.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>

    <script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>
</html>
