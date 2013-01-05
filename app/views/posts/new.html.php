<style type="text/css">
.mceLayout {
	min-width: 620px;
}
.mceIframeContainer {
	min-width: 618px;
}
</style>

<div class="left_panel">
	<h1 class="page_header left tc">New Post</h1>
	<div class="m15">
		<?php $form = new Form('Post'); ?>
		
		<?php echo $form->form_tag(array('action' => 'create', 'method' => 'post')) ?>
			<div>
				<h3>Please write the post below</h3>
				<?php echo $form->input('uid', array('as' => 'hidden', 'value' => $_SESSION['fly_user'])) ?>
				<div>
					<textarea id="post" name="Post[post]" rows="15" cols="80" style="width: 100%" class="tinymce">
						Write your post here...
					</textarea>
				</div>

				<!-- Some integration calls -->
				<div class="mt5">
					<a href="javascript:;" onclick="$('#post').tinymce().show();$('#plain_text').show();$(this).hide();return false;" id="show_editor" style="display: none;">Show in Editor</a>
					<a href="javascript:;" onclick="$('#post').tinymce().hide();$('#show_editor').show();$(this).hide();return false;" id="plain_text">Show as Plain Text</a>
				</div>
 				<div class="mt5">
					<input type="submit" name="save" value="Submit" />
					<input type="reset" name="reset" value="Reset" />
 				</div>
			</div>
		<?php echo $form->end_form() ?>
	</div>
</div>

<?php echo render(array('partial' => 'blog_links')) ?>
