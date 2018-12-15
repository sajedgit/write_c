


		
<div class="header">
  <h4 class="title"><?php  echo $title; ?></h4>
</div>

<div class="content col-xs-6  col-xs-offset-3 ">
	<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_summons_category');
				echo form_open("edit_summons_category/$edit_query_result->id", $attributes);
				?>
					
					<h1 class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></h1>

					<div class='form-group'>
						<label><?php echo $this->category_name_label ?></label>
						<input type='text' class='form-control' value='<?php echo $edit_query_result->category_name; ?>'  name='category_name' placeholder='category_name' >
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>

				
				
				    <button type="submit" class="btn btn-info btn-fill center-block">Update</button>
				<?php echo form_close(); ?>

</div>
