
	<footer class="group">
		<div id="footer-left">
			<p>Copyright <a href="#" class="green">www.1stwebdesigner.com</a> </br>
			Designed by <a href="#" class="green">Michael Burns</a></p>
		</div>
			
		<div id="footer-right">
			<ul>
                            <?php
                                foreach ($menu as $k => $i){
                                    echo '<li><a href="'.$i[1].'">'.$i[0].'</a></li>';
                                }
                            ?>
                            <li><a href="public/page/login.php"><img src="public/images/security.png" width="20" /></a></li>
			</ul>
		</div>
				
		<a href="#header-wrap"><img src="public/images/back-top.png" alt="back-top" class="back-top" /></a>		
	</footer>
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>
