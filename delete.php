<?php
require_once('./signupConfig.php');

$record=new signupConfig();
if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req'] =='delete'){
        $record->setId($_GET['id']);
        $record->Delete();

        echo '<script>window.alert("data deleted successfuly")</script>';
    }
}


?>