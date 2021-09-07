function statusleiste() {
    document.getElementById('startseite').style.display = 'none';
    document.getElementById('statusleiste').style.display = 'block';
}

function startseite() {
    document.getElementById('statusleiste').style.display = 'none';
    document.getElementById('einstellungen_top').style.display = 'none';
     document.getElementById('wlan_aus').style.display = 'none';
    document.getElementById('wlan_ein').style.display = 'none';
    document.getElementById('netzwerk_hinzufuegen').style.display = 'none';
    document.getElementById('bluetooth_aus').style.display = 'none';
    document.getElementById('bluetooth_ein').style.display = 'none';
    document.getElementById('mobilfunknetz').style.display = 'none';
    document.getElementById('mobile_daten').style.display = 'none';
    document.getElementById('APNs').style.display = 'none';
    document.getElementById('bevorzugter_netzwerkmodus').style.display = 'none';
    document.getElementById('netzwerkauswahl').style.display = 'none';
    document.getElementById('weitere_verbindungen').style.display = 'none';
    document.getElementById('nfc').style.display = 'none';
    document.getElementById('huawei_share').style.display = 'none';
    document.getElementById('privates_dns').style.display = 'none';
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    document.getElementById('farbmodus_temperatur').style.display = 'none';
    document.getElementById('augen_schonen').style.display = 'none';
    document.getElementById('schrift_anzeigegroesse').style.display = 'none';
    document.getElementById('bildschirmaufloesung').style.display = 'none'; 
    
    document.getElementById('apps').style.display = 'none';
      document.getElementById('apps2').style.display = 'none';
    document.getElementById('google_play_store').style.display = 'none';
    document.getElementById('google_play_dienste').style.display = 'none';
    
    
    document.getElementById('sicherheit').style.display = 'none';
    document.getElementById('zusaetzliche_einstellungen').style.display = 'none';
    document.getElementById('verschluesselung_und_anmeldedaten').style.display = 'none'; 
    document.getElementById('sim_sperre_einrichten').style.display = 'none'; 
    document.getElementById('system_und_aktualisierungen').style.display = 'none';
    document.getElementById('softwareaktualisierung').style.display = 'none'; 
     document.getElementById('zuruecksetzen').style.display = 'none'; 
    
    
    
    document.getElementById('startseite').style.display = 'block';
}

function einstellungen() {
    document.getElementById('statusleiste').style.display = 'none';
    document.getElementById('startseite').style.display = 'none';
    document.getElementById('wlan_aus').style.display = 'none';
    document.getElementById('wlan_ein').style.display = 'none';
    document.getElementById('bluetooth_aus').style.display = 'none';
    document.getElementById('bluetooth_ein').style.display = 'none';
    document.getElementById('mobilfunknetz').style.display = 'none';
    document.getElementById('weitere_verbindungen').style.display = 'none';
    document.getElementById('startbildschirm_hintergrund').style.display = 'none';
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    document.getElementById('apps').style.display = 'none';
    document.getElementById('sicherheit').style.display = 'none';
    document.getElementById('standortzugriff_top').style.display = 'none';
    
    document.getElementById('nutzer_und_konten').style.display = 'none';
    document.getElementById('system_und_aktualisierungen').style.display = 'none';
    document.getElementById('ueber_das_telefon').style.display = 'none';
    
    document.getElementById('play_store_startseite').style.display = 'none';
    document.getElementById('play_store_menue').style.display = 'none';
    document.getElementById('play_store_einstellungen').style.display = 'none';
    
    document.getElementById('einstellungen_top').style.display = 'block';
}


//WLAN
function wlan_ein() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('wlan_aus').style.display = 'none';
    document.getElementById('netzwerk_hinzufuegen').style.display = 'none';
    
    document.getElementById('wlan_ein').style.display = 'block';
}
function wlan_aus() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('wlan_ein').style.display = 'none';
    
    document.getElementById('wlan_aus').style.display = 'block';
}
function netzwerk_hinzufuegen(){
    document.getElementById('wlan_ein').style.display = 'none';
    
    document.getElementById('netzwerk_hinzufuegen').style.display = 'block';
}

