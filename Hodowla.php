<?php

	include_once('Zwierz.php');
    include_once('Drapieznik.php');
    include_once('Zabojca.php');
	//$zwierz = new Zwierz();
	//echo $zwierz->otoZwierz();

	//$mojZwierz = new Zwierz ("pies", "samiec", "trikolorowy", "hau hau");
	//$innyZwierz = new Zwierz ("kot", "samica", "rudy", "miau miau");
	

	//echo $mojZwierz->otoZwierz();
	//echo $innyZwierz->otoZwierz();
	
	$z = new Zwierz ("dzik", "samiec", "czarny", "hrumhrum");
	
	function helloZwierz(Zwierz $z) {
		return "Witaj! To ja - Twoj ".$z->gatunek.". "."Jestem ".$z->umaszczenie." i wydam dla Ciebie slodkie ".$z->wydawanyDzwiek.". \n";
	}
	
	//echo $z->helloZwierz(); // do wywołania helloZwierz z klasy Zierz
	echo helloZwierz($z);
        
        $drapieznik = new Drapieznik("tygrys", "samiec", "brazowo-czarny", "miau miau", new Zabojca("20", "4"));
       
        $drapieznik->getParametry();
        
        echo "Parametry po zmianie: \n";
        
        $drapieznik->zmien(new Zabojca("10", "4"));
        
        $drapieznik->getParametry();
        
        
          

		 	