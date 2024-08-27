<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
</head>
<body>
    <?php
        include_once('connection.php');
        if(isset($_POST["submit1"])){
            $target_dir="upload/";
            $target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
                $sql="insert into tblupload (image) Values('$target_file')";
                mysqli_query($con,$sql);
                $returndata=mysqli_insert_id($con);
                if($returndata){
                    echo "The file".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.";
                }
            }else{
                echo "Sorry, there was an error uploading file.";
            }
        }
    ?>

    <h1>Image Upload</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        Select image upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit1">
    </form>
    <hr>
    <table border="2" width="100%">
        <tr style="background-color:#3c8dbc;color:white;">
            <th class="text-center">SI</th>
            <th class="text-center">Image</th>
            <th class="text-center">Path</th>
        </tr>
        <?php
            $sql="select*from tblupload";
            $res=mysqli_query($con,$sql);
            $i=1;
            while($row=mysqli_fetch_assoc($res)){
                $dfdsfasf=json_encode($row);?>
                <tr>
                    <td class="text-center"><?php echo $i++; ?></td>
                    <td><img src="<?php echo $row['image']; ?>" height=100 width=100></td>
                    <td><?php echo $row['image']; ?></td>
                </tr>
          <?php  }
        ?>
    </table>
</body>
</html>