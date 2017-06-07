<div class="avatar-card">
	<div class="burger">
		<i class="fa fa-bars"></i>
	</div>
	
	<div class="avatar-info">
		<img src="/img/avatar.png" class="img-circle" alt="">
		<small class="user-name">
		<?php

			$faker = Faker\Factory::create();
			echo $faker->name;

		?>
			<i class="caret"></i>
		</small>

	</div>
</div>