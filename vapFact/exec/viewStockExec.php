
<?php

    $type_all = "all";
    $type_liquid = "e-liquide";
    $type_vap = "vapoteuse";


    if (isset($_POST['btn_ref_AZ'])) {   
        if ($_POST['radio_type'] == $type_all) {
            include 'composant/config.php'; 
            $sql_radio_ref_AZ_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_ref` ASC");
            $check = $sql_radio_ref_AZ_all -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_radio_ref_AZ_all -> fetchAll();
            $bdd = null;

        }  elseif ($_POST['radio_type'] == $type_liquid) {
            include 'composant/config.php'; 
            $sql_radio_ref_AZ_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_ref` ASC");
            $check = $sql_radio_ref_AZ_liquide -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_radio_ref_AZ_liquide -> fetchAll();
            $bdd = null;

        } elseif ($_POST['radio_type'] == $type_vap) {
            include 'composant/config.php'; 
            $sql_radio_ref_AZ_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_ref` ASC");
            $check = $sql_radio_ref_AZ_vap -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_radio_ref_AZ_vap -> fetchAll();
            $bdd = null;
        }
    }

    if (isset($_POST['btn_ref_ZA'])) {
        if ($_POST['radio_type'] == $type_all) {
            include 'composant/config.php'; 
            $sql_radio_ref_ZA_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_ref` DESC");
            $check = $sql_radio_ref_ZA_all -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_radio_ref_ZA_all -> fetchAll();
            $bdd = null;

        }  elseif ($_POST['radio_type'] == $type_liquid) {
            include 'composant/config.php'; 
            $sql_radio_ref_ZA_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_ref` DESC");
            $check = $sql_radio_ref_ZA_liquide -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_radio_ref_ZA_liquide -> fetchAll();
            $bdd = null;

        } elseif ($_POST['radio_type'] == $type_vap) {
            include 'composant/config.php'; 
            $sql_radio_ref_ZA_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_ref` DESC");
            $check = $sql_radio_ref_ZA_vap -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_radio_ref_ZA_vap -> fetchAll();
            $bdd = null;
        }
    }

//#########################################################################################################

if (isset($_POST['btn_stock_09'])) {   
    if ($_POST['radio_type'] == $type_all) {
        include 'composant/config.php'; 
        $sql_stock_09_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_stock` ASC");
        $check = $sql_stock_09_all -> execute();
        if (!$check){echo "Problème pendant la récupération des informations";}
        $resultat = $sql_stock_09_all -> fetchAll();
        $bdd = null;

    }  elseif ($_POST['radio_type'] == $type_liquid) {
        include 'composant/config.php'; 
        $sql_stock_09_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_stock` ASC");
        $check = $sql_stock_09_liquide -> execute();
        if (!$check){echo "Problème pendant la récupération des informations";}
        $resultat = $sql_stock_09_liquide -> fetchAll();
        $bdd = null;

    } elseif ($_POST['radio_type'] == $type_vap) {
        include 'composant/config.php'; 
        $sql_stock_09_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_stock` ASC");
        $check = $sql_stock_09_vap -> execute();
        if (!$check){echo "Problème pendant la récupération des informations";}
        $resultat = $sql_stock_09_vap -> fetchAll();
        $bdd = null;
    }
}

if (isset($_POST['btn_stock_90'])) {
    if ($_POST['radio_type'] == $type_all) {
        include 'composant/config.php'; 
        $sql_stock_90_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_stock` DESC");
        $check = $sql_stock_90_all -> execute();
        if (!$check){echo "Problème pendant la récupération des informations";}
        $resultat = $sql_stock_90_all -> fetchAll();
        $bdd = null;

    }  elseif ($_POST['radio_type'] == $type_liquid) {
        include 'composant/config.php'; 
        $sql_stock_90_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_stock` DESC");
        $check = $sql_stock_90_liquide -> execute();
        if (!$check){echo "Problème pendant la récupération des informations";}
        $resultat = $sql_stock_90_liquide -> fetchAll();
        $bdd = null;

    } elseif ($_POST['radio_type'] == $type_vap) {
        include 'composant/config.php'; 
        $sql_stock_90_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_stock` DESC");
        $check = $sql_stock_90_vap -> execute();
        if (!$check){echo "Problème pendant la récupération des informations";}
        $resultat = $sql_stock_90_vap -> fetchAll();
        $bdd = null;
    }
}

