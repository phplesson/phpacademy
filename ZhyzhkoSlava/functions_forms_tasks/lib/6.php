 <?php

 return [
 'text' => 'Function show all files in dir with given extention.',
 'paramCount' => '1',
 'func' => function($myFile){
        $targetDir = "gallery/";
        $saveName = $targetDir . basename($_FILES["myFile"]["name"]);
        
        if(isset($_POST["action"]) && $_POST['action'] == 'sendFile') {
            //check error
            if($_FILES['myFile']['error'] !== UPLOAD_ERR_OK) {
                //error exists
                echo "<p>file was uploaded with errors. Error: {$_FILES['myFile']['error']}</p>";
            } else {
                //ok
                echo "<p>file {$_FILES['myFile']['name']} with size {$_FILES['myFile']['size']} was received";
                if(file_exists($saveName)) {
                    echo "<p>a file with the same name existed and it was overwritten by a new one</p>";
                }
                $moveResult = move_uploaded_file($_FILES['myFile']['tmp_name'], $saveName);
                
            }
        }
    },
 'paramGenerator' => function() {
     },
 'view' => 'view/multfiledownload.php',
];