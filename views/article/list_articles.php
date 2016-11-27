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

                    <a  class="btn btn-success addUserButtom" href="<?= Index ?>ArticleController/addArticleAction"> add Article </a>

                    <table width="100%" class="text-center table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Pathe image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($result as $article) { ?>

                            <tr class="gradeU">
                                <td><?= $article['title'] ?></td>
                                <td><?= $article['text'] ?></td>
                                <td><img src="<?= $article['image'] ?>" /></td>
                                <td>
                                    <a href="<?= Index ?>ArticleController/editArticleAction&articleId=<?= $article['id'] ?>"
                                       class="updaterow btn btn-primary btn-primary"><i
                                            class="glyphicon glyphicon-pencil"></i> Edit </a>
                                    <a href="<?= Index ?>ArticleController/deleteArticleAction&articleId=<?= $article['id'] ?>" class="updaterow btn btn-primary btn-danger"><i
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