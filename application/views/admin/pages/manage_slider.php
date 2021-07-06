<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('manage/order') ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php echo base_url('manage/brand') ?>">Manage Brand</a></li>
    </ul>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><strong>Manage Brand</strong></h2>
            </div>

            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Slider Title</th>
                            <th>Slider Link</th>
                            <th>Slider Image</th>
                            <th>Publication Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($all_slider as $single_slider) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td class="center"><?php echo $single_slider->slider_title; ?></td>
                                <td class="center"><a target="_blank" href="<?php echo base_url($single_slider->slider_title);?>">Go To Link</a></td>
                                <td class="center"><img src="<?php echo base_url('uploads/'.$single_slider->slider_image);?>" style="width:300px;height:100px"/></td>
                                <td class="center">
                                    <?php if ($single_slider->publication_status == 1) { ?>
                                        <span class="label label-success">Published</span>
                                    <?php } else {
                                        ?>
                                        <span class="label label-danger" style="background:red">Unpublished</span>
                                    <?php }
                                    ?>
                                </td>
                                <td class="center">
                                    <?php if ($single_slider->publication_status == 0) { ?>
                                        <a class="btn btn-success" href="<?php echo base_url('published/slider/' . $single_slider->slider_id); ?>">
                                            <i class="halflings-icon white thumbs-up"></i>  
                                        </a>
                                    <?php } else {
                                        ?>
                                        <a class="btn btn-danger" href="<?php echo base_url('unpublished/slider/' . $single_slider->slider_id); ?>">
                                            <i class="halflings-icon white thumbs-down"></i>  
                                        </a>
                                    <?php }
                                    ?>

                                    <a class="btn btn-info" href="<?php echo base_url('edit/slider/' . $single_slider->slider_id); ?>">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo base_url('delete/slider/' . $single_slider->slider_id); ?>">
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