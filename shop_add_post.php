<?php
    $conn = mysqli_connect('localhost', 'user', 'user-password', 'database');
    $uploadfile= $_FILES['img']['name'];

    var_dump($uploadfile);
    var_dump($uploadfiledir);
    var_dump($uploadfiledir.basename($uploadfile));
    
    var_dump(move_uploaded_file($_FILES["img"]["name"], "shop/".$_FILES["img"]["name"]));
    if a file is selected
    if($uploadfile)
    {
        //upload in the dir called 'shop'
        move_uploaded_file($uploadfile, $uploadfiledir.basename($uploadfile));
        echo "성공적으로 이미지가 저장되었습니다.";

    }

    $sql = "
         INSERT INTO shop_data(name, comment, price, memo, img)
             VALUES('{$_POST['name']}', '{$_POST['comment']}', '{$_POST['price']}', '{$_POST['memo']}', '{$_FILES['img']['name']}')
     ";

    $result = mysqli_query($conn, $sql);

    if($result === false){
        echo "저장에 실패했습니다.";
        error_log(mysqli_error($conn));
    }
    else{
        echo "저장에 성공했습니다.";
        header('Location: shop_add.php');
    }
?>