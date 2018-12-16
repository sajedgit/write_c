		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
<a href="<?php echo base_url() ?>edit_question_answer/1" class="btn btn-info btn-fill center-block">Edit <?php echo $this->question_answer_label ?></a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
              
                
                <th><strong><?php echo $this->question_answer_label ?> Details</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                
		
				 
                <td><?php echo $row->question_answer_details;  ?></td>
				
	
			<td>
			<a href='<?php echo base_url() ?>edit_question_answer/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>
			</td>
		 
                
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
              
                <th><strong><?php echo $this->question_answer_label ?> Details</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </tfoot>
    </table>
</div>
