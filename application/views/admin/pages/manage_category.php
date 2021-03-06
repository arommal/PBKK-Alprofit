<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('manage/order') ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php echo base_url('manage/category') ?>">Manage Category</a></li>
    </ul>

    <div class="row-fluid">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><strong>Manage Category</strong></h2>
            </div>
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($all_categroy as $single_category) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $single_category->category_name ?></td>
                                <td><?php echo $single_category->category_description ?></td>
                                <td class="center">
                                    <?php if ($single_category->publication_status == 1) { ?>
                                        <span class="label label-success">Published</span>
                                    <?php } else {
                                        ?>
                                        <span class="label label-danger" style="background:red">Unpublished</span>
                                        <?php }
                                    ?>
                                </td>
                                <td class="center">
                                    <?php if ($single_category->publication_status == 0) { ?>
                                        <a class="btn btn-success" href="<?php echo base_url('published/category/' . $single_category->id); ?>">
                                            <i class="halflings-icon white thumbs-up"></i>  
                                        </a>
                                    <?php } else {
                                        ?>
                                        <a class="btn btn-danger" href="<?php echo base_url('unpublished/category/' . $single_category->id); ?>">
                                            <i class="halflings-icon white thumbs-down"></i>  
                                        </a>
                                        <?php }
                                    ?>

                                    <a class="btn btn-info" href="<?php echo base_url('edit/category/' . $single_category->id); ?>">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo base_url('delete/category/' . $single_category->id); ?>">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>            
            </div>
        </div><!--/span-->

    </div><!--/row-->



</div><!--/.fluid-container-->

<!-- end: Content -->