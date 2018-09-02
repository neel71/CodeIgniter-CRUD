<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        
        <?php
        $message = $this->session->userdata('success');
        if($message){?>
        <div class="alert alert-success">
            <?php echo  $message;?>
        </div>
        
        <?php 
        }
        $this->session->unset_userdata('success');
        ?>
        
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>student/add" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Name </label>
                        <div class="controls">
                            <input type="text" name="name" class="span6 typeahead" id="typeahead" required> 
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Roll </label>
                        <div class="controls">
                            <input type="text" name="roll" class="span6 typeahead" id="typeahead" required> 
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Phone </label>
                        <div class="controls">
                            <input type="text" name="phone" class="span6 typeahead" id="typeahead" required> 
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div>
