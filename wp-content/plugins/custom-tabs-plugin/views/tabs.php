<style>
	.tabs__boxes__box--left {
			background-image: url(' <?= $bg_image; ?>');
	}
	
	@media (max-width: 768px) {
			.tabs__boxes__box--left {
					background-image: url('<?= $bg_image_mobile; ?>');
			}
	}
	</style>


<div class="tabs">
	<ul class="tabs__links">
    <?php foreach($links as $key => $link) { ?>
			<li class="tabs__links__link">
				<a href="#tab<?= ($key + 1) ?>" class="tab-link <?= $key == 0 ? 'active' : '' ?>"><?= $link ?></a>
			</li>
    <?php } ?>
	</ul>
   
	<!-- creating the same display for each link -->
	<?php foreach($links as $key => $link) { 
		$display = $key == 0 ? 'block' : 'none';
	?>
	<div id="tab<?= ($key + 1)?>" class="tab-content" style="display:<?= $display ?>;">
		<div class="tabs__boxes">
			<div class="tabs__boxes__box tabs__boxes__box--left">
				<div class="box_content">
					<div class="box_content__top">
						<span class="quote">
							<img src="<?= $para_icon ?>" alt="quote">
						</span>
						<p class="left_para"><?= $left_para ?></p>
					</div>
					<div class="box_content__bottom">
						<div class="avatar">
							<div class="avatar__img">
								<img src="<?= $avatar ?>" alt="person">
							</div>
							<div class="avatar__details">
								<h5 class="avatar__name"><?= $avatar_name ?></h5>
								<p class="avatar__job"><?= $avatar_job ?></p>
							</div>
						</div>
					</div>
					<div class="left_logo">
						<img src="<?= $left_logo ?>" alt="logo">
					</div>
				</div>
			</div>
	
			<div class="tabs__boxes__box tabs__boxes__box--right">
				<div class="box-top">
					<span class="percentage"><?= $percentage ?></span>
					<p class="para"><?= $right_para ?></p>
				</div>
				<div class="box-bottom">
						<button class="btn">
								<?= $btn ?>
								<span class="btn__icon"><img src="<?= $btn_icon ?>" alt="arrow"></span>
						</button>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>

	<div class="tabs__logos">
		<?php foreach($logos as $logo) { ?>
			<div class="tabs__logos__logo">
				<img src="<?= $logo ?>" alt="">
			</div>
		<?php } ?>
	</div>
</div>