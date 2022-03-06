<?php
function filterFiles($dirName=array(),$skipFilesExtenion=array(),$recursiveCheck=false){
    ini_set('max_execution_time', 0); // 0 = Unlimited
    // ini_set('xdebug.max_nesting_level', 300);
    $moveFileNames = array();
    foreach ($dirName as $source_path) {
        if(is_file($source_path)){
            $fileInfo = pathinfo($source_path);
            if(empty($fileInfo['extension'])) continue;
            $destinationPath = $fileInfo['dirname'].'/image-Type-'.$fileInfo['extension'];
            if(!empty($skipFilesExtenion) && in_array($fileInfo['extension'],$skipFilesExtenion)) continue;
            if(!is_dir($destinationPath) && !is_file($destinationPath)){
                mkdir($destinationPath,0777,true);
            }
            if(rename($source_path,$destinationPath."/".$fileInfo['basename'])){
                $moveFileNames[] = $destinationPath."/".$fileInfo['basename'];
                echo "File move $source_path <br/>";
            }
        }else{
            if($recursiveCheck){
                filterFiles(glob($source_path."*"),array(),true);
            }
        }
    }
    return $moveFileNames;      
}
$dir = "M:/Mayank singh/";
filterFiles(glob($dir."*"));
