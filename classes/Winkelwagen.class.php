<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 10-3-2015
 * Time: 10:49
 */

class Winkelwagen {

    public $test ="its working";

    public function removeAmountFromCart($productID, $amount){
        if(array_key_exists('winkelwagen', $_SESSION)) {
            for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                    if ($_SESSION['winkelwagen'][$i]['aantal'] >= $amount) {
                        $_SESSION['winkelwagen'][$i]['aantal'] -= $amount;
                    }else{
                        $_SESSION['winkelwagen'][$i]['aantal'] = 0;
                    }
                }
            }
        }
    }

    public function removeAllFromCart($productID){
        if(array_key_exists('winkelwagen', $_SESSION)) {
            for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                    $_SESSION['winkelwagen'][$i]['aantal'] = 0;
                }
            }
        }
    }
    public function addToCart($productID, $amount){
        if(array_key_exists('winkelwagen', $_SESSION)) {
            if ($this->checkIfProductInCart($productID)) {
                for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
                    if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                        $_SESSION['winkelwagen'][$i]['aantal'] += $amount;
                    }
                }
            } else {
                $insertPoint = max(array_keys($_SESSION['winkelwagen'])) + 1;
                $_SESSION['winkelwagen'][$insertPoint]['productID'] = $productID;
                $_SESSION['winkelwagen'][$insertPoint]['aantal'] = $amount;
            }
        }else{
            $_SESSION['winkelwagen'][0]['productID'] = $productID;
            $_SESSION['winkelwagen'][0]['aantal'] = $amount;

        }
    }

    public function checkIfProductInCart($productID){
        for ($i = 0; $i < count($_SESSION['winkelwagen']); $i++) {
            if ($_SESSION['winkelwagen'][$i]['productID'] == $productID) {
                return true;
            }
        }
        return false;
    }

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