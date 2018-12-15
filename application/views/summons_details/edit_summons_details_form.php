


		
<div class="header">
  <h4 class="title"><?php  echo $title; ?></h4>
</div>
<br/>
<div class="content card col-xs-6  col-xs-offset-3 " style="margin-top:50px;">
	<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_summons_category');
				echo form_open("edit_summons_details/$edit_query_result->id", $attributes);
				?>
					
					<h1 class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></h1>

					
					
					<div class='form-group'>
						<label><?php echo $this->category_name_label ?></label>
					
						<?php
						$options =$summons_category;
						$selected = $edit_query_result->summons_category_id;
						echo form_dropdown('summons_category_id', $options, $selected,'class="form-control"');
						?>
						
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>
					<div class='form-group'>
						<label><?php echo $this->summoms_title_label ?></label>
						<input type='text' class='form-control'   name='summons_title' value='<?php echo $edit_query_result->summons_title; ?>' >
						<span class='text-danger'><?php  echo form_error('summons_title'); ?></span>
					</div>
					<div class='form-group'>
						<label><?php echo $this->summoms_section_label ?></label>
						<input type='text' class='form-control'   name='summons_section' value='<?php echo $edit_query_result->summons_section; ?>' >
						<span class='text-danger'><?php  echo form_error('summons_section'); ?></span>
					</div>

				
				
				    <button type="submit" class="btn btn-info btn-fill center-block">Update</button>
				<?php echo form_close(); ?>

</div>
