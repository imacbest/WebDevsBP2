<?php
class Winkelwagen{

    private $productID;

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
                $amount = $_SESSION['winkelwagen'][$i]['productID'];
                echo $amount;
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
    public function addToCart($productID, $amount)
    {
        $this->productID = $productID;
        if (!is_numeric($productID) && !is_numeric($productID)) {
            return false;
        }
        $inCart = 0;
        $currentInCart = 0;
        if(array_key_exists('winkelwagen', $_SESSION)) {
            if ($this->checkIfProductInCart($this->productID)) {
                $inCart = $_SESSION['winkelwagen'][$this->getI($productID)]['aantal'];
                if(is_numeric($this->getI($this->productID))) {
                    $currentInCart = $_SESSION['winkelwagen'][$this->getI($productID)]['aantal'];
                }else{
                    $currentInCart = 0;
                }
            }
        }else{
            $currentInCart = 0;
        }

       if($inCart + $amount == $this->getVoorraad()) {
            $amount = 1;
           echo "Het te bestellen aantal is met 1 opgehoogd (+1)";
        }else if((($inCart + $amount) - $currentInCart) >= $this->getVoorraad()){
            $amount = $this->getVoorraad() - $currentInCart;
           echo "Het te bestellen aantal is opgehoogd!";
        } else if($inCart + $amount > $this->getVoorraad()) {
           $amount = 0;
           echo "Er is geen voldoende voorraad!";
       }

        if (array_key_exists('winkelwagen', $_SESSION)) {
            if ($this->checkIfProductInCart($productID)) {
                for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                    if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                        $_SESSION['winkelwagen'][$i]['aantal'] += $amount;
                        return true;
                    }
                }
            } else {
//                $_SESSION['winkelwagen'][0]['productID'] = $productID;
//                $_SESSION['winkelwagen'][0]['aantal'] = $amount;
                $insertPoint = max(array_keys($_SESSION['winkelwagen'])) + 1;
                $_SESSION['winkelwagen'][$insertPoint]['productID'] = $productID;
                $_SESSION['winkelwagen'][$insertPoint]['aantal'] = $amount;
                return true;
            }
        } else {
            $_SESSION['winkelwagen'][0]['productID'] = $productID;
            $_SESSION['winkelwagen'][0]['aantal'] = $amount;
            global $db;
            $voorraad_query = "UPDATE PRODUCT SET VOORRAAD = VOORRAAD - '" . $amount . "' WHERE PRODUCTNUMMER= '" . $productID . "';";
            sqlsrv_query($db->getConn(), $voorraad_query, NULL) or die (print_r(sqlsrv_errors()));
            return true;
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

    public function getI($productID){
        if (array_key_exists('winkelwagen', $_SESSION)) {
            for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                if($_SESSION['winkelwagen'][$i]['productID'] == $productID){
                    return $i;
                }
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

    /**
     * functie die checkt of een product wel in voorraad is, product id moet in $this->productID zitten!
     * @return int voorraad
     */
    public function getVoorraad(){
        global $db;
        $query = "SELECT * FROM PRODUCT WHERE productnummer = '" . $this->productID . "'";
        $result = sqlsrv_query($db->getConn(), $query, null) or die(print_r(sqlsrv_errors()));
        if(sqlsrv_has_rows ($result)) {
            $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
            return $row['VOORRAAD'];
        }
        return false;
    }


}