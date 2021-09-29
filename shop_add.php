<?php
    include "lib.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>a &amp; a dental creations</title>
</head>

<body>
    <div class="main_wrapper">
        <nav class="main_navi">
                <ul id="menu">
                <li><a href="shop_add.php">add/create</a></li>
                <li><a href="shop_list.php">show the list</a></li>
                <li><a href="shop_update.php">update</a></li>
                <li><a href="shop_delete.php">delete</a></li>
                </ul>
        </nav>
        <main class="main_content">
            <form action="shop_add_post.php" method="POST" enctype="multipart/form-data">
                <table style="width:100%; border:solid 1px black;">   
                    <tr>
                        <td>상품명</td>
                        <td><input type="text" name="name" size="30"></td>
                    </tr>
                    <tr>
                        <td>짧은설명</td>
                        <td><input type="text" name="comment" size="50"></td>
                    </tr>
                    <tr>
                        <td>금액</td>
                        <td><input type="text" name="price" size="10"></td>
                    </tr>
                    <tr>
                        <td>설명</td>
                        <td><textarea name="memo" cols="50" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>사진</td>
                        <td><input type="file" name="img"  accept=".jpg, .jpeg, .png" size="10"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="등록하기"></td>
                    </tr>
                </table>
            </form>
        </main>
    </div>
</body>

</html>