<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf8">
<title>Huawei P30 lite</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/script.js"></script>

<!--Scrollbalken-->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jQueryRotate.js"></script>

<script>
	$(document).ready(function() {    
	$(".scroll").niceScroll({
		mousescrollstep: 80,
		autohidemode: "leave",
		cursorwidth: "10px",
		cursorborderradius: "5px",
		cursorcolor: "#004192",
		});
$("einstellungen").niceScroll({
		mousescrollstep: 80,
		autohidemode: "leave",
		cursorwidth: "10px",
		cursorborderradius: "5px",
		cursorcolor: "#004192",
		});
    }
</script>
</head>
<body> 
<!-- Rahmen -->
<div class="top" style="margin-top:-40px;margin-left:-29px">
	<img  src="img/huawei_p30_lite_rahmen.png" style="display:block">
</div>

<!--Navigation unten-->
<div id="navigation" class="top" style="padding-top:1190px;display:block" >
    <img usemap="#navigation" src="img/navigation.png">
    <map name="navigation">
        <area alt="startseite" shape="rect" coords="220,0,320,60" onclick="startseite()">
    </map>
</div>

<!-- Startseite -->
<div id="startseite" class="top" style="display:block">
<img  usemap="#startseite" src="img/startseite.png">
	<map name="startseite">
        <area alt="statusleiste" shape="rect" coords="0,0,540,50" onclick="statusleiste()">
          <area alt="einstellungen" shape="rect" coords="295,820,370,895" onclick="einstellungen()">
        <area alt="play_store_startseite" shape="rect" coords="165,820,240,895" onclick="play_store_startseite()">
        <area alt="messenger" shape="rect" coords="165,990,240,1070" onclick="messenger()">
        
    </map>
</div>
    

<!--  Statusleiste-->
<div id="statusleiste" class="top" style="display:none">
<img  usemap="#statusleiste" src="img/statusleiste.png">
	<map name="statusleiste">
        <area alt="einstellungen" shape="rect" coords="500,50,0,100" onclick="einstellungen()">
    </map>
</div>
    
<!-- Einstellungen -->
<div id="einstellungen_top" class="top" style="display:none">
<img  usemap="#einstellungen_top" src="img/einstellungen_top.png">
    <map name="einstellungen_top"></map>
        <div id="einstellungen" class="scroll" style="display:block;margin-top:-109px">
        <img  usemap="#einstellungen" src="img/einstellungen.png">
            <map name="einstellungen">
            <area alt="wlan_ein" shape="rect" coords="0,340,540,430" onclick="wlan_ein()">
            <area alt="bluetooth_ein" shape="rect" coords="0,430,540,520" onclick="bluetooth_ein()">
            <area alt="mobilfunknetz" shape="rect" coords="0,530,540,610" onclick="mobilfunknetz()">
            <area alt="weitere_verbindungen" shape="rect" coords="0,630,540,720" onclick="weitere_verbindungen()">
            <area alt="startbildschirm_hintergrund" shape="rect" coords="0,730,540,830" onclick="startbildschirm_hintergrund()">
            <area alt="anzeige_helligkeit" shape="rect" coords="0,830,540,930" onclick="anzeige_helligkeit()">
            <area alt="apps" shape="rect" coords="0,1225,540,1325" onclick="apps()">
            <area alt="sicherheit" shape="rect" coords="0,1525,540,1625" onclick="sicherheit()">
            <area alt="standortzugriff" shape="rect" coords="0,1725,540,1825" onclick="standortzugriff()">
            <area alt="nutzer_und_konten" shape="rect" coords="0,2020,540,2120" onclick="nutzer_und_konten()">
            <area alt="system_und_aktualisierungen" shape="rect" coords="0,2220,540,2320" onclick="system_und_aktualisierungen()">
            <area alt="ueber_das_telefon" shape="rect" coords="0,2320,540,2420" onclick="ueber_das_telefon()">
        </div>
    </map>
</div>
    
<!--  WLAN-->
<div id="wlan_ein" class="top" style="display:none">
<img  usemap="#wlan_ein" src="img/wlan_ein.png">
	<map name="wlan_ein">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        <area alt="wlan_aus" shape="rect" coords="445,145,505,180" onclick="wlan_aus()">
        <area alt="netzwerk_hinzufuegen" shape="rect" coords="25,810,280,860" onclick="netzwerk_hinzufuegen()">
    </map>
</div>
    
<div id="wlan_aus" class="top" style="display:none">
<img  usemap="#wlan_aus" src="img/wlan_aus.png">
	<map name="wlan_aus">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        <area alt="wlan_ein" shape="rect" coords="445,145,505,180" onclick="wlan_ein()">
    </map>
</div>
    
<div id="netzwerk_hinzufuegen" class="top" style="display:none">
<img  usemap="#netzwerk_hinzufuegen" src="img/netzwerk_hinzufuegen.png">
	<map name="netzwerk_hinzufuegen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="wlan_ein()">
    </map>
</div>
    
<!--  Bluetooth-->
<div id="bluetooth_ein" class="top" style="display:none">
<img  usemap="#bluetooth_ein" src="img/bluetooth_ein.png">
	<map name="bluetooth_ein">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        <area alt="bluetooth_aus" shape="rect" coords="445,145,505,180" onclick="bluetooth_aus()">
    </map>
</div>
    
<div id="bluetooth_aus" class="top" style="display:none">
<img  usemap="#bluetooth_aus" src="img/bluetooth_aus.png">
	<map name="bluetooth_aus">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        <area alt="bluetooth_ein" shape="rect" coords="445,145,505,180" onclick="bluetooth_ein()">
    </map>
</div>
    
<!--Mobilfunknetz-->
<div id="mobilfunknetz" class="top" style="display:none">
<img  usemap="#mobilfunknetz" src="img/mobilfunknetz.png">
	<map name="mobilfunknetz">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        <area alt="mobile_daten" shape="rect" coords="30,200,510,275" onclick="mobile_daten()">
        <area alt="sim_verwaltung" shape="rect" coords="30,275,510,350" onclick="sim_verwaltung()">
        <area alt="tethering_mobiler_hotspot" shape="rect" coords="30,350,510,425" onclick="tethering_mobiler_hotspot()">
        <area alt="datennutzung" shape="rect" coords="30,435,510,510" onclick="datennutzung()">
    </map>
</div>
    
<div id="mobile_daten" class="top" style="display:none">
<img  usemap="#mobile_daten" src="img/mobile_daten.png">
	<map name="mobile_daten">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunknetz()">
        <area alt="APNs" shape="rect" coords="30,470,510,540" onclick="APNs()">
        <area alt="bevorzugter_netzwerkmodus" shape="rect" coords="30,540,510,610" onclick="bevorzugter_netzwerkmodus()">
        <area alt="netzwerkauswahl" shape="rect" coords="30,610,510,680" onclick="netzwerkauswahl()">
    </map>
</div>
    
<div id="APNs" class="top" style="display:none">
<img  usemap="#APNs" src="img/APNs.png">
	<map name="APNs">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobile_daten()">
    </map>
</div>
    
<div id="bevorzugter_netzwerkmodus" class="top" style="display:none">
<img  usemap="#bevorzugter_netzwerkmodus" src="img/bevorzugter_netzwerkmodus.png">
	<map name="bevorzugter_netzwerkmodus">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobile_daten()">
    </map>
</div> 
    
<div id="netzwerkauswahl" class="top" style="display:none">
<img  usemap="#netzwerkauswahl" src="img/netzwerkauswahl.png">
	<map name="netzwerkauswahl">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobile_daten()">
    </map>
</div>
    
<div id="sim_verwaltung" class="top" style="display:none">
<img  usemap="#sim_verwaltung" src="img/sim_verwaltung.png">
	<map name="sim_verwaltung">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunknetz()">
    </map>
</div>

<div id="tethering_mobiler_hotspot" class="top" style="display:none">
<img  usemap="#tethering_mobiler_hotspot" src="img/tethering_mobiler_hotspot.png">
	<map name="tethering_mobiler_hotspot">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunknetz()">
    </map>
</div>
    
<div id="datennutzung" class="top" style="display:none">
<img  usemap="#datennutzung" src="img/datennutzung.png">
	<map name="datennutzung">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunknetz()">
    </map>
</div>

<!--Weitere Verbindungen-->
<div id="weitere_verbindungen" class="top" style="display:none">
<img  usemap="#weitere_verbindungen" src="img/weitere_verbindungen.png">
	<map name="weitere_verbindungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
         <area alt="nfc" shape="rect" coords="30,130,510,195" onclick="nfc()">
        <area alt="huawei_share" shape="rect" coords="30,195,510,270" onclick="huawei_share()">
        <area alt="privates_dns" shape="rect" coords="30,495,510,570" onclick="privates_dns()">
        
    </map>
</div>
    
<div id="nfc" class="top" style="display:none">
<img  usemap="#nfc" src="img/nfc.png">
	<map name="nfc">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="weitere_verbindungen()">
    </map>
</div>
    
<div id="huawei_share" class="top" style="display:none">
<img  usemap="#huawei_share" src="img/huawei_share.png">
	<map name="huawei_share">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="weitere_verbindungen()">
    </map>
</div>
    
<div id="privates_dns" class="top" style="display:none">
<img  usemap="#privates_dns" src="img/privates_dns.png">
	<map name="privates_dns">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="weitere_verbindungen()">
    </map>
</div>
    
<!--    Startbildschirm und Hintergrund-->
<div id="startbildschirm_hintergrund" class="top" style="display:none">
<img  usemap="#startbildschirm_hintergrund" src="img/startbildschirm_hintergrund.png">
	<map name="startbildschirm_hintergrund">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
         <area alt="startbildschirmstil" shape="rect" coords="30,450,510,520" onclick="startbildschirmstil()">
        
    </map>
</div>
    
<div id="startbildschirmstil" class="top" style="display:none">
<img  usemap="#startbildschirmstil" src="img/startbildschirmstil.png">
	<map name="startbildschirmstil">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="startbildschirm_hintergrund()">
    </map>
</div>
    
<!--    Anzeige und Helligkeit-->

<div id="anzeige_helligkeit" class="top" style="display:none">
<img  usemap="#anzeige_helligkeit" src="img/anzeige_helligkeit.png">
	<map name="anzeige_helligkeit">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
        <area alt="farbmodus_temperatur" shape="rect" coords="30,355,510,430" onclick="farbmodus_temperatur()">
        <area alt="augen_schonen" shape="rect" coords="30,590,510,660" onclick="augen_schonen()">
        <area alt="schrift_anzeigegroesse" shape="rect" coords="30,675,510,745" onclick="schrift_anzeigegroesse()">
        <area alt="bildschirmaufloesung" shape="rect" coords="30,745,510,815" onclick="bildschirmaufloesung()">
        <area alt="weitere_anzeigeeinstellungen" shape="rect" coords="30,830,510,900" onclick="weitere_anzeigeeinstellungen()">
        
    </map>
</div>
    
<div id="farbmodus_temperatur" class="top" style="display:none">
<img  usemap="#farbmodus_temperatur" src="img/farbmodus_temperatur.png">
	<map name="farbmodus_temperatur">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="anzeige_helligkeit()">
    </map>
</div>
    
 <div id="augen_schonen" class="top" style="display:none">
<img  usemap="#augen_schonen" src="img/augen_schonen.png">
	<map name="augen_schonen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="anzeige_helligkeit()">
    </map>
</div>   
    
 <div id="schrift_anzeigegroesse" class="top" style="display:none">
<img  usemap="#schrift_anzeigegroesse" src="img/schrift_anzeigegroesse.png">
	<map name="schrift_anzeigegroesse">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="anzeige_helligkeit()">
    </map>
</div>   
    
  
 <div id="bildschirmaufloesung" class="top" style="display:none">
<img  usemap="#bildschirmaufloesung" src="img/bildschirmaufloesung.png">
	<map name="bildschirmaufloesung">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="anzeige_helligkeit()">
    </map>
</div>   
    
<div id="weitere_anzeigeeinstellungen" class="top" style="display:none">
<img  usemap="#weitere_anzeigeeinstellungen" src="img/weitere_anzeigeeinstellungen.png">
	<map name="weitere_anzeigeeinstellungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="anzeige_helligkeit()">
        <area alt="notch" shape="rect" coords="30,200,530,265" onclick="notch()">
    </map>
</div>      
    
<div id="notch" class="top" style="display:none">
<img  usemap="#notch" src="img/notch.png">
	<map name="notch">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="weitere_anzeigeeinstellungen()">
    </map>
</div>    

<!-- Apps -->
<div id="apps" class="top" style="display:none">
<img  usemap="#apps" src="img/apps.png">
	<map name="apps">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
        <area alt="apps2" shape="rect" coords="30,130,510,190" onclick="apps2()">
        
    </map>
</div>
    
<div id="apps2" class="top" style="display:none">
<img  usemap="#apps2" src="img/apps2.png">
	<map name="apps2">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="apps()">
        
        <area alt="google_play_store" shape="rect" coords="30,865,510,960" onclick="google_play_store()">
        <area alt="google_play_dienst" shape="rect" coords="30,960,510,1065" onclick="google_play_dienste()">
        
        
    </map>
</div>
    
<div id="google_play_store" class="top" style="display:none">
<img  usemap="#google_play_store" src="img/google_play_store.png">
	<map name="google_play_store">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="apps2()">
        
        
    </map>
</div>
    
<div id="google_play_dienste" class="top" style="display:none">
<img  usemap="#google_play_dienste" src="img/google_play_dienste.png">
	<map name="google_play_dienste">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="apps2()">
        
    </map>
</div>
        
    
<!--    Sicherheit-->
    
<div id="sicherheit" class="top" style="display:none">
<img  usemap="#sicherheit" src="img/sicherheit.png">
	<map name="sicherheit">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
        <area alt="zusaetzliche_einstellungen" shape="rect" coords="30,840,510,900" onclick="zusaetzliche_einstellungen()">
        
    </map>
</div>
    
 <div id="zusaetzliche_einstellungen" class="top" style="display:none">
<img  usemap="#zusaetzliche_einstellungen" src="img/zusaetzliche_einstellungen.png">
	<map name="zusaetzliche_einstellungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="sicherheit()">
        
        <area alt="verschluesselung_und_anmeldedaten" shape="rect" coords="30,195,510,265" onclick="verschluesselung_und_anmeldedaten()">
        
    </map>
</div>  
    
<div id="verschluesselung_und_anmeldedaten" class="top" style="display:none">
<img  usemap="#verschluesselung_und_anmeldedaten" src="img/verschluesselung_und_anmeldedaten.png">
	<map name="verschluesselung_und_anmeldedaten">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="zusaetzliche_einstellungen()">
        
        <area alt="sim_sperre_einrichten" shape="rect" coords="30,130,510,195" onclick="sim_sperre_einrichten()">
        
    </map>
</div>  
    
 <div id="sim_sperre_einrichten" class="top" style="display:none">
<img  usemap="#sim_sperre_einrichten" src="img/sim1-sperre_einrichten.png">
	<map name="sim_sperre_einrichten">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="verschluesselung_und_anmeldedaten()">
    </map>
</div>     
    
    
<!-- Standortzugriff -->

<div id="standortzugriff_top" class="top" style="display:none">
<img  usemap="#standortzugriff_top" src="img/standortzugriff_top.png">
    <map name="standortzugriff_top"></map>
        <div id="standortzugriff" class="scroll" style="display:block;margin-top:-109px">
            <img  usemap="#standortzugriff" src="img/standortzugriff.png">
            <map name="standortzugriff">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
            </map>
        </div> 
</div>
    
    
<!-- Nutzer und Konten -->
<div id="nutzer_und_konten_top" class="top" style="display:none">
<img  usemap="#nutzer_und_konten_top" src="img/nutzer_und_konten_top.png">
    <map name="nutzer_und_konten_top"></map>
        <div id="nutzer_und_konten" class="scroll" style="display:block">
            <img  usemap="#nutzer_und_konten" src="img/nutzer_und_konten.png">
	        <map name="nutzer_und_konten">
        
        
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        <area alt="email_konten" shape="rect" coords="35,390,505,495" onclick="email_konten()">
                
        <area alt="google_konten" shape="rect" coords="35,610,505,715" onclick="google_konten()">
        <area alt="konto_hinzufuegen" shape="rect" coords="35,1260,230,1330" onclick="konto_hinzufuegen()">
        
            </map>
        </div>  
</div>  
    
<div id="email_konten" class="top" style="display:none">
<img  usemap="#email_konten" src="img/email_konten.png">
	<map name="email_konten">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="nutzer_und_konten()">
        
        <area alt="email_einstellungen" shape="rect" coords="30,510,530,610" onclick="email_einstellungen()">
        
    </map>
</div>  
    
<div id="email_einstellungen" class="top" style="display:none">
<img  usemap="#email_einstellungen" src="img/email_einstellungen.png">
	<map name="email_einstellungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="email_konten()">
        
        <area alt="email_konto_hinzufuegen" shape="rect" coords="30,550,275,610" onclick="email_konto_hinzufuegen()">
        
    </map>
</div>  
    
<div id="email_konto_hinzufuegen" class="top" style="display:none">
<img  usemap="#email_konto_hinzufuegen" src="img/email_konto_hinzufuegen.png">
	<map name="email_einstellungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="email_einstellungen()">
        
    </map>
</div>  
    
    
    
<div id="google_konten" class="top" style="display:none">
<img  usemap="#google_konten" src="img/google_konten.png">
	<map name="google_konten">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="nutzer_und_konten()">
        
        <area alt="google_konto_sync" shape="rect" coords="30,180,510,410" onclick="google_konto_sync()">
        
    </map>
</div>  
    
<div id="google_konto_sync" class="top" style="display:none">
<img  usemap="#google_konto_sync" src="img/google_konto_sync.png">
	<map name="google_konto_sync">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konten()">
        
        <area alt="google_konto_entfernen" shape="rect" coords="300,1010,390,1080" onclick="google_konto_entfernen()">
        
    </map>
</div>  
    
<div id="google_konto_entfernen" class="top" style="display:none">
<img  usemap="#google_konto_entfernen" src="img/google_konto_entfernen.png">
	<map name="google_konto_entfernen">
        <area alt="back" shape="rect" coords="0,0,540,1156" onclick="google_konto_sync()">
        
    </map>
</div>  
    
    
    
    
<div id="konto_hinzufuegen_top" class="top" style="display:none">
<img  usemap="#konto_hinzufuegen_top" src="img/konto_hinzufuegen_top.png">
    <map name="konto_hinzufuegen_top"> </map>   
        <div id="konto_hinzufuegen" class="scroll" style="display:block">
            <img  usemap="#konto_hinzufuegen" src="img/konto_hinzufuegen.png">
	       <map name="konto_hinzufuegen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
        <area alt="google_konto_anmeldung_email" shape="rect" coords="35,770,510,880" onclick="google_konto_anmeldung_email()">
        
            </map>
        </div>  
</div>  
    
<div id="google_konto_anmeldung_email" class="top" style="display:none">
<img  usemap="#google_konto_anmeldung_email" src="img/google_konto_anmeldung_email.png">
	<map name="google_konto_anmeldung_email">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="nutzer_und_konten()">
        
        <area alt="google_konto_anmeldung_passwort" shape="rect" coords="372,1000,505,1055" onclick="google_konto_anmeldung_passwort()">
        <area alt="google_konto_namen" shape="rect" coords="30,1000,200,1055" onclick="google_konto_namen()">
        
    </map>
</div>
    
<div id="google_konto_anmeldung_passwort" class="top" style="display:none">
<img  usemap="#google_konto_anmeldung_passwort" src="img/google_konto_anmeldung_passwort.png">
	<map name="google_konto_anmeldung_passwort">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konto_anmeldung_email()">
         <area alt="google_konto_willkommen" shape="rect" coords="372,1000,505,1055" onclick="google_konto_willkommen()">
    </map>
</div>  
    
<div id="google_konto_namen" class="top" style="display:none">
<img  usemap="#google_konto_namen" src="img/google_konto_namen.png">
	<map name="google_konto_namen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konto_anmeldung_email()">
        <area alt="google_konto_gb" shape="rect" coords="372,1000,505,1055" onclick="google_konto_gb()">
    </map>
</div>  
    
<div id="google_konto_gb" class="top" style="display:none">
<img  usemap="#google_konto_gb" src="img/google_konto_gb.png">
	<map name="google_konto_gb">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konto_namen()">
        <area alt="google_konto_email" shape="rect" coords="372,1000,505,1055" onclick="google_konto_email()">
    </map>
</div>  
    
<div id="google_konto_email" class="top" style="display:none">
<img  usemap="#google_konto_email" src="img/google_konto_email.png">
	<map name="google_konto_email">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konto_gb()">
        <area alt="google_konto_passwort_erstellen" shape="rect" coords="372,1000,505,1055" onclick="google_konto_passwort_erstellen()">
    </map>
</div>  
    
<div id="google_konto_passwort_erstellen" class="top" style="display:none">
<img  usemap="#google_konto_passwort_erstellen" src="img/google_konto_passwort_erstellen.png">
	<map name="google_konto_passwort_erstellen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konto_email()">
        <area alt="google_konto_telefonnummer" shape="rect" coords="372,1000,505,1055" onclick="google_konto_telefonnummer()">
    </map>
</div>  
    
<div id="google_konto_telefonnummer" class="top" style="display:none">
<img  usemap="#google_konto_telefonnummer" src="img/google_konto_telefonnummer.png">
	<map name="google_konto_telefonnummer">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="google_konto_passwort_erstellen()">
        <area alt="google_konto_willkommen" shape="rect" coords="372,1000,505,1055" onclick="google_konto_willkommen()">
    </map>
</div>  
    
<div id="google_konto_willkommen" class="top" style="display:none">
<img  usemap="#google_konto_willkommen" src="img/google_konto_willkommen.png">
	<map name="google_konto_willkommen">
    </map>
</div>  
    
    
<!--system_und_aktualisierungen-->
    
<div id="system_und_aktualisierungen" class="top" style="display:none">
<img  usemap="#system_und_aktualisierungen" src="img/system_und_aktualisierungen.png">
	<map name="system_und_aktualisierungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
        <area alt="softwareaktualisierung" shape="rect" coords="30,125,510,195" onclick="softwareaktualisierung()">
        <area alt="zuruecksetzen" shape="rect" coords="30,595,510,665" onclick="zuruecksetzen()">
        
    </map>
</div>   
    
<div id="softwareaktualisierung" class="top" style="display:none">
<img  usemap="#softwareaktualisierung" src="img/softwareaktualisierung.png">
	<map name="softwareaktualisierung">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="system_und_aktualisierungen()">
    </map>
</div>   
    
<div id="zuruecksetzen" class="top" style="display:none">
<img  usemap="#zuruecksetzen" src="img/zuruecksetzen.png">
	<map name="zuruecksetzen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="system_und_aktualisierungen()">
    </map>
</div>     
    
    
<!-- Über das Telefon -->
<div id="ueber_das_telefon_top" class="top" style="display:none">
<img  usemap="#ueber_das_telefon_top" src="img/ueber_das_telefon_top.png">
    <map name="ueber_das_telefon_top"></map>
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        
        <div id="ueber_das_telefon" class="scroll" style="display:block;margin-top:-109px">
        <img  usemap="#ueber_das_telefon" src="img/ueber_das_telefon.png">
	       <map name="ueber_das_telefon">
            
            <area alt="status" shape="rect" coords="30,1725,510,1810" onclick="status()">
        
            </map>
        </div>  
</div>  
    
<div id="status" class="top" style="display:none">
<img  usemap="#status" src="img/status.png">
	<map name="status">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="ueber_das_telefon()">
    </map>
</div>   
    
    
    
    
    
<!-- PLAYSTORE -->
<div id="play_store_startseite" class="top" style="display:none">
<img  usemap="#play_store_startseite" src="img/play_store_startseite.png">
	<map name="play_store_startseite">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="play_store_menue()">
    </map>
</div>   

<div id="play_store_menue" class="top" style="display:none">
<img  usemap="#play_store_menue" src="img/play_store_menue.png">
	<map name="play_store_menue">
        <area alt="back" shape="rect" coords="455,0,540,1156" onclick="play_store_startseite()">
        <area alt="einstellungen" shape="rect" coords="0,680,455,740" onclick="play_store_einstellungen()">
    </map>
</div>   
    
<div id="play_store_einstellungen" class="top" style="display:none">
<img  usemap="#play_store_einstellungen" src="img/play_store_einstellungen.png">
	<map name="play_store_einstellungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="play_store_menue()">
    </map>
</div>   
    
    
<!-- MESSENGER -->

<div id="messenger" class="top" style="display:none">
<img  usemap="#messenger" src="img/messenger.png">
	<map name="messenger">
        <area alt="menue" shape="rect" coords="480,55,540,105" onclick="messenger_menue()">
    </map>
</div> 

<div id="messenger_menue" class="top" style="display:none">
<img  usemap="#messenger_menue" src="img/messenger_menue.png">
	<map name="messenger_menue">
        <area alt="back" shape="rect" coords="240,285,540,330" onclick="messenger_einstellungen()">
    </map>
</div> 
    
<div id="messenger_einstellungen" class="top" style="display:none">
<img  usemap="#messenger_einstellungen" src="img/messenger_einstellungen.png">
	<map name="messenger_einstellungen">
        <area alt="back" shape="rect" coords="0,50,80,110" onclick="messenger()">
        <area alt="erweitert" shape="rect" coords="0,700,540,780" onclick="messenger_einstellungen_erweitert()">
    </map>
</div> 
    
<div id="messenger_einstellungen_erweitert_top" class="top" style="display:none">
<img  usemap="#messenger_einstellungen_erweitert_top" src="img/messenger_einstellungen_erweitert_top.png">
    <map name="messenger_einstellungen_erweitert_top"></map>
        <div id="messenger_einstellungen_erweitert" class="scroll" style="display:block">
            <img  usemap="#messenger_einstellungen_erweitert" src="img/messenger_einstellungen_erweitert.png">
	       <map name="messenger_einstellungen_erweitert">
                <area alt="back" shape="rect" coords="0,50,80,110" onclick="messenger_einstellungen()">
            </map>
        </div> 
</div> 
    
    
</body>
</html>