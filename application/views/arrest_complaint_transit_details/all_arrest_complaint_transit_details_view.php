		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
 <a href="<?php echo site_url("add_new_arrest_complaint_transit_details"); ?>" class="btn btn-info btn-fill center-block">Add Transit details</a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
              
                <th><strong>ID</strong></th>
                <th><strong>Transit Category Name</strong></th>
                <th><strong>Transit Section</strong></th>
                <th><strong>Action</strong></th>
                
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                
                <td><?php echo $row->id;  ?></td>
                <td><?php echo $row->arrest_complaint_transit_details_category_name;  ?></td>
                <td><?php echo $row->arrest_complaint_transit_details_section;  ?></td>
                <td>
				<a href='<?php echo base_url() ?>edit_arrest_complaint_transit_details/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>
    			<a href='<?php echo base_url() ?>delete_arrest_complaint_transit_details/<?php echo $row->id;  ?>/<?php echo $this->uri->segment(1, 0) ?>' title='delete' class="del"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
				<a href='<?php echo base_url() ?>view_arrest_complaint_transit_details/<?php echo $row->id;  ?>' title='View'><i class="fa fa-eye"></i></a>
				</td>
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Transit Category Name</strong></th>
                <th><strong>Transit Section</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </tfoot>
    </table>
</div>
