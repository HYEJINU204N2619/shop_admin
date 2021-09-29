<?php 
    $id = "shop";
    $pwd = "1234";

    function auth(){
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo "
            <script>
                alert('only admin can access this page');
                history.back(1);
            </script>
        ";
        exit;
    }

    if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
        auth();
    }else if ($id != isset($_SERVER['PHP_AUTH_USER']) || $pwd != isset($_SERVER['PHP_AUTH_PW'])) {
        auth();
    }else{
       
    }
?>