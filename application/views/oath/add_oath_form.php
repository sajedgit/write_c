






		
<div class="header">
  <h4 class="title"><?php  echo $title; ?></h4>
</div>
<br/>

<div class="content card col-xs-6  col-xs-offset-3 " style="margin-top:50px;">


	
				<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_summons_category');
				echo form_open("add_new_oath", $attributes);
				?>
					<?php if (isset($message)) : ?>
						<h1 class="text-center text-success">Data Inserted successfully</h1>	<br/>
					<?php endif; ?>

					<div class='form-group'>
						<label><?php echo $this->oath_category_name_label ?></label>
					
						<?php
						$options =$auth_category;
						$selected = '';
						echo form_dropdown('oath_category_name', $options, $selected,'class="form-control"');
						?>
						
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>
					
					<div class='form-group'>
						<label><?php echo $this->oath_title_label ?></label>
						<input type='text' class='form-control'   name='oath_title' placeholder='<?php echo $this->oath_title_label ?>' >
						<span class='text-danger'><?php  echo form_error('oath_title'); ?></span>
					</div>
					
					
					<div class='form-group'>
						<label><?php echo $this->oath_section_label ?></label>
						<input type='text' class='form-control'   name='oath_section' placeholder='<?php echo $this->oath_section_label ?>' >
						<span class='text-danger'><?php  echo form_error('oath_section'); ?></span>
					</div>
					
					
					<div class='form-group'>
						<label><?php echo $this->oath_code_label ?></label>
						<input type='text' class='form-control'   name='oath_code' placeholder='<?php echo $this->oath_code_label ?>' >
						<span class='text-danger'><?php  echo form_error('oath_code'); ?></span>
					</div>
					
					
					<div class='form-group'>
						<label><?php echo $this->oath_min_label ?></label>
						<input type='text' class='form-control'   name='min' placeholder='<?php echo $this->oath_min_label ?>' >
						<span class='text-danger'><?php  echo form_error('min'); ?></span>
					</div>
					
					
					<div class='form-group'>
						<label><?php echo $this->oath_max_label ?></label>
						<input type='text' class='form-control'   name='max' placeholder='<?php echo $this->oath_max_label ?>' >
						<span class='text-danger'><?php  echo form_error('max'); ?></span>
					</div>
					
					

				
				
				
				 <button type="submit" class="btn btn-info btn-fill center-block">Submit</button>
				<?php echo form_close(); ?>

			

</div>