//#########################################################################################################

    if (isset($_POST['btn_buy_09'])) {
        if ($_POST['radio_type'] == $type_all) {
            include 'composant/config.php'; 
            $sql_buy_09_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_buy` ASC");
            $check = $sql_buy_09_all -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_buy_09_all -> fetchAll();
            $bdd = null;
    
        }  elseif ($_POST['radio_type'] == $type_liquid) {
            include 'composant/config.php'; 
            $sql_buy_09_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_buy` ASC");
            $check = $sql_buy_09_liquide -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_buy_09_liquide -> fetchAll();
            $bdd = null;
    
        } elseif ($_POST['radio_type'] == $type_vap) {
            include 'composant/config.php'; 
            $sql_buy_09_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_buy` ASC");
            $check = $sql_buy_09_vap -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_buy_09_vap -> fetchAll();
            $bdd = null;
        }
    }
    
    if (isset($_POST['btn_buy_90'])) {
        if ($_POST['radio_type'] == $type_all) {
            include 'composant/config.php'; 
            
            $sql_buy_90_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_buy` DESC");
            $check = $sql_buy_90_all -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_buy_90_all -> fetchAll();
            $bdd = null;
    
        }  elseif ($_POST['radio_type'] == $type_liquid) {
            include 'composant/config.php'; 
            $sql_buy_90_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_buy` DESC");
            $check = $sql_buy_90_liquide -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_buy_90_liquide -> fetchAll();
            $bdd = null;
    
        } elseif ($_POST['radio_type'] == $type_vap) {
            include 'composant/config.php'; 
            $sql_buy_90_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_buy` DESC");
            $check = $sql_buy_90_vap -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_buy_90_vap -> fetchAll();
            $bdd = null;
        }
    }

    //#########################################################################################################

    if (isset($_POST['btn_sell_09'])) {
        if ($_POST['radio_type'] == $type_all) {
            include 'composant/config.php'; 
            $sql_sell_09_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_sell` ASC");
            $check = $sql_sell_09_all -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_sell_09_all -> fetchAll();
            $bdd = null;
    
        }  elseif ($_POST['radio_type'] == $type_liquid) {
            include 'composant/config.php'; 
            $sql_sell_09_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_sell` ASC");
            $check = $sql_sell_09_liquide -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_sell_09_liquide -> fetchAll();
            $bdd = null;
    
        } elseif ($_POST['radio_type'] == $type_vap) {
            include 'composant/config.php'; 
            $sql_sell_09_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_sell` ASC");
            $check = $sql_sell_09_vap -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_sell_09_vap -> fetchAll();
            $bdd = null;
        }
    }
    
    if (isset($_POST['btn_sell_90'])) {
        if ($_POST['radio_type'] == $type_all) {
            include 'composant/config.php'; 
            
            $sql_sell_90_all = $bdd -> prepare("SELECT * FROM $table_name ORDER BY `product_sell` DESC");
            $check = $sql_sell_90_all -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_sell_90_all -> fetchAll();
            $bdd = null;
    
        }  elseif ($_POST['radio_type'] == $type_liquid) {
            include 'composant/config.php'; 
            $sql_sell_90_liquide = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_liquid' ORDER BY `product_sell` DESC");
            $check = $sql_sell_90_liquide -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_sell_90_liquide -> fetchAll();
            $bdd = null;
    
        } elseif ($_POST['radio_type'] == $type_vap) {
            include 'composant/config.php'; 
            $sql_sell_90_vap = $bdd -> prepare("SELECT * FROM $table_name WHERE product_type = '$type_vap' ORDER BY `product_sell` DESC");
            $check = $sql_sell_90_vap -> execute();
            if (!$check){echo "Problème pendant la récupération des informations";}
            $resultat = $sql_sell_90_vap -> fetchAll();
            $bdd = null;
        }
    }
    include 'composant/tableStock.php';
    ?>
  </body>
</html>
 