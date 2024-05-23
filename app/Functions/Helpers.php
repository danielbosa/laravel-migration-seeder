<?php

namespace App\Functions;

class Helpers{

    public static function getCsvData($path){
        
        //leggo file
        $file_stream = fopen($path, 'r');

        //controllo che lettura avvenga
        if($file_stream === false){
            exit('Cannot open file');
        }

        //creo array vuoto dove salvare i dati
        $data=[];

        //ciclo su csv e salvo i record in array $data
        while($row = fgetcsv($file_stream)){
            $data[] = $row;
        };
        
        //chiudo file
        fclose($file_stream);
    
        return $data;
    }

}
