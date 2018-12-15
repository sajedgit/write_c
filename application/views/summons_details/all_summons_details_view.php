		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
 <a href="<?php echo site_url("add_new_summons_details"); ?>" class="btn btn-info btn-fill center-block">Add Summons details</a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
              
                <th><strong>Category Name</strong></th>
                <th><strong>Summons Title</strong></th>
                <th><strong>Summons Section</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                
				<?php if($row->category_name=="OATH" || $row->category_name=="Oath" || $row->category_name=="oath"): ?>
					<td><a href="<?php echo base_url() ?>oath"><?php echo $row->category_name;  ?></a></td>
				<?php else: ?>
				    <td><?php echo $row->category_name;  ?></td>
				<?php endif; ?>
				
				
				<td><?php echo $row->summons_title ;  ?></td>
                <td><?php echo $row->summons_section;  ?></td>
				
				
				<?php if($row->category_name=="OATH" || $row->category_name=="Oath" || $row->category_name=="oath"): ?>
				 <td>
					<a href='<?php echo base_url() ?>oath' title='edit'><i class="fa fa-edit"></i></a>
					<a href='<?php echo base_url() ?>oath' title='View'><i class="fa fa-eye"></i></a>
				 </td>
				<?php else: ?>
					<td>
					<a href='<?php echo base_url() ?>edit_summons_details/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>
					<a href='<?php echo base_url() ?>delete_summons_details/<?php echo $row->id;  ?>/<?php echo $this->uri->segment(1, 0) ?>' title='delete' class="del" ><i class="fa fa-trash"></i></a>
					<a href='<?php echo base_url() ?>view_summons_details/<?php echo $row->id;  ?>' title='View'><i class="fa fa-eye"></i></a>
					</td>
				<?php endif; ?>
				
                
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
              
                <th><strong>Category Name</strong></th>
                <th><strong>Summons Title</strong></th>
                <th><strong>Summons Section</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </tfoot>
    </table>
</div>
