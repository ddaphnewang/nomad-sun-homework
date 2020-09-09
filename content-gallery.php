<!-- how do we get our gallery
					with a text_subfield -->
					<!-- this div wrap our gallery up -->
        <div class="gallery container flex flex-wrap center ph4-l">
			<?php $images = get_sub_field('gallery');?>

			<?php foreach($images as $image) : ?>

				<!-- added a custom field group to our attachment (image)
			    which add a class name to control the width of the images-->
				<div class="gallery-image ph3 mb4
				<?php the_field('image_width', $image['id']);?>">
				<!-- here we grab the image by the attachment ID -->
				<!-- and tell the size that we want; full, medium, thumbnail -->
					<?php echo wp_get_attachment_image($image['id'],'full');?>

					<!-- here we assign our caption to a variable called $caption
				          if the caption is not empty we render it onto the page -->
					<?php $caption = wp_get_attachment_caption($image['id']);?>
					<!-- saying its NOT empty we use ! in javascript e.g. NOT EMPTY = !empty -->
					<?php if(!empty($caption)) :?>


					<p class="caption f5 o-50 pt3 mv0 archivo-regular">
		<!-- here we grab the caption by the attachment ID -->
					<?php echo $caption;?>
					</p>
		<?php endif;?>
		</div>
			
			<?php endforeach; ?>
					</div>	