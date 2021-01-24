# Gerador-aleatorio-senhas-PHP
 Gerando senhas seguras com PHP 7.4.3
 
 <h3>Ao fazer a chamada da função será necessário informar a quantidade de caracteres da senha no primeiro parâmetro, e true ou false se deseja ou não utilizar os demais parâmetros na senha</h3>
 <blockquote>
      geraSenha($quantidadeCaracteres, $letrasMaiusculas, $letrasMinusculas, $numeros, $simbolos)
 </blockquote>

 <h3>Exemplo de senha com 10 caracteres, letras maiúsculas, minúsculas, números e símbolos</h3>
 <blockquote>
     geraSenha(10, true, true, true, true)
 </blockquote>

 <h3>Exemplo de senha com 8 caracteres, letras maiúsculas e números</h3>
 <blockquote>
     geraSenha(8, true, false, true, false)
 </blockquote>