






		
<div class="header">
  <h4 class="title"><?php  echo $title; ?></h4>
</div>
<br/>

<div class="content card col-xs-6  col-xs-offset-3 " style="margin-top:50px;">


	
				<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_summons_category');
				echo form_open("add_new_summons_details", $attributes);
				?>
					<?php if (isset($message)) : ?>
						<h1 class="text-center text-success">Data Inserted successfully</h1>	<br/>
					<?php endif; ?>

					<div class='form-group'>
						<label><?php echo $this->category_name_label ?></label>
					
						<?php
						$options =$summons_category;
						$selected = '1';
						echo form_dropdown('category_name', $options, $selected,'class="form-control"');
						?>
						
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>
					<div class='form-group'>
						<label><?php echo $this->summoms_title_label ?></label>
						<input type='text' class='form-control'   name='summons_title' placeholder='<?php echo $this->summoms_title_label ?>' >
						<span class='text-danger'><?php  echo form_error('summons_title'); ?></span>
					</div>
					<div class='form-group'>
						<label><?php echo $this->summoms_section_label ?></label>
						<input type='text' class='form-control'   name='summons_section' placeholder='<?php echo $this->summoms_section_label ?>' >
						<span class='text-danger'><?php  echo form_error('summons_section'); ?></span>
					</div>

				
				
				
				 <button type="submit" class="btn btn-info btn-fill center-block">Submit</button>
				<?php echo form_close(); ?>

			

</div>
