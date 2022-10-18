<?php
session_start();

/*CLASSE PRODUCTE*/
class Producte {
    public $id;
    static $contador = 1;
    public $titol;
    public $categoria;
    public $preu;
    public $descripcio;
    public $colors;
    public $stoc;
    public $caracteristiques;
    public $especificacions;
    public $quantitat = 1;
    public $fotos = [];

    function __construct() {}

    function getId() {
        return $this->id;
    }
    function addFoto($lFoto) {
        if (sizeof($this->fotos) < 3) {
            array_push($this->fotos, $lFoto);
        } else  {
            echo "Error. només es poden pujar 3 fotos per producte.";
        }
    }
}

/*CLASSE CATALEG*/
class Cataleg {
    public $productesCataleg = [];


    function addProducte($lProducte) {
        // $lProducte->id = $lProducte::$contador;
        // $lProducte::$contador++;
        array_push($this->productesCataleg, $lProducte);
    }

    function getProducteById($lId) {
        $prodById = "Error, no s'ha trobat el producte amb id " . $lId . ".";
        foreach ($this->productesCataleg as $producte) {
            if ($producte->id == $lId) {
                $prodById = $producte;
                break;
            }
        }
        return $prodById;
    }
    
    function llistar() {
        foreach($this->productesCataleg as $producte) {
            print_r($producte);
        }
    }
}

/*CLASSE CISTELLA*/
class Cistella extends Cataleg{
    public $productesCistella = [];

    function addProducte($lProducte) {
        /* if ($lProducte->stoc > 0) { */

            $trobat = false;

            foreach($this->productesCistella as $producte) {
                if($producte->id == $lProducte->id) {
                    $producte->quantitat += $lProducte->quantitat;
                    $trobat = true;
                }
            }

           if (!$trobat) {
            array_push($this->productesCistella, $lProducte);
           }

        /* } else {
            print("No hi ha estoc!");
        } */
    }

    function deleteProducte($lId) {
        $contador = 0;
        $lProducte = $this->getProducteById($lId);
        if (sizeof($this->productesCistella) == 1) {
            $this->buidar();
        } else  {
            foreach ($this->productesCistella as $producte) {
                if ($producte->id == $lProducte->id) {
                    unset($this->productesCistella[$contador]);
                    print("Producte eliminat correctament.");
                    break;
                }
            $contador++;
        }
        }

    }
    
    function llistar() {
        foreach($this->productesCistella as $producte) {
            print_r($producte);
        }
    }

    function getTotal() {
        $total = 0;
        foreach($this->productesCistella as $producte) {
            $total += ($producte->preu * $producte->quantitat);
        }
        return $total;
    }

    function getNumProductes() {
        return count($this->productesCistella);
    }

    function getProducteById($lId) {
        $prodById = "Error, no s'ha trobat el producte amb id " . $lId . ".";
        foreach ($this->productesCistella as $producte) {
            if ($producte->id == $lId) {
                $prodById = $producte;
                break;
            }
        }
        return $prodById;
    }

    function buidar() {
        $this->productesCistella = [];
    }

    function comprat($lProducte) {
        $trobat = false;
        foreach($this->productesCistella as $producte) {
            if($producte->id == $lProducte->id) {
                $producte->stoc -= $lProducte->quantitat;
                $trobat = true;
            }
        }
        if ($trobat) {
            print("Producte venut. Stoc: " . $producte->stoc);
        }
    }
}

?>