<div class="left_panel">
	<h1 class="page_header left tc">Blog - posts</h1>
	<div class="m15">
		<ul class="posts">
			<?php foreach ($posts as $p) { ?>
				<li>
					<?php	echo $p->post ?>
					<div class="controls">
						<?php echo date('M dS, Y', strtotime($p->timestamp)) ?>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>

<?php echo render(array('partial' => 'blog_links')) ?>