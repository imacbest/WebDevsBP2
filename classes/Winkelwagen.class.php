<?php
class Winkelwagen{


    /**
     * Functie om een X aantal van een product uit het winkelwagentje te halen
     * @param $productID product nummer
     * @param $amount het toe te voegen aantal
     * @return boolean
     */
    public function removeAmountFromCart($productID, $amount){
        if(!is_numeric($productID) && !is_numeric($productID)){
            return false;
        }
        if(array_key_exists('winkelwagen', $_SESSION)) {
            for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                    if ($_SESSION['winkelwagen'][$i]['aantal'] >= $amount) {
                        $_SESSION['winkelwagen'][$i]['aantal'] -= $amount;
                        return true;
                    }else{
                        $_SESSION['winkelwagen'][$i]['aantal'] = 0;
                        return true;
                    }
                }
            }
        }
    }

    /**
     * Verwijderd 1 product volledig uit het winkelwagentje
     * @param $productID product nummer
     * @return bool
     */
    public function removeAllFromCart($productID){
        if(!is_numeric($productID)){
            return false;
        }
        if(array_key_exists('winkelwagen', $_SESSION)) {
            for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                    $_SESSION['winkelwagen'][$i]['aantal'] = 0;
                }
            }
        }
    }

    /**
     * Voegt x aantal van het product toe aan de winkelwagen
     * @param $productID het product id
     * @param $amount het aantal toe te voegen producten
     * @return bool
     */
    public function addToCart($productID, $amount){
        if(!is_numeric($productID) && !is_numeric($productID)){
            return false;
        }
        if(array_key_exists('winkelwagen', $_SESSION)) {
            if ($this->checkIfProductInCart($productID)) {
                for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                    if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                        $_SESSION['winkelwagen'][$i]['aantal'] += $amount;
                        return true;
                        setVoorraad($productID, $amount);
                    }
                }
            } else {
                $insertPoint = max(array_keys($_SESSION['winkelwagen'])) + 1;
                $_SESSION['winkelwagen'][$insertPoint]['productID'] = $productID;
                $_SESSION['winkelwagen'][$insertPoint]['aantal'] = $amount;
                return true;
                setVoorraad($productID, $amount);
            }
        }else{
            $_SESSION['winkelwagen'][0]['productID'] = $productID;
            $_SESSION['winkelwagen'][0]['aantal'] = $amount;
            return true;
            setVoorraad($productID, $amount);
        }
    }

    /**
     * checkt of het product al in het winkelwagentje zit
     * @param $productID het product id van het te controleren product
     * @return bool
     */
    public function checkIfProductInCart($productID){
        if(!is_numeric($productID)){
            return false;
        }
        for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
            if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                return true;
            }
        }
        return false;
    }

    /**
     * checkt of de winkelwagen leeg is
     * @return bool
     */
    public function isCartEmpty(){
        if(array_key_exists('winkelwagen', $_SESSION)) {
            for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                if($_SESSION['winkelwagen'][$i]['aantal'] != 0){
                    return false;
                }
            }
            return true;
        }else{
            return true;
        }
    }
}