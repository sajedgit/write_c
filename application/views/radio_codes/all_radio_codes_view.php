		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
<a href="<?php echo base_url() ?>edit_radio_codes/1" class="btn btn-info btn-fill center-block">Edit Radio Codes</a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
              
                
                <th><strong>Radio Codes Details</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                
		
				 
                <td><?php echo $row->radio_codes_details;  ?></td>
				
	
			<td>
			<a href='<?php echo base_url() ?>edit_radio_codes/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>
			</td>
		 
                
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
              
                <th><strong>Radio Codes Details</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </tfoot>
    </table>
</div>