//Bluetooth
function bluetooth_ein() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('bluetooth_aus').style.display = 'none';
    
    document.getElementById('bluetooth_ein').style.display = 'block';
}
function bluetooth_aus() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('bluetooth_ein').style.display = 'none';
    
    document.getElementById('bluetooth_aus').style.display = 'block';
}


//Mobilfunknetz
function mobilfunknetz() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('mobile_daten').style.display = 'none';
    document.getElementById('sim_verwaltung').style.display = 'none';
    document.getElementById('tethering_mobiler_hotspot').style.display = 'none';
    document.getElementById('datennutzung').style.display = 'none';
    
    document.getElementById('mobilfunknetz').style.display = 'block';
}
function mobile_daten() {
    document.getElementById('mobilfunknetz').style.display = 'none';
    document.getElementById('APNs').style.display = 'none';
    document.getElementById('bevorzugter_netzwerkmodus').style.display = 'none';
    document.getElementById('netzwerkauswahl').style.display = 'none';
    document.getElementById('mobile_daten').style.display = 'block';
}
function APNs(){
    document.getElementById('mobile_daten').style.display = 'none';
    document.getElementById('APNs').style.display = 'block';
}
function bevorzugter_netzwerkmodus(){
    document.getElementById('mobile_daten').style.display = 'none';
    document.getElementById('bevorzugter_netzwerkmodus').style.display = 'block';
}
function netzwerkauswahl (){
    document.getElementById('mobile_daten').style.display = 'none';
    document.getElementById('netzwerkauswahl').style.display = 'block';
}


function sim_verwaltung() {
    document.getElementById('mobilfunknetz').style.display = 'none';
    document.getElementById('sim_verwaltung').style.display = 'block';
}
function tethering_mobiler_hotspot() {
    document.getElementById('mobilfunknetz').style.display = 'none';
    document.getElementById('tethering_mobiler_hotspot').style.display = 'block';
}
function datennutzung() {
    document.getElementById('mobilfunknetz').style.display = 'none';
    document.getElementById('datennutzung').style.display = 'block';
}
//weitere verbindungen
function weitere_verbindungen() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('nfc').style.display = 'none';
    document.getElementById('huawei_share').style.display = 'none';
    document.getElementById('privates_dns').style.display = 'none';
    
    document.getElementById('weitere_verbindungen').style.display = 'block';
}
function nfc() {
    document.getElementById('weitere_verbindungen').style.display = 'none';
    
    document.getElementById('nfc').style.display = 'block';
}
function huawei_share() {
    document.getElementById('weitere_verbindungen').style.display = 'none';
    
    document.getElementById('huawei_share').style.display = 'block';
}
function privates_dns() {
    document.getElementById('weitere_verbindungen').style.display = 'none';
    
    document.getElementById('privates_dns').style.display = 'block';
}
//startbildschirm_hintergrund
function startbildschirm_hintergrund(){
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('startbildschirmstil').style.display = 'none';
    
     document.getElementById('startbildschirm_hintergrund').style.display = 'block';
}
function startbildschirmstil(){
   document.getElementById('startbildschirm_hintergrund').style.display = 'none';
    document.getElementById('startbildschirmstil').style.display = 'block';
}

//Anzeige Helligkeit
function anzeige_helligkeit(){
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('farbmodus_temperatur').style.display = 'none';  document.getElementById('augen_schonen').style.display = 'none';  document.getElementById('schrift_anzeigegroesse').style.display = 'none';  document.getElementById('bildschirmaufloesung').style.display = 'none';  document.getElementById('weitere_anzeigeeinstellungen').style.display = 'none';
    
    
    document.getElementById('anzeige_helligkeit').style.display = 'block';
}
function farbmodus_temperatur(){
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    
    document.getElementById('farbmodus_temperatur').style.display = 'block';
}
function augen_schonen(){
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    
    document.getElementById('augen_schonen').style.display = 'block';
}
function schrift_anzeigegroesse(){
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    
    document.getElementById('schrift_anzeigegroesse').style.display = 'block';
}
function bildschirmaufloesung(){
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    
    document.getElementById('bildschirmaufloesung').style.display = 'block';
}
function weitere_anzeigeeinstellungen(){
    document.getElementById('anzeige_helligkeit').style.display = 'none';
    document.getElementById('notch').style.display = 'none';
    document.getElementById('weitere_anzeigeeinstellungen').style.display = 'block';
}
function notch(){
     document.getElementById('weitere_anzeigeeinstellungen').style.display = 'none';
     document.getElementById('notch').style.display = 'block';
}

