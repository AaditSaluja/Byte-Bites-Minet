<?= style_link_tag("_menu-add"); ?>
<?= style_link_tag("_menu"); ?>
<div class="container">
	<div class="heading"><h1>somethingX</h1></div>
			<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<?php if($this->session->userdata("loggedin") == TRUE AND $this->session->userdata("loggedin")): ?>
						<?=menu("menu_loggedin")?></a>
						<?php elseif($this->session->userdata("loggedin") == NULL OR $this->session->userdata("loggedin") == FALSE): ?>
						<?=menu("menu")?></a>
						<?php else:?>
						<?=menu("menu")?></a>	
					<?php endif;?>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
					</svg>
				</div>

			</div>
			<button class="menu-button" id="open-button"></button>
			<div class="content-wrap">
				<div class="content">

