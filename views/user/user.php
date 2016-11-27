<?php
$path = VIEW_DIR . DS . 'layout' . DS . 'header.php';
include $path
?>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <?php if (isset($userEdit)) { ?>
                    <!--                            --><?php //var_dump($user['User_Char']);?>
                    <div id="EditUser" class="well">
                        <?php include "views/user/editForm.php"?>
                    </div>

                <?php } ?>
                <a  class="btn btn-success addUserButtom" href="<?= Index ?>UserController/addUserAction"> add user </a>
       

                <table width="100%" class="text-center table table-striped table-bordered table-hover"
                       id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $user) { ?>

                        <tr class="gradeU">
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['password'] ?></td>
                            <td>
                                <a href="<?= Index ?>UserController/editUserAction&userId=<?= $user['id'] ?>"
                                   class="updaterow btn btn-primary btn-primary"><i
                                        class="glyphicon glyphicon-pencil"></i> Edit </a>
                                <a href="<?= Index ?>UserController/deleteUserAction&userId=<?= $user['id'] ?>" class="updaterow btn btn-primary btn-danger"><i
                                        class="glyphicon glyphicon-trash"></i> Delete </a>
                            </td>

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php
$path = VIEW_DIR . DS . 'layout' . DS . 'footer.php';
include $path
?>