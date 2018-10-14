<?php 
function menu_bottom()
{
	echo "
		<div class='menu-bottom'>
			<a style='color:#000' href='home.php'><div class='menu-bottom-con'>
				<i class='fas fa-home'></i></i>
			</div></a>
			<div class='menu-bottom-con'>
				<i class='fab fa-gg'></i>
			</div>
			<div class='menu-bottom-con'>
				<div id='mo'>
					<i class='fas fa-plus'></i>
				</div>
				<div class='menu-bottom-con-plus'>
					<ul>
						<a href='co-saving-1.php'><li>Goal</li></a>
						<a href='cost-split.php'><li>Activity</li></a>
					</ul>
					</div>
			</div>
			<div class='menu-bottom-con'>
				<i class='far fa-bell'></i>
			</div>
			<div class='menu-bottom-con'>
				<i class='fas fa-user'></i>
			</div>
		</div>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script>
$(document).ready(function(){
    $('.menu-bottom-con-plus ul').hide();
    $('#mo').click(function(){
        $('.menu-bottom-con-plus').children('ul').stop(true,true).slideToggle('fast');
    });
     });
</script>
	";
}
?>