<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Comment</th>
        <th>Email</th>
        <th>Status</th>
        <th>In Response to</th>
        <th>Date</th>
        <th>Approve</th>
        <th>Deny</th>
        <th>Delete</th>
    </tr>
    </thead>

    <tbody>

    <?php
    $query = "SELECT * FROM comments";
    $select_comments = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_assoc($select_comments)) {
        $comment_id = $row['comment_id'];
        $comment_post_id = $row['comment_post_id'];
        $coment_author = $row['coment_author'];
        $coment_content = $row['coment_content'];
        $coment_email = $row['coment_email'];
        $coment_status = $row['coment_status'];
        $coment_date = $row['coment_date'];

        echo "<tr>";
        echo "<td>{$comment_id}</td>";
        echo "<td>{$coment_author}</td>";
        echo "<td>{$coment_content}</td>";

        //selecting catagory which will be matched with post and printing dynamic catagory in the post

        /*$query = "SELECT * FROM catagories WHERE cat_id = $postCatagoryId";
        $select_catagories_post_update = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_catagories_post_update)) {
            $catId = $row['cat_id'];
            $catTitle = $row['cat_title'];


            echo "<td>{$catTitle}</td>";}*/




        echo "<td>{$coment_email}</td>";

        echo "<td>{$coment_status}</td>";
        echo "<td>In response to</td>";
        echo "<td>{$coment_date}</td>";

        echo "<td><a href='posts.php?delete={$comment_id}'>Approve</a></td>";
        echo "<td><a href='posts.php?delete={$comment_id}'>Deny</a></td>";
        echo "<td><a href='posts.php?delete={$comment_id}'>Delete</a></td>";



        echo "</tr>";

    }
    ?>


    </tbody>
</table>


<?php
delete_posts();

?>


