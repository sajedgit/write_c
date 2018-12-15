		
<div class="header">
  <h4 class="title"><?php //echo $this->category_name_label ?></h4>
 <a href="<?php echo site_url("add_new_summons_category"); ?>" class="btn btn-info btn-fill center-block">Add Summons Category</a>
 
  
 
</div>

<div class="content">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>SN</th>
                <th>Category Name</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
		<?php $counter=0; foreach ($query_result as $row): ?>
            <tr>
                <td><?php echo ++$counter;  ?></td>
                <td><?php echo $row->category_name;  ?></td>
                <td>
				<a href='<?php echo base_url() ?>edit_summons_category/<?php echo $row->id;  ?>' title='edit'><i class="fa fa-edit"></i></a>&nbsp;
    			<a href='<?php echo base_url() ?>delete_summons_category/<?php echo $row->id;  ?>/<?php echo $this->uri->segment(1, 0) ?>' title='delete' class="del" ><i class="fa fa-trash"></i></a>&nbsp;
				<a href='<?php echo base_url() ?>view_summons_category/<?php echo $row->id;  ?>' title='View'><i class="fa fa-eye"></i></a>
				</td>
            
            </tr>
        <?php endforeach;	?>
		 
        </tbody>
        <tfoot>
            <tr>
               <th>SN</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
