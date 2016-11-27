<?php include "views/layout/header.php";?>
    <!-- /.row -->
    <div class="row" id="adduser" style="display: block;">
        <div class="col-lg-12">
            <div class="panel panel-default" >
                <div class="panel-body">
                    <div class="row">
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                            <form role="form" method="post" action="<?= Index ?>ArticleController/addArticleAction" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>title</label>
                                    <input name="title" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>text</label>
                                    <input name="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>image</label>
                                    <input type="file" name="image" class="form-control"  >
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
<?php include "views/layout/footer.php";?>