//Apps
function apps(){
    document.getElementById('einstellungen_top').style.display = 'none';  document.getElementById('apps2').style.display = 'none'; 
    
    document.getElementById('apps').style.display = 'block';
}
function apps2(){
    document.getElementById('apps').style.display = 'none';
    document.getElementById('google_play_store').style.display = 'none';
    document.getElementById('google_play_dienste').style.display = 'none';
    
    
    document.getElementById('apps2').style.display = 'block';
}
function google_play_store(){
    document.getElementById('apps2').style.display = 'none';
    document.getElementById('google_play_store').style.display = 'block';
}

function google_play_dienste(){
    document.getElementById('apps2').style.display = 'none';
    document.getElementById('google_play_dienste').style.display = 'block';

}


//Sicherheit
function sicherheit(){
      document.getElementById('einstellungen_top').style.display = 'none';  document.getElementById('zusaetzliche_einstellungen').style.display = 'none'; 
    
    document.getElementById('sicherheit').style.display = 'block';
}
function zusaetzliche_einstellungen(){
    document.getElementById('sicherheit').style.display = 'none';
    document.getElementById('verschluesselung_und_anmeldedaten').style.display = 'none';
    document.getElementById('zusaetzliche_einstellungen').style.display = 'block'; 
}
function verschluesselung_und_anmeldedaten(){
    document.getElementById('zusaetzliche_einstellungen').style.display = 'none';
    document.getElementById('sim_sperre_einrichten').style.display = 'none';
    document.getElementById('verschluesselung_und_anmeldedaten').style.display = 'block';
}
function sim_sperre_einrichten(){
    document.getElementById('verschluesselung_und_anmeldedaten').style.display = 'none';
     document.getElementById('sim_sperre_einrichten').style.display = 'block';
}

//Standortzugriff
function standortzugriff(){
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('standortzugriff_top').style.display = 'block';
}

// Nutzer und Konten 
function nutzer_und_konten(){
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('email_konten').style.display = 'none';
    document.getElementById('google_konten').style.display = 'none';
    document.getElementById('konto_hinzufuegen').style.display = 'none';
    document.getElementById('nutzer_und_konten').style.display = 'block';
}

function email_konten(){
     document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('email_einstellungen').style.display = 'none';
    document.getElementById('email_konten').style.display = 'block';
  
}
function email_einstellungen(){
    document.getElementById('email_konten').style.display = 'none';
    document.getElementById('email_konto_hinzufuegen').style.display = 'none';
    document.getElementById('email_einstellungen').style.display = 'block';
}
function email_konto_hinzufuegen(){
    document.getElementById('email_einstellungen').style.display = 'none';
    document.getElementById('email_konto_hinzufuegen').style.display = 'block';
}




function google_konten(){
    document.getElementById('nutzer_und_konten').style.display = 'none';
    document.getElementById('google_konto_sync').style.display = 'none';
    
    document.getElementById('google_konten').style.display = 'block';
}
function google_konto_sync(){
    document.getElementById('google_konten').style.display = 'none';
    document.getElementById('google_konto_entfernen').style.display = 'none';
    
    document.getElementById('google_konto_sync').style.display = 'block';
}
function google_konto_entfernen(){
    document.getElementById('google_konto_sync').style.display = 'none';
    document.getElementById('google_konto_entfernen').style.display = 'block';
}

