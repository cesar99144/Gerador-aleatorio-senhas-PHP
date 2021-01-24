<?php

function geraSenha($quantidadeCaracteres, $letrasMaiusculas, $letrasMinusculas, $numeros, $simbolos){

    $maiusculas = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; 
    $minusculas = "abcdefghijklmnopqrstuvyxwz"; 
    $numerosSequencia = "0123456789";
    $CaractereSimbolos = "!@#$%*()_+="; 

    if ($quantidadeCaracteres == 0 ){

        return null;
    }
 
    if (!$letrasMaiusculas && !$numeros && !$simbolos){

        return null;
    }


    //Verifica quais parâmetros foram solicitados para compor a senha
    if ($letrasMaiusculas){
          
        $senha .= str_shuffle($maiusculas);
    }

    if ($letrasMinusculas){
        
        $senha .= str_shuffle($minusculas);
    }

    if ($numeros){
        
        $senha .= str_shuffle($numerosSequencia);
    }

    if ($simbolos){
        
        $senha .= str_shuffle($CaractereSimbolos);
    }

    return substr(str_shuffle($senha),0,$quantidadeCaracteres);
}

  echo "Exemplo de senha com maiúsculas, minúsculas, números e símbolos: <br><br>".geraSenha(10, true, true, true, true);

  echo "<br><br>Exemplo de senha com letras maiúsculas e números: <br><br>".geraSenha(10, true, false, true, false);

  echo "<br><br>Exemplo de senha com letras minúsculas e números: <br><br>".geraSenha(10, false, true, true, false);

?>