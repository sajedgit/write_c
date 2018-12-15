




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
			
				$attributes = array('method' => 'POST', 'id' => 'form_summons_category');
				echo form_open("add_new_arrest_complaint_transit_details", $attributes);
				?>
					<?php if (isset($message)) : ?>
						<h1 class="text-center text-success">Data Inserted successfully</h1>	<br/>
					<?php endif; ?>

					<div class='form-group'>
						<label><?php echo $this->arrest_complaint_transit_details_category_name_label ?></label>
					
						<?php
						$options =$arrest_complaint_transit_details_category;
						$selected = '';
						echo form_dropdown('arrest_complaint_transit_details_category_name', $options, $selected,'class="form-control"');
						?>
						
						<span class='text-danger'><?php  echo form_error('category_name'); ?></span>
					</div>
					
				 
					
					
					<div class='form-group'>
						<label><?php echo $this->arrest_complaint_transit_details_section_label ?></label>
						
						
						<textarea rows="5" class='form-control'   name='arrest_complaint_transit_details_section' ></textarea>
						
						<span class='text-danger'><?php  echo form_error('arrest_complaint_transit_details_section'); ?></span>
					</div>
					
					 
					
					

				
				
				
				 <button type="submit" class="btn btn-info btn-fill center-block">Submit</button>
				<?php echo form_close(); ?>

			

</div>
