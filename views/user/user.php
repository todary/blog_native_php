<?php include "views/layout/header.php";?>
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
                <div class="row" id="adduser" style="display: none;">
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-body">
                                <div class="row">
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="<?= Index ?>UserController/adduserAction">
                                            <div class="form-group">
                                                <label>User Char</label>
                                                <input name="User_Char" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input name="User_Name" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="User_Pass" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>User Mail</label>
                                                <input name="User_Mail" type="email" autofocus=""class="form-control"  >
                                            </div>

                                            <button type="submit" class="btn btn-success"> Submit </button>
                                            <!--                                                    <a href="--><?//= Index ?><!--UserController/deleteUsersAction&userId?>" class="btn btn-success"> submit </a>-->
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <table width="100%" class="text-center table table-striped table-bordered table-hover"
                       id="dataTables-example">
                    <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($reslut as $user) { ?>

                        <tr class="gradeU">
                            <td><?= $user['User_Name'] ?></td>
                            <td><?= $user['User_Char'] ?></td>
                            <td>
                                <a href="<?= Index ?>UserController/editUsersAction&userId=<?= $user['UserID'] ?>"
                                   class="updaterow btn btn-primary btn-primary"><i
                                        class="glyphicon glyphicon-pencil"></i> Edit </a>
                                <a href="<?= Index ?>UserController/deleteUsersAction&userId=<?= $user['UserID'] ?>" class="updaterow btn btn-primary btn-danger"><i
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

<?php include "views/layout/footer.php";?>