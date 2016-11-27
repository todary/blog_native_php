<?php include "views/layout/header.php";?>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default" >
            <div class="panel-heading">
                Edit article <?=$articlModel->title;?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <form role="form" method="post" action="<?= Index ?>ArticleController/editArticleAction&articleId=<?= $articlModel->id?>">
                            <div class="form-group">
                                <label>title</label>
                                <input name="title" class="form-control" value="<?=$articlModel->title;?>">
                            </div>
                            <div class="form-group">
                                <label>text</label>
                                <input name="text" class="form-control"  value="<?=$articlModel->text;?>">
                            </div>
                            <div class="form-group">
                                <label>image</label>
                                <input  type="file" name="image" class="form-control"  value="<?=$articlModel->image;?>">
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
