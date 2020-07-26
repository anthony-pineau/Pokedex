<?php 

class DetailsController extends CoreController {
    public function details($params){
        $pokemonId = $params['id'];
        $detailsModel = new PokemonModel();

        $details = $detailsModel->findPokemon($pokemonId);
        $type = $detailsModel->getType($pokemonId);
        $this->show('details', [
            'pokemon' => $details,
            'type' => $type
        ]);
    }

}
?>