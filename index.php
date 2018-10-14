<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php
                    $query = "SELECT * FROM posts";
                $select_all_post_query = mysqli_query($connection,$query);

                while ($row = mysqli_fetch_assoc($select_all_post_query)){
                    $postTitle = $row['postTitle'];
                    $postAuthor = $row['postAuthor'];
                    $postDate = $row['postDate'];
                    $postImage = $row['postImage'];
                    $postContent = $row['postContent'];



                    ?>


                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $postTitle;?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $postAuthor;?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $postDate;?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $postImage;?>" alt="">
                    <hr>
                    <p><?php echo $postContent;?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>



                <?php
                }


                ?>




            </div>

            <!-- Blog Sidebar Widgets Column -->


            <?php include "includes/sidebar.php" ?>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <?php include "includes/footer.php"; ?>


