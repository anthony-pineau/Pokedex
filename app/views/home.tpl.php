<div class="row home">
<?php foreach($viewVars['pokemon'] as $pokemonValue) : ?>


<div class="dark-red">
<a class="nav-link" href='<?= $this->router->generate('details-page', ['id' =>$pokemonValue->getNumero()]); ?>'>
<img class = "rounded mx-auto d-block" src="<?= $viewVars['assetsBaseUri'] . $pokemonValue->getNumero() . '.png' ?>" alt="">
<h3>#<?= $pokemonValue->getNumero()?> <?= $pokemonValue->getNom() ?> </h3>


</div>
</a>

<?php endforeach; ?>

</div>