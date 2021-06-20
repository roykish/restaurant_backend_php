<?php
include 'header.php';
include 'admin-nav.php';
?>


<div class=" admin_title "> 
    <h3 >List of Admins</h3>
</div>



<div class="container mb-3 mt-3">
        <div class="add_admin mb-3">
            <button type="button" class="btn btn-warning">Add category</button>
        </div>


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
