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
            <a href="<?php echo base_url('edit/category/'.$category_info_by_id->id)?>">Edit Category</a>
        </li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><strong>Edit Category</strong></h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url('update/category/'.$category_info_by_id->id);?>" method="post">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Category Name</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $category_info_by_id->category_name;?>" id="category_name" name="category_name" type="text"/>
                            </div>
                        </div>          
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="category_description" name="category_description" rows="3">
                                    <?php echo $category_info_by_id->category_description;?>
                                </textarea>
                            </div>
                        </div>
                                
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <select id="slect" name="publication_status">
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