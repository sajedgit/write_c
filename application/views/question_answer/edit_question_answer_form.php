
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
			
				$attributes = array('method' => 'POST', 'id' => 'form_question_answer');
				echo form_open("edit_question_answer/$edit_query_result->id", $attributes);
				?>
					
					<h1 class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></h1>

					
					
					
				
					<div class='form-group'>
						<label><?php echo $this->question_answer_label ?></label>
						
						<textarea class='form-control'  rows="25" name='question_answer_details' ><?php echo $edit_query_result->question_answer_details; ?></textarea>
						<span class='text-danger'><?php  echo form_error('question_answer_details'); ?></span>
					</div>

				
				
				    <button type="submit" class="btn btn-info btn-fill center-block">Update</button>
				<?php echo form_close(); ?>

</div>
