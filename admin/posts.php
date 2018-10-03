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
                    <?php 
                        if(isset($_GET['source'])) {
                            $source = $_GET['source'];
                        } else {
                            $source = '';
                        }
                        switch($source) {
                            case 'add_post';
                                require_once("includes/add_posts.php"); 
                                break;
                            case 'edit_post';
                                require_once("includes/edit_post.php"); 
                                break;
                            default:
                                require_once("includes/view_all_posts.php"); 
                                 break;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
 <?php require_once("includes/admin_footer.php"); ?>   