<?php

	include_once('Zwierz.php');
        include_once('Drapieznik.php');
        include_once('Zabojca.php');
	//$zwierz = new Zwierz();
	//echo $zwierz->otoZwierz();

	//$mojZwierz = new Zwierz ("pies", "samiec", "trikolorowy", "hau hau");
	//$innyZwierz = new Zwierz ("kot", "samica", "rudy", "miau miau");
	$z = new Zwierz ("dzik", "samiec", "czarny", "hrumhrum");
	
	

	//echo $mojZwierz->otoZwierz();
	//echo $innyZwierz->otoZwierz();
	
	echo $z->helloZwierz();
        
        $drapieznik = new Drapieznik("tygrys", "samiec", "brazowo-czarny", "miau miau", new Zabojca("20", "4"));
       
        $drapieznik->getParametry();
        
        echo "Parametry po zmianie:\n";
        
        $drapieznik->zmien(new Zabojca("10", "4"));
        
        $drapieznik->getParametry();
        
        
          

		 	