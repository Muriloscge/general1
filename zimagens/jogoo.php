<DOCTYPE html>
<html>
<body>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="../framework../css../bootstrap.css">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

          
      </ul>
    </div>
  </div>
</nav>


<style>


td, th, tr{

border: 1px solid black

}

</style>
</head>


 <?php
$nomejogador = ""; 
    if (isset($_POST["nomejogador"]))
    $nomejogador = $_POST["nomejogador"];

    

$dado = 0; 
$dado1 = 0; 

$jogada1 = 0;
$jogada2 = 0;
$jogada3 = 0;
$jogada4 = 0;
$jogada5 = 0;
$jogada6 = 0;
$cont1 = 0;
$cont2 = 0;
$cont3 = 0;
$cont4 =0;
$cont5=0;
$cont6=0;

$jogada1c = 0;
$jogada2c = 0;
$jogada3c = 0;
$jogada4c = 0;
$jogada5c = 0;
$jogada6c = 0;
$cont1c = 0;
$cont2c = 0;
$cont3c = 0;
$cont4c =0;
$cont5c=0;
$cont6c=0;

$trincac = 0;
$trinca = 0;

$quadra = 0;
$quadrac = 0;

$fullhouse = 0;
$fullhousec= 0;

$general = 0;
$generalc = 0;

$sequenciabaixa = 0;
$sequenciabaixac = 0;

$sequenciaalta = 0;
$sequenciaaltac = 0;

$aleatorio = 0;
$aleatorioc = 0;

$soma = 0;
$somac = 0;
?>

        <form method= "post">
            Insira seu nome: <input type="text" name="nomejogador" value =" <?php echo $nomejogador?> "><br><br>
            
            <input type= "submit">
        </form>

<?php
Echo" $nomejogador: ";
$vetorjogador = array();


