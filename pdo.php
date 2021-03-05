<?php
$dsn = 'mysql:dbname=colyseum;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
"exo1";
$reponse=$dbh -> query('SELECT * FROM clients ');
while ($donnees=$reponse->fetch()){
    
    echo "Prénom:"." ".($donnees['firstName'])." "."Nom: "." ".$donnees['lastName'];
    echo"<br>";
}
echo"<br>";
?>
<?php
"exo2";
echo"<br>";
$reponses=$dbh -> query('SELECT * FROM showTypes ');
foreach ($reponses as $showtype){
           
    echo  $showtype['type'];

    echo"<br>";
}
echo"<br>";

?>



<?php
"exo3";
$repo=$dbh -> query('SELECT * FROM clients WHERE card ');
while ($donn=$repo->fetch()){
    
    echo "Prénom:"." ".($donn['firstName'])." "."Nom: "." ".$donn['lastName']." "."N° de carte:"." ".$donn['cardNumber'];
    echo"<br>";
}
echo"<br>";
?>

<?php
"exo4";
$repon=$dbh -> query('SELECT * FROM clients  LIMIT 20');
while ($don=$repon->fetch()){
    
    echo "Prénom:"." ".($don['firstName'])." "."Nom: "." ".$don['lastName'];
    echo"<br>";
}
echo"<br>";

?>

<?php
"exo5";
$rep=$dbh -> query('SELECT * FROM clients  WHERE lastName  LIKE "m%"');
foreach ($rep as $client){
    echo "Prénom:"." ".($client['firstName'])." "."Nom: "." ".$client['lastName'];
    echo"<br>";
}
echo"<br>";

?>




<?php
"exo6";
echo"<br>";
$reponses=$dbh -> query('SELECT * FROM shows ORDER BY title ASC');
foreach ($reponses as $show){
           
    echo  $show['title']." ".$show['performer'].$show['date']." ".$show['startTime'];

    echo"<br>";
}
echo"<br>";

?>


<?php
"exo7";
echo"<br>";
$reponses=$dbh -> query('SELECT * FROM clients ');
foreach ($reponses as $client){
    if($client ['card']==1){
       $client['card']="oui";}
       else{$client['card']="non";

       }

           
    echo  $client['lastName']." ".$client['firstName']." ".$client['birthDate']." ".$client['card']." ".$client['cardNumber'];;

    echo"<br>";
}
echo"<br>";

?>



