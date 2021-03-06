<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('manage/order')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('edit/slider/'.$slider_info_by_id->slider_id)?>">Edit Slider</a>
        </li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><strong>Edit Slider</strong></h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url('update/slider/'.$slider_info_by_id->slider_id);?>" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Slider Title</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $slider_info_by_id->slider_title;?>" name="slider_title" type="text"/>
                            </div>
                        </div> 
                        
                         <div class="control-group">
                            <label class="control-label" for="fileInput">Slider Image</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="slider_image" type="file"/>
                                <input class="span6 typeahead" value="<?php echo $slider_info_by_id->slider_image;?>" name="slider_delete_image" type="hidden"/>
                            </div>
                        </div>
                        
                        
                         <div class="control-group">
                            <label class="control-label" for="fileInput">Slider Image</label>
                            <div class="controls">
                                <img style="width:500px;height:200px" src="<?php echo base_url('uploads/'.$slider_info_by_id->slider_image);?>"/>
                            </div>
                        </div>
                        
                         <div class="control-group">
                            <label class="control-label" for="fileInput">Slider Link</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $slider_info_by_id->slider_link;?>" name="slider_link" type="url"/>
                            </div>
                        </div>
                        
                                
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <select name="publication_status">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" id="save_category" class="btn btn-primary">Save changes</button>
                            <!-- <button type="reset" class="btn">Cancel</button> -->
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

    
    
</div><!--/.fluid-container-->

<!-- end: Content -->