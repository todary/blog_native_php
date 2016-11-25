<?php include "views/layout/header.php";?>
<!-- /.row -->
<div class="row" id="adduser" style="display: block;">
    <div class="col-lg-12">
        <div class="panel panel-default" >
            <div class="panel-body">
                <div class="row">
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
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
                                <input name="User_Mail" class="form-control"  >
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