if(isset($_POST['nomejogador'])){
    $vetorJogador = array();
    
    for($i = 0; $i < 5; $i++){
        
        $vetorJogador[$i] = rand(01, 06);
        
}
foreach($vetorJogador as $dado){
    if($dado == 1){
        echo"<img src='dado1.jpg' width = 50px height = 50px>"; 
        $cont1++;
        
}

    if($cont1 > 1){
        $jogada1 = $cont1; 
    }
if($cont1 == 3){
        $trinca = 20;
    
    }
if($cont1 == 4){
    $quadra = 30;

    }
if($cont1 == 5){

$general = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa



if($dado == 2){
    echo"<img src='dado2.jpg' width = 50px heigth = 50px"; 
$cont2 ++;

}


if($cont2 > 1){
    $jogada2 = $cont2 *2;
}
if($cont2 == 3){
    $trinca = 20;

}
if($cont2 == 4){
$quadra = 30;

}
if($cont2 == 5){

$general = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

if($dado == 3){
    echo"<img src='dado3.jpg' width = 50px heigth = 50px";
$cont3 ++;

}


if($cont3 > 1){
    $jogada3 = $cont3 *3;
}
if($cont3 == 3){
    $trinca = 20;

}
if($cont3 == 4){
$quadra = 30;

}
if($cont3 == 5){

$general = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa


if($dado == 4){
    echo"<img src='dado4.jpg' width = 50px heigth = 50px";   
$cont4 ++;

}


if($cont4 > 1){
    $jogada4 = $cont4 *4;
}
if($cont4 == 3){
    $trinca = 20;

}
if($cont4 == 4){
$quadra = 30;

}
if($cont4 == 5){

$general = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa


if($dado == 5){
  

echo"<img src='dado5.jpg' width = 50px heigth = 50px";
$cont5 ++;
}


if($cont5 > 1){
    $jogada5 = $cont5 *5 ;
}

if($cont5 == 3){
    $trinca = 20;

}
if($cont5 == 4){
$quadra = 30;

}
if($cont5 == 5){

$general = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa



if($dado == 6){
    echo"<img src='dado6.jpg' width = 50px heigth = 50px";
$cont6 ++;

}


if($cont6 > 1){
    $jogada6 = $cont6 *6;
}
if($cont6 == 3){
    $trinca = 20;

}
if($cont6 == 4){
$quadra = 30;

}
if($cont6 == 5){

$general = 50;

}
if( $vetorjogador == 2 && $vetorjogador == 3 && $vetorjogador == 4 && $vetorjogador == 5 && $vetorjogador == 6){

    $sequenciaalta = 30;

}

if( $vetorjogador == 1 && $vetorjogador == 2 && $vetorjogador == 3 && $vetorjogador == 4 && $vetorjogador == 5){

    $sequenciabaixa = 40;
}
$soma = $jogada1 + $jogada2 + $jogada3 + $jogada4 + $jogada5 + $jogada6 +
$trinca + $quadra + $sequenciaalta + $sequenciabaixa + $fullhouse + $general + $aleatorio ;



}
}

echo" <br><br>Computador:";
?>

<?php

$vetorcomputador = array();

if(isset($_POST['computador'])){
    $vetorcomputador = array();
    for($i = 0; $i < 5; $i++){
        $vetorcomputador[$i] = rand(01, 06);
        
        

foreach($vetorcomputador as $dado1){
    if($dado1 == 1){
        echo"<img src='dado1.jpg' width = 50px height = 50px>";
        $cont1c++;
         
}

    if($cont1c > 1){
        $jogada1c = $cont1c; 
    }
    if($cont1c == 3){
        $trincac = 20;
    
    }
if($cont1c == 4){
    $quadrac = 30;

    }
if($cont1c == 5){

$generalc = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

if($dado1 == 2){
$cont2c++;
echo"<img src='dado2.jpg' width = 50px heigth = 50px";
}


if($cont2c > 1){
    $jogada2c = $cont2c *2;
}
if($cont2c == 3){
    $trincac = 20;

}
if($cont2c == 4){
$quadrac = 30;

}
if($cont2c == 5){

$generalc = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa


if($dado1 == 3){
$cont3c++;
echo"<img src='dado3.jpg' width = 50px heigth = 50px";
}


if($cont3c > 1){
    $jogada3c = $cont3c *3;
}
if($cont3c == 3){
    $trincac = 20;

}
if($cont3c == 4){
$quadrac = 30;

}
if($cont3c == 5){

$generalc = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

if($dado1 == 4){
$cont4c++;
echo"<img src='dado4.jpg' width = 50px heigth = 50px";
}


if($cont4c > 1){
    $jogada4c = $cont4c *4;
}
if($cont4c == 3){
    $trincac = 20;

}
if($cont4c == 4){
$quadrac = 30;

}
if($cont4c == 5){

$generalc = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

if($dado1 == 5){
$cont5c++;
echo"<img src='dado5.jpg' width = 50px heigth = 50px";
}


if($cont5c > 1){
    $jogada5c = $cont5c *5;
}
if($cont5c == 3){
    $trincac = 20;

}
if($cont5c == 4){
$quadrac = 30;

}
if($cont5c == 5){

$generalc = 50;

}

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

if($dado1 == 6){
$cont6c++;
echo"<img src='dado6.jpg' width = 50px heigth = 50px";
}


if($cont6c > 1){
    $jogada6c = $cont6c *6;

}
if($cont6c == 3){
    $trincac = 20;

}
if($cont6c == 4){
$quadrac = 30;

}
if($cont6c == 5){

$generalc = 50;

}


 
if( $vetorc[$i][1] == 1 && $vetorc[$i][2] == 1 && $vetorc[$i][3] == 1 && $vetorc[$i][4] == 1 && $vetorc[$i][5] == 1){

    $sequenciaaltac = 30;
} 


if( $vetorc[$i][1] == 1 && $vetorc[$i][2] == 1 && $vetorc[$i][3] == 1 && $vetorc[$i][4] == 1 && $vetorc[$i][0] == 1){
    
        $sequenciabaixac = 40;
} 



$somac = $jogada1c + $jogada2c + $jogada3c + $jogada4c + $jogada5c + $jogada6c +
$trincac + $quadrac + $sequenciaaltac + $sequenciabaixac + $fullhousec + $generalc + $aleatorioc ;
$aleatorioc = $vetorc[1] + $vetorc[2] + $vetorc[3] + $vetorc[4] + $vetorc[5];

}
}
}


?>



<?php


echo
"<table div class=table >

<tr>

<th> </th>
<th div class=th> $nomejogador </th> 
<th div class=th> computador   </th>

</tr>

<tr>

<td> Jogada 1 </td>
<td> $jogada1 </td>
<td> $jogada1c </td>

</tr>
<tr>

<td> Jogada 2 </td>
<td> $jogada2 </td>
<td> $jogada2c  </td>

</tr>
<tr>

<td> Jogada 3 </td>
<td> $jogada3 </td>
<td>  $jogada3c </td>

</tr>
<tr>

<td> Jogada 4 </td>
<td> $jogada4 </td>
<td> $jogada4c  </td>

</tr>
<tr>

<td> Jogada 5 </td>
<td> $jogada5  </td>
<td> $jogada5c  </td>

</tr>
<tr>

<td> Jogada 6 </td>
<td> $jogada6 </td>
<td> $jogada6c  </td>

</tr>
<tr>

<td> Trinca </td>
<td> $trinca  </td>
<td> $trincac  </td>

</tr>
<tr>

<td> Quadra </td>
<td> $quadra  </td>
<td> $quadrac </td>

</tr>
<tr>

<td> Full house </td>
<td> $fullhouse  </td>
<td> $fullhousec  </td>

</tr>
<tr>

<td> Sequência alta </td>
<td> $sequenciaalta  </td>
<td> $sequenciaaltac  </td>

</tr>
<tr>

<td> Sequência baixa </td>
<td> $sequenciabaixa  </td>
<td> $sequenciabaixac  </td>

</tr>
<tr>

<td> General </td>
<td> $general  </td>
<td> $generalc  </td>

</tr>
<tr>

<td> Aleatório </td>
<td> $aleatorio  </td>
<td> $aleatorioc </td>

</tr>

</table>
";

echo"Soma jogador: $soma <br><br> Soma computador: $somac <br><br>";

if($soma > $somac){
    echo"Vencedor: $nomejogador";
    
    }
    else if($soma < $somac){
        echo"Vencedor: Computador";
    }
    else{
        echo"Empate";
    }

?>


</body>
</html>