
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
<div class="content card col-xs-10  col-xs-offset-1 " style="margin-top:50px;">
	<?php 
			
				$attributes = array('method' => 'POST', 'id' => 'form_radio_codes');
				echo form_open("edit_radio_codes/$edit_query_result->id", $attributes);
				?>
					
					<h1 class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></h1>

					
					
					
				
					<div class='form-group'>
						<label><?php echo $this->radio_codes_label ?></label>
						
						<textarea class='form-control'  rows="25" name='radio_codes_details' ><?php echo $edit_query_result->radio_codes_details; ?></textarea>
						<span class='text-danger'><?php  echo form_error('radio_codes_details'); ?></span>
					</div>

				
				
				    <button type="submit" class="btn btn-info btn-fill center-block">Update</button>
				<?php echo form_close(); ?>

</div>
