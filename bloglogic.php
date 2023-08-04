<?php
    $blogconn = mysqli_connect("localhost", "root", "", "blog");

    if(mysqli_connect_error())
    {
        echo "<script>alert('Cannot connect to database') </script>";
        
        exit();
    }

    $sql = "SELECT * FROM blogdata";
    $query = mysqli_query($blogconn, $sql);

    if(isset($_REQUEST['newpost']))
    {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $createdby = $_REQUEST['createdby'];
        $query = "INSERT INTO blogdata(title, content, createdby) VALUES ('$title', '$content', '$createdby')";
        $postaddresult = mysqli_query($blogconn, $query);
        if($postaddresult)
        {
            echo "<script>
            alert('Post has been added successfully');
            window.location.href='blogindex.php';
            </script>";
        }
        
    }

    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blogdata WHERE id = $id";
        $query = mysqli_query($blogconn, $sql);
    }

    if(isset($_REQUEST['update']))
    {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $id = $_REQUEST['id'];
        $createdby = $_REQUEST['createdby'];
        $sql = "UPDATE blogdata SET title = '$title', content = '$content', createdby = '$createdby' WHERE id = $id";
        $r = mysqli_query($blogconn, $sql);
        if($r)
        {
            echo "<script>
            alert('Post has been updated successfully');
            window.location.href='blogindex.php';
            </script>";
        }
    }

    if(isset($_REQUEST['delete']))
    {
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM blogdata WHERE id = $id";
        $query = mysqli_query($blogconn, $sql);
        if($query)
        {
            echo "<script>
            alert('Post has been deleted successfully');
            window.location.href='blogindex.php';
            </script>";
        }
    }
?>