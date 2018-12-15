
 <script src="<?php echo base_url() ?>assets/js/nicEdit-latest.js"></script>
	
 <script type="text/javascript">
    //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      //]]>
      </script>

		
<div class="header">
  <h4 class="title"><?php  echo $title; ?></h4>
</div>
<br/>
<div class="content card col-xs-6  col-xs-offset-3 " style="margin-top:50px;">
	<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_arrest_complaint_category');
				echo form_open("edit_arrest_complaint_details/$edit_query_result->id", $attributes);
				?>
					
					<h1 class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></h1>

					
					
					<div class='form-group'>
						<label><?php echo $this->category_name_label ?></label>
					
						<?php
						$options =$arrest_complaint_category;
						$selected = $edit_query_result->arrest_complaint_category_id;
						echo form_dropdown('arrest_complaint_category_id', $options, $selected,'class="form-control"');
						?>
						
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>
				
					<div class='form-group'>
						<label><?php echo $this->arrest_complaint_details_label ?></label>
						
						<textarea class='form-control'  rows="10" name='arrest_complaint_details' ><?php echo $edit_query_result->arrest_complaint_details; ?></textarea>
						<span class='text-danger'><?php  echo form_error('arrest_complaint_details'); ?></span>
					</div>

				
				
				    <button type="submit" class="btn btn-info btn-fill center-block">Update</button>
				<?php echo form_close(); ?>

</div>
