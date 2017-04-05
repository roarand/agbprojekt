<?php

	$adresat = 'tomasek95@gmail.com';
	@$email = $_POST['mail'];
	$walidacja = true;
	
	 if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)){
		 echo 'Podano błędny email!';
		 $walidacja=false;
	 }
	@$content = 'Formularz do wyceny od: '.$email."\r\n";
	@$typowy = $_POST['typowy'];
	
	if($typowy==0){
		$content .=' Projekt typowy: TAK'."\r\n";
	}
	else{
		$content .='Projekt typowy: NIE'."\r\n";
	}
	$content .= ' Dokumenty:'."\r\n";
	if($_POST['dokumenty0']=='on'){
		$content .=' warunki przyłączeniowe mediów;'."\r\n";
	}
	if($_POST['dokumenty1']=='on'){
		$content .=' wypis i wyrys z MPZP;'."\r\n";
	}
	if($_POST['dokumenty2']=='on'){
		$content .=' informacja dotycząca połączenia działki z drogą publiczną;'."\r\n";
	}
	if($_POST['dokumenty3']=='on'){
		$content .=' warunki zabudowy;'."\r\n";
	}
	
	$content .=' Zakres:'."\r\n";
	if($_POST['zakres0']=='on'){
		$content .=' mapa do celów projektowych;'."\r\n";
	}
	if($_POST['zakres1']=='on'){
		$content .=' badania geologiczne;'."\r\n";
	}
	if($_POST['zakres2']=='on'){
		$content .=' projekt koncepcyjny;'."\r\n";
	}
	if($_POST['zakres3']=='on'){
		$content .=' projekt indywidualny;'."\r\n";
	}
	if($_POST['zakres4']=='on'){
		$content .=' adaptacja projektu typowego;'."\r\n";
	}
	if($_POST['zakres5']=='on'){
		$content .=' zmiany projektu typowego;'."\r\n";
	}
	if($_POST['zakres6']=='on'){
		$content .=' inwentaryzacja;'."\r\n";
	}
	if($_POST['zakres7']=='on'){
		$content .=' kosztorys inwestorski;'."\r\n";
	}
	
	
	$content .=' Przyłącza:'."\r\n";
	
	if($_POST['przylacza1']=='on'){
		$content .=' woda;'."\r\n";
	}
	if($_POST['przylacza2']=='on'){
		$content .=' kanalizacja;'."\r\n";
	}
	if($_POST['przylacza3']=='on'){
		$content .=' szambo;'."\r\n";
	}
	if($_POST['przylacza4']=='on'){
		$content .=' przydomowa oczyszczalnia ścieków;'."\r\n";
	}
	if($_POST['przylacza5']=='on'){
		$content .=' WLZ energii elektrycznej;'."\r\n";
	}
	if($_POST['przylacza6']=='on'){
		$content .=' WIG gazu;'."\r\n";
	}
	
	
	$content .=" Klient: ".$_POST[names];
	
	$header = 	"From: AGB Strona \nContent-Type:".
			' text/plain;charset="utf-8"'."\n";
	if($walidacja){
		if (mail($adresat, 'Formularz do wyceny', $content, $header))
			echo 'wysłano do wyceny';
		else 
			echo 'nie wysłano do wyceny';
	}
		else 
			echo 'nie wysłano do wyceny';
	
?>