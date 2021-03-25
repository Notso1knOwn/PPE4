<?php
$table = array();
$table['employe']['colonne'] = ['Employé', 'NbHeure'];
$table['employe']['valeur'] = ['esclave1','esclave2','esclave3'];

$table['calendrier']['colonne'] = ['8h', '9h','10h','11h','12h','13h','14h','15h','16h','17h'];
$table['calendrier']['ligne'] = ['Lundi','Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
<!--    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />-->
    <script type="text/javascript" src="../redips-drag-min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div id="console"></div>
    <div class="row" id="redips-drag">
        <div class="col-lg-3 col-sm-12">
            <table class="table">
                <thead>
                <tr>
                <?php foreach($table['employe']['colonne'] as $value): ?>
                    <th scope="col" class="redips-mark"><?= $value ?></th>
                <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach($table['employe']['valeur'] as $value): ?>
                    <tr>
                        <td><div class="redips-drag redips-clone t3"><?= $value ?></div></td>
                        <td class="redips-mark" id="<?= $value ?>">0</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-9 col-sm-12">
            <table class="table" id="table3">
                <thead>
                    <tr>
                        <th></th>
                <?php foreach($table['calendrier']['colonne'] as $value): ?>
                        <th scope="col" class="redips-mark"><?= $value ?></th>
                <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($table['calendrier']['ligne'] as $value): ?>
                    <tr>
                        <th scope="row" class="redips-mark"><?= $value ?></th>
                        <?php for( $i=0 ; $i < count($table['calendrier']['colonne']) ; $i++): ?>
                            <td></td>
                        <?php endfor; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td id="message" class="redips-mark text-center" colspan="<?= count($table['calendrier']['colonne']) ?>" title="You can not drop here"></td>
                        <td class="redips-trash table-active" title="Trash"> Trash </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>