
<?php

include "../controller/EventC.php";
$eventc=new EventC();
if(isset($_POST['query'])){
    $liste=$eventc->rechercheEventApprouve($_POST['query']);
}
else{
    $liste=$eventc->afficherEventApprouve();
}

?>

<?php
foreach ($liste as $item) {
    ?>
    <tr>
        <td><?php echo $item['nom']." ".$item['prenom'] ?></td>
        <td><?php echo $item['type'] ?></td>
        <td><?php echo $item['description'] ?></td>
        <td><?php echo $item['date'] ?></td>
        <td><a href="detailEvent.php?id=<?php echo $item['id'] ?>">Apprové (Cliquez ici pour voir les details)</a></td>
    </tr>
    <?php
}
?>
