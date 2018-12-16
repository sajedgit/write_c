


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
				echo form_open("add_new_radio_codes", $attributes);
				?>
					<?php if (isset($message)) : ?>
						<h1 class="text-center text-success">Data Inserted successfully</h1>	<br/>
					<?php endif; ?>

				
				
					<div class='form-group'>
						<label><?php echo $this->radio_codes_label ?></label>
						 						
						<textarea class='form-control'  rows="5" name='radio_codes_details' ></textarea>
						
						<span class='text-danger'><?php  echo form_error('radio_codes_details'); ?></span>
					</div>

				
				
				
				 <button type="submit" class="btn btn-info btn-fill center-block">Subsmit</button>
				<?php echo form_close(); ?>

			

</div>
