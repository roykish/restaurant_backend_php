<?php
include 'header.php';
include 'admin-nav.php';
?>


<div class=" admin_title "> 
    <h3 >List of Admins</h3>
</div>

<div class="container mb-3 mt-3">
    <div class="add-admin-wrapper">
        <div class="add_admin mb-3">
            <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#add-admin-modal">Add Admin</button>
        </div>


<!-- ..............This is the modal part starts from here for adding an admin in the database.............................. -->

    <div class="modal fade" id="add-admin-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add-admin-modal">Add Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="add-admin.php" method="POST">
                        <div class="modal-body">                        
                            
                            <div class="form-group">
                                <label for="add-admin-fullname">Full Name</label>
                                <input type="text" class="form-control" id="add-admin-fullname" name="fullname" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="add-admin-username">Username</label>
                                <input type="text" class="form-control" id="add-admin-username" name="username" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                            </div>
                            
                        </div>                   
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                                    <input type="submit" name="add-admin" value="Add" class="btn btn-outline-success"/>
                                </div>
                    </form>
            </div>
        </div>
    </div>

<!-- .....................The add admin modal part ends here............................ -->


        
                   


        <table class="table table-striped table-bordered admin_table_head">
            <thead >
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Kishor Roy</td>
                    <td>roykishor93</td>
                    <td><span class="badge badge-success">YES</span></td>
                    <td><input type="checkbox"></td>
                    
                    
                </tr>
            </tbody>

        </table>
        
</div>


<?php
include 'footer.php';
?>



