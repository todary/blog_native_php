<?php include "views/layout/header.php";?>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default" >
            <div class="panel-heading">
                Edit User <?=$userEdit->User_Char;?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <form role="form" method="post" action="<?= Index ?>UserController/editUsersAction&userId=<?= $userEdit->UserID?>">
                            <div class="form-group">
                                <label>User Char</label>
                                <input name="User_Char" class="form-control" value="<?=$userEdit->User_Char;?>">
                            </div>
                            <div class="form-group">
                                <label>User Mail</label>
                                <input name="User_Mail" class="form-control"  value="<?=$userEdit->User_Mail;?>">
                            </div>

                            <button type="submit" class="btn btn-success"> Submit </button>
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
<?php include "views/layout/footer.php";?>
