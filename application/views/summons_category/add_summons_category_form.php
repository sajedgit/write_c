






		
<div class="header">
  <h4 class="title"><?php  echo $title; ?></h4><br/><br/>
</div>

<div class="content card col-xs-6  col-xs-offset-3 " style="margin-top:50px;">


	
				<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_summons_category');
				echo form_open("SummonsCategory/create_summons_category", $attributes);
				?>
					<?php if (isset($message)) : ?>
						<h1 class="text-center text-success">Data Inserted successfully</h1>	<br/>
					<?php endif; ?>

					<div class='form-group'>
						<label><?php echo $this->category_name_label ?></label>
						<input type='text' class='form-control'   name='category_name' placeholder='<?php echo $this->category_name_label ?>' >
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>

				
				
				
				 <button type="submit" class="btn btn-info btn-fill center-block">Submit</button>
				<?php echo form_close(); ?>

			

</div>
