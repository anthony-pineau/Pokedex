<?php

class MainController extends CoreController {

    public function home(){
        $pokemonModel = new PokemonModel();

        $pokemon = $pokemonModel->findAllOrderedByNumero();

        $this->show('home', [
            'pokemon' => $pokemon
        ]);
    }

    public function list($params){
        $typeId = $params['type'];
        $detailsModel = new PokemonModel();
        $type = $detailsModel->getAllByType($typeId);
        $this->show('list', [
            'type' => $type
        ]);
    }

    public function types(){
        $type = new TypeModel();
        $typeName = $type->findAllType();
        $this->show('types', ['type' => $typeName]);
    }

}
