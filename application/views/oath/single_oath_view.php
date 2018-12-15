<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo $title;  ?>
			</div>
			
			
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="table-responsive">
		   <table class="table">
			 
			  <thead>
				 <tr>
					<th>Column</th>
					<th>Value</th>
				 </tr>
			  </thead>
			  <tbody>
				 <tr>
					<td class='col-lg-3'><?php echo $this->oath_category_name_label ?></td>
					<td class='col-lg-9'><?php echo $query_result->oath_category_name;  ?></td>
				 </tr> 
				 <tr>
					<td class='col-lg-3'><?php echo $this->oath_title_label ?></td>
					<td class='col-lg-9'><?php echo $query_result->oath_title;  ?></td>
				 </tr> 
				 <tr>
					<td class='col-lg-3'><?php echo $this->oath_section_label ?></td>
					<td class='col-lg-9'><?php echo $query_result->oath_section;  ?></td>
				 </tr>
				 <tr>
					<td class='col-lg-3'><?php echo $this->oath_code_label ?></td>
					<td class='col-lg-9'><?php echo $query_result->oath_code;  ?></td>
				 </tr>
				 <tr>
					<td class='col-lg-3'><?php echo $this->oath_min_label ?></td>
					<td class='col-lg-9'><?php echo $query_result->min;  ?></td>
				 </tr>
				 <tr>
					<td class='col-lg-3'><?php echo $this->oath_max_label ?></td>
					<td class='col-lg-9'><?php echo $query_result->max;  ?></td>
				 </tr>
				 
				
		
			  </tbody>
		   </table>
		</div>  	
	</div>
</div>

	