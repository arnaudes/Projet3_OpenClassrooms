<div class="card-deck">
<?php
$tables = [
    "Publications"    => "posts",
    "Commentaires"    => "comments"
];

$colors = [
    "posts" => "bg-primary",
    "comments" => "bg-success"

];

foreach($tables as $table_name => $table){
    ?>
    <div class="card text-center text-white <?=getColor($table,$colors)?>">
        <div class="card-header h3"><?=$table_name?></div>
        <?php $nbrInTable = inTable($table); ?>
        <div class="card-body text-right"><h2><?=$nbrInTable[0]?></h2></div>
    </div>
    <?php
}
?>
    <div class="card text-center text-white bg-danger">
        <div class="card-header h3">Signalé(s)</div>
        <?php $nbrInTableReported = inTableReported(); ?>
        <div class="card-body text-right"><h2><?=$nbrInTableReported[0]?></h2></div>
    </div>
</div>
