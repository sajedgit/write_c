		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
 <a href="<?php echo site_url("add_new_oath"); ?>" class="btn btn-info btn-fill center-block">Add Oath details</a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
             <tr>
              
                <th><strong>ID</strong></th>
                <th><strong>Category Name</strong></th>
                <th><strong>Oath Title</strong></th>
                <th><strong>Oath Section</strong></th>
                <th><strong>Oath Code</strong></th>
                <th><strong>Min</strong></th>
                <th><strong>Max</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                
                <td><?php echo $row->id;  ?></td>
                <td><?php echo $row->oath_category_name;  ?></td>
				<td><?php echo $row->oath_title  ;  ?></td>
                <td><?php echo $row->oath_section;  ?></td>
                <td><?php echo $row->oath_code;  ?></td>
                <td><?php echo $row->min;  ?></td>
                <td><?php echo $row->max;  ?></td>
                <td>
				<a href='<?php echo base_url() ?>edit_oath/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>
    			<a href='<?php echo base_url() ?>delete_oath/<?php echo $row->id;  ?>/<?php echo $this->uri->segment(1, 0) ?>' title='delete' class="del" ><i class="fa fa-trash"></i></a>
				<a href='<?php echo base_url() ?>view_oath/<?php echo $row->id;  ?>' title='View'><i class="fa fa-eye"></i></a>
				</td>
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Category Name</strong></th>
                <th><strong>Oath Title</strong></th>
                <th><strong>Oath Section</strong></th>
                <th><strong>Oath Code</strong></th>
                <th><strong>Min</strong></th>
                <th><strong>Max</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </tfoot>
    </table>
</div>
