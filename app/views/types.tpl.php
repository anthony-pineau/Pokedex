<h2 class="titretype">Cliquez sur un type pour voir tous les pokémon de ce type</h2>
<div class="row justify-content-center">
<?php foreach($viewVars['type'] as $typeValue) :?>
     <button type="button" class ="btn col-3 type m-3" style="background-color:#<?=$typeValue->getColor()?>"><a class = "nav-link type-link" href = "<?= $this->router->generate('list-page', ['type' => $typeValue->getName() ]); ?>" > <?=$typeValue->getName()?></a></button>
<?php endforeach ?>
</row>