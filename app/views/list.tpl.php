<div class="row home">
<?php foreach($viewVars['type'] as $typeValue) : ?>


<div class="dark-red">
<a class="nav-link" href='<?= $this->router->generate('details-page', ['id' =>$typeValue->getNumero()]); ?>'>
<img class = "rounded mx-auto d-block" src="<?= $viewVars['assetsBaseUri'] . $typeValue->getNumero() . '.png' ?>" alt="">
<h3>#<?= $typeValue->getNumero()?> <?= $typeValue->getNom() ?> </h3>


</div>
</a>

<?php endforeach; ?>

</div>