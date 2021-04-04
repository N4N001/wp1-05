<?php $vodkaPrice = 119; $homelessMoney = 132; ?>
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
echo "Cena vodky: " . $vodkaPrice;
echo "<br> Penize bezdomovce: " . $homelessMoney . "<br>"; 
echo "<br>Peníze bezdomovce před návštěvou večerky: " . $homelessMoney . "<br>";

if($homelessMoney > $vodkaPrice ) {
    echo "Vodka zakoupena!";
    $homelessMoney = $homelessMoney - $vodkaPrice;
 } elseif($homelessMoney < 119) {
     echo "Nedostatek peněz";
 } elseif ($vodkaPrice < 100) {
    echo "Cena vodky spadla nyní si ji můžeš zakoupit";
}
echo "<br>Peníze bezdomovce po návštěvě večerky: " . $homelessMoney . "<br>";
?>

</body>
</html>