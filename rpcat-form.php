<p><label for="rpcat-title">Title:</label>
<input class="rpcat_css" id="widget_rpcat-<?php echo $number; ?>-title" name="widget_rpcat[<?php echo $number; ?>][title]" type="text" value="<?php echo htmlspecialchars($values['title'], ENT_QUOTES); ?>" /></p>

<p><label for="rpcat-count">Display:</label>
<input class="rpcat_css" id="widget_rpcat-<?php echo $number; ?>-count" size="5" name="widget_rpcat[<?php echo $number; ?>][count]" type="text" value="<?php echo htmlspecialchars($values['count'], ENT_QUOTES); ?>" />entries<br/><small>Maximun number allowed 15</small></p>

<p><label for="rpcat-category">Select Category:</label>
<select class="rpcat_css" id="widget_rpcat-<?php echo $number; ?>-category" name="widget_rpcat[<?php echo $number; ?>][category]">
	<?php 
		$categories =  get_categories(); 
		foreach ($categories as $cat) {
			$option = '<option value="'.$cat->cat_ID.'"';
			if($values['category'] == $cat->cat_ID) 
				$option .= ' selected="selected"';
			$option .= '>';
			$option .= $cat->cat_name;
			$option .= ' ('.$cat->category_count.')';
			$option .= '</option>';
			echo $option;
		}
	?>
</select></p>