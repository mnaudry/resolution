<?php

function locateUniverseFormula($search,$dir){
    $files = scandir($dir);
   // var_dump($files);

    if($files === false ){
        echo "Exception";
        throw new Exception("Not a directory");
    }

    $files = array_diff($files,[".","..",".DS_Store"]);

    foreach($files as $file) {
       $file_name = $dir.DIRECTORY_SEPARATOR.$file ;
        if(is_file($file_name )){
            //printf("%s %s\n",$file, $search);
            if($file ==  $search) {
                //printf("%s %s\n",$file, $search);
                return $file_name;
                
            }

        }
        else {
            if(is_dir($file_name)) {
               // printf("%s\n",$file_name);
                //return locateUniverseFormula($search,$file_name);

                $value =  locateUniverseFormula($search,$file_name);
               // printf("%s\n",$value);
                if(!is_null($value)){
                   return $value;
                }
            }
        }
       // printf("%s\n",$file);
        //return "toto";

       /* $file_name = $dir.DIRECTORY_SEPARATOR.$file ;
        if(is_dir($file_name)) {
            // printf("%s\n",$file_name);
             $value =  locateUniverseFormula($search,$file_name);
             printf("%s\n",$value);
             if(!is_null($value)){
                return $value;
             }
         }*/
    }

    return null;

}

var_dump(locateUniverseFormula("tuto27.html","/Users/audrymakampila/dev"));
//var_dump(locateUniverseFormula("tuto27.html","/Users/audrymakampila/dev/TUTO"));
//var_dump(locateUniverseFormula("pinterest_2.jpg","/Users/audrymakampila/Desktop"));