function konto_hinzufuegen(){
    document.getElementById('nutzer_und_konten').style.display = 'none';
    document.getElementById('konto_hinzufuegen').style.display = 'block';
}
function google_konto_anmeldung_email(){
    document.getElementById('konto_hinzufuegen').style.display = 'none';
    document.getElementById('google_konto_anmeldung_passwort').style.display = 'none';
    document.getElementById('google_konto_namen').style.display = 'none';
    document.getElementById('google_konto_anmeldung_email').style.display = 'block';
}
function google_konto_anmeldung_passwort(){
    document.getElementById('google_konto_anmeldung_email').style.display = 'none';
    document.getElementById('google_konto_anmeldung_passwort').style.display = 'block';
}
function google_konto_namen(){
     document.getElementById('google_konto_anmeldung_email').style.display = 'none';
   document.getElementById('google_konto_gb').style.display = 'none';
    
     document.getElementById('google_konto_namen').style.display = 'block';
}
function google_konto_gb(){
    document.getElementById('google_konto_namen').style.display = 'none';
    document.getElementById('google_konto_email').style.display = 'none';
    document.getElementById('google_konto_gb').style.display = 'block';
}
function google_konto_email(){
    document.getElementById('google_konto_gb').style.display = 'none';
    document.getElementById('google_konto_passwort_erstellen').style.display = 'none';
    document.getElementById('google_konto_email').style.display = 'block';
}
function google_konto_passwort_erstellen(){
    document.getElementById('google_konto_email').style.display = 'none';
    document.getElementById('google_konto_telefonnummer').style.display = 'none';
    document.getElementById('google_konto_passwort_erstellen').style.display = 'block';
}
function google_konto_telefonnummer(){
    document.getElementById('google_konto_passwort_erstellen').style.display = 'none';
    document.getElementById('google_konto_telefonnummer').style.display = 'block';
}
function google_konto_willkommen(){
     document.getElementById('google_konto_telefonnummer').style.display = 'none';
    document.getElementById('google_konto_anmeldung_passwort').style.display = 'none';
    document.getElementById('google_konto_willkommen').style.display = 'block';
}



// system_und_aktualisierungen
function system_und_aktualisierungen(){
    document.getElementById('einstellungen_top').style.display = 'none';  document.getElementById('softwareaktualisierung').style.display = 'none'; 
    document.getElementById('zuruecksetzen').style.display = 'none'; 
    document.getElementById('system_und_aktualisierungen').style.display = 'block';
}
function softwareaktualisierung(){
   document.getElementById('system_und_aktualisierungen').style.display = 'none';
    document.getElementById('softwareaktualisierung').style.display = 'block'; 
}
function zuruecksetzen(){
    document.getElementById('system_und_aktualisierungen').style.display = 'none';
    document.getElementById('zuruecksetzen').style.display = 'block'; 
}

//Über das Telefon
function ueber_das_telefon(){
     document.getElementById('einstellungen_top').style.display = 'none';
     document.getElementById('status').style.display = 'none';
    
    document.getElementById('ueber_das_telefon_top').style.display = 'block'; 
}
function status(){
    document.getElementById('ueber_das_telefon_top').style.display = 'none'; 
    document.getElementById('status').style.display = 'block'; 
}

//Play Store
function play_store_startseite(){
    document.getElementById('startseite').style.display = 'none';
    document.getElementById('play_store_menue').style.display = 'none'; 
    document.getElementById('play_store_startseite').style.display = 'block';
}
function play_store_menue(){
    document.getElementById('play_store_startseite').style.display = 'none';
    document.getElementById('play_store_einstellungen').style.display = 'none'; 
    document.getElementById('play_store_menue').style.display = 'block';
}
function play_store_einstellungen(){
    document.getElementById('play_store_menue').style.display = 'none'; 
    document.getElementById('play_store_einstellungen').style.display = 'block';
}

//Messenger
function messenger(){
    document.getElementById('startseite').style.display = 'none';
    document.getElementById('messenger_menue').style.display = 'none'; document.getElementById('messenger_einstellungen').style.display = 'none'; 
    
    document.getElementById('messenger').style.display = 'block';
}
function messenger_menue(){
    document.getElementById('messenger').style.display = 'none'; 
    
    document.getElementById('messenger_menue').style.display = 'block';
}
function messenger_einstellungen(){
      document.getElementById('messenger_menue').style.display = 'none';
    document.getElementById('messenger_einstellungen_erweitert').style.display = 'none';
    document.getElementById('messenger_einstellungen').style.display = 'block'; 
}
function messenger_einstellungen_erweitert(){
    document.getElementById('messenger_einstellungen').style.display = 'none'; 
    document.getElementById('messenger_einstellungen_erweitert').style.display = 'block'; 
    
}
