<?php require_once("includes/admin_header.php"); ?>
<div id="wrapper">
     <?php require_once("includes/admin_navigation.php"); ?>   
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <div class="col-xs-6">
                       <?php insertCategories(); ?>
                        <form action="" method="post">
                            <div class="form-group">
                               <label for="cat_title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                        <?php 
                            //UPDATE AND INCLUDE QUERY
                            if(isset($_GET['edit'])) {
                                $cat_id = $_GET['edit'];
                                require_once("includes/update_categories.php");
                            }
                        ?>
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                    <th>DELETE</th>
                                    <th>EDIT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php findAllCategories(); ?>
                                <?php deleteCategories(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php require_once("includes/admin_footer.php"); ?>   