		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
 <a href="<?php echo site_url("add_new_arrest_complaint_details"); ?>" class="btn btn-info btn-fill center-block">Add Arrest Complaint details</a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
              
                <th><strong>Category Name</strong></th>
                <th><strong>Arrest Complaint Details</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                
				 
				<?php if($row->category_name=="transit" || $row->category_name=="TRANSIT" || $row->category_name=="Transit"): ?>
					<td><a href="<?php echo base_url() ?>arrest_complaint_transit_details"><?php echo $row->category_name;  ?></a></td>
				<?php else: ?>
				    <td><?php echo $row->category_name;  ?></td>
				<?php endif; ?>
				 
                <td><?php echo $row->arrest_complaint_details;  ?></td>
				
				
			 
				
			 
			
		<?php if($row->category_name=="transit" || $row->category_name=="TRANSIT" || $row->category_name=="Transit"): ?>
			<td>
			<a href='<?php echo base_url() ?>arrest_complaint_transit_details' title='edit'><i class="fa fa-edit"></i></a>
			<a href='<?php echo base_url() ?>arrest_complaint_transit_details' title='View'><i class="fa fa-eye"></i></a>
			</td>
		<?php else: ?>
			<td>
			<a href='<?php echo base_url() ?>edit_arrest_complaint_details/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>
			<a href='<?php echo base_url() ?>delete_arrest_complaint_details/<?php echo $row->id;  ?>/<?php echo $this->uri->segment(1, 0) ?>' title='delete' class="del"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
			<a href='<?php echo base_url() ?>view_arrest_complaint_details/<?php echo $row->id;  ?>' title='View'><i class="fa fa-eye"></i></a>
			</td>
		<?php endif; ?>
                
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
              
                <th><strong>Category Name</strong></th> 
                <th><strong>Arrest Complaint Details</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </tfoot>
    </table>
</div>
