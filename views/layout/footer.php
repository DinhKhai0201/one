		<hr>
		<footer>
			<p>&copy; PSCD - Softdevelop 2015</p>
		</footer>
    </div>

	<?php 
	if($enableOB) {
		echo "JSBOTTOM";
		ob_end_flush();
	}
	echo html_helpers::jsFooter();
	?>
</body>
</html>
