<article class="details">
<h2>Détails de <?= $viewVars['pokemon']->getNom()?> </h2>
<img src="<?= $viewVars['assetsBaseUri'] . $viewVars['pokemon']->getNumero() . '.png' ?>" alt="">

<section class="blockdetail"> 
    <h3>#<?=$viewVars['pokemon']->getNumero()?> <?= $viewVars['pokemon']->getNom() ?> </h3>

    <?php foreach($viewVars['type'] as $typeValue) :?>
     <h4 class ="button" style="background-color:#<?=$typeValue->getColor()?>"> <?=$typeValue->getTypeName()?></h4>
     <?php endforeach ?>
    <table>
      <thead><h4>Statistiques </h4></thead>
      <tbody>
        <tr>
          <td>
          PV
          </td>
          <td>
         <?=$viewVars['pokemon']->getPv()?>    
          </td>
          <td>
            <div class="progress">
            <div class="progress-bar" role="progressbar" style = "width: <?=$viewVars['pokemon']->getPv()?>%" aria-valuenow="<?=$viewVars['pokemon']->getPv()?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </td>
        </tr>
        <tr>
         <td>Attaque</td>
         <td><?=$viewVars['pokemon']->getAttaque()?></td>
         <td>  
            <div class="progress">
            <div class="progress-bar" role="progressbar" style = "width: <?=$viewVars['pokemon']->getAttaque()?>%" aria-valuenow="<?=$viewVars['pokemon']->getAttaque()?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </td>
        </tr>
        <tr>
         <td>Défense</td>
         <td><?=$viewVars['pokemon']->getDefense()?></td>
         <td> 
           <div class="progress">
        <div class="progress-bar" role="progressbar" style = "width: <?=$viewVars['pokemon']->getDefense()?>%" aria-valuenow="<?=$viewVars['pokemon']->getDefense()?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </td>
        </tr>
        <tr>
         <td>  
         Attaque Spé.
        </td>
         <td><?=$viewVars['pokemon']->getAttaqueSpe()?></td>
         <td>  
          <div class="progress">
          <div class="progress-bar" role="progressbar" style = "width: <?=$viewVars['pokemon']->getAttaqueSpe()?>%" aria-valuenow="<?=$viewVars['pokemon']->getAttaqueSpe()?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </td>
        </tr>
        <tr>
         <td>Defense Spé.</td>
         <td><?=$viewVars['pokemon']->getDefenseSpe()?></td>
         <td> 
        <div class="progress">
        <div class="progress-bar" role="progressbar" style = "width: <?=$viewVars['pokemon']->getDefenseSpe()?>%" aria-valuenow="<?=$viewVars['pokemon']->getDefenseSpe()?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </td>
        </tr>
        <tr>
          <td>
          Vitesse
          </td>
          <td>
          <?=$viewVars['pokemon']->getVitesse()?>
          </td>
          <td>
          <div class="progress">
          <div class="progress-bar" role="progressbar" style = "width: <?=$viewVars['pokemon']->getVitesse()?>%" aria-valuenow="<?=$viewVars['pokemon']->getVitesse()?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </td>
        </tr>
        </tbody>
    </table>
</section>
</article>
<footer>
  <a class ="nav-link footer-nav" href="<?= $this->router->generate('homepage'); ?>"> <p class ="text-center">Revenir à la liste</p> </a> 
</footer>