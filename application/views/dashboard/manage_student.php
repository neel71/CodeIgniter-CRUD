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
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php $query = $this->db->get('student'); ?>

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Roll</th>
                        <th>Student Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($query->result() as $row) {
                        
                    ?>

                    <tr>
                        <td class="center"> <?php echo $row->id; ?> </td>
                        <td class="center"> <?php echo $row->name; ?> </td>
                        <td class="center"><?php echo $row->roll; ?> </td>
                        <td class="center"><?php echo $row->phone; ?></td>
                        <td class="center">

                            <a class="btn btn-info" href=" <?php echo base_url()?>student-edit/<?php echo $row->id;?>">
                                <i class="halflings-icon white edit"></i>                                            
                            </a>
                            <a class="btn btn-danger" href=" <?php echo base_url()?>student-delete/<?php echo $row->id;?>">
                                <i class="halflings-icon white trash"></i> 

                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->