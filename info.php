<?php

    /**$nome = "Evandro";
    $idade = 5;

    if(($idade >= 6) AND ($idade <= 12)){
        echo "infantil";
    }elseif(($idade >= 13 ) AND ($idade <= 18)){
        echo "adolescente";
    }elseif($idade > 18){
        echo "adulto";
    }else{
        echo "não tem idade para fazer natação";
    } 
    */
    

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    //print_r($categorias);
    

    $nome = 'Eduardo';
    $idade = 18;

    //var_dump($nome);
    //var_dump($idade);

    if(($idade >= 6) AND ($idade <= 12)){

        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] == "infantil"){
                echo "O nador ".$nome." compete na categoria ".$categorias[$i];
            }  
        }
        
    }elseif(($idade >= 13 ) AND ($idade <= 18)){
        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] == "adolescente"){
                echo "O nador ".$nome." compete na categoria ".$categorias[$i];
            }  
        }
    }elseif($idade > 18){
        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] == "adulto"){
                echo "O nador ".$nome." compete na categoria ".$categorias[$i];
            }  
        }
    }else{
        echo "não tem idade para fazer natação";
    } 
    
?>

