<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'scorm', language 'lt_uni', version '4.2'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktyvinimas';
$string['activityloading'] = 'Būsite automatiškai peradresuoti į veiklą, esančią';
$string['activitypleasewait'] = 'Įkeliama veikla, palaukite...';
$string['adminsettings'] = 'Administratoriaus nustatymai';
$string['advanced'] = 'Parametrai';
$string['aicchacpkeepsessiondata'] = 'AICC HACP sesijos duomenys';
$string['aicchacpkeepsessiondata_desc'] = 'Trukmė dienomis kiek laikyti AICC HACP sesijos duomenis (Aukštas skaičius gali užpildyti lentelę su senais duomenimis, bet gali būti naudingas derinant)';
$string['aicchacptimeout'] = 'AICC HACP minutės pertraukėlė';
$string['aicchacptimeout_desc'] = 'Trukmė minutėmis kai išorinės AICC HACP sesijos gali likti atidarytos';
$string['allowapidebug'] = 'Aktyvinti API derinimą ir sekimą (nustatyti įrašymo šabloną naudojant „apidebugmask“)';
$string['allowtypeaicchacp'] = 'Įjungti išorinį AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Jei įjungta, tai leidžia AICC HACP išorinę komunikaciją nereikalaujant vartotojo prisijungimo, kad galėtų skelbti prašymus iš išorinio AICC paketo.';
$string['allowtypeexternal'] = 'Įjungti išorinio paketo tipą';
$string['allowtypeexternalaicc'] = 'Įjungti tiesioginį AICC url';
$string['allowtypeexternalaicc_desc'] = 'Jei įjungtas, tai leidžia tiesioginį URL į paprastą AICC paketą';
$string['allowtypelocalsync'] = 'Įjungti atsisiųsto paketo tipą';
$string['apidebugmask'] = 'API derinimo įrašymo šablonas – naudoti paprastą reguliariąją išraišką &lt;username&gt;:&lt;activityname&gt;, pvz., naudojant admin:.* bus derinamas administratoriaus vartotojas';
$string['areacontent'] = 'Turinio failai';
$string['areapackage'] = 'Paketo failas';
$string['asset'] = 'Turtas';
$string['assetlaunched'] = 'Turtas – peržiūrėta';
$string['attempt'] = 'bandymas';
$string['attempt1'] = '1 bandymas';
$string['attempts'] = 'Bandymai';
$string['attemptsx'] = 'Bandymų: {$a}';
$string['attr_error'] = 'Neteisinga žymės {$a->tag} atributo ({$a->attr}) reikšmė.';
$string['autocontinue'] = 'Automatinis tęsimas';
$string['autocontinue_help'] = 'Jei įjungta, paskesni mokymosi objektai paleidžiami automatiškai. Kitu atveju reikia naudoti mygtuką Tęsti.';
$string['autocontinuedesc'] = 'Ši nuostata nustato numatytąjį automatinį veiklos tęsimą';
$string['averageattempt'] = 'Vidutiniškai bandymų';
$string['badmanifest'] = 'Kelios deklaracijos klaidos: žr. klaidų žurnalą';
$string['browse'] = 'Peržiūra';
$string['browsed'] = 'Naršyta';
$string['browsemode'] = 'Peržiūros režimas';
$string['browserepository'] = 'Naršyti saugyklą';
$string['cannotfindsco'] = 'Nepavyko rasti SCO';
$string['chooseapacket'] = 'Pasirinkti arba naujinti paketą';
$string['completed'] = 'Užbaigta';
$string['completionscorerequired'] = 'Reikalingas minimalus rezultatas';
$string['completionstatus_completed'] = 'Baigtas';
$string['completionstatus_passed'] = 'Išlaikyta';
$string['confirmloosetracks'] = 'ĮSPĖJIMAS: atrodo, kad paketas pakeistas arba modifikuotas. Jei buvo pakeista paketo struktūra, naujinimo proceso metu gali būti prarasti kai kurių vartotojų sekimai.';
$string['contents'] = 'Turinys';
$string['coursepacket'] = 'Kursų paketas';
$string['coursestruct'] = 'Kursų struktūra';
$string['currentwindow'] = 'Dabartinis langas';
$string['datadir'] = 'Failų sistemos klaida: nepavyksta sukurti kursų duomenų katalogo';
$string['defaultdisplaysettings'] = 'Numatyti vaizdavimo nustatymai';
$string['defaultgradesettings'] = 'Numatyti vertinimo nustatymai';
$string['defaultothersettings'] = 'Kiti numatyti nustatymai';
$string['deleteallattempts'] = 'Naikinti visus SCORM bandymus';
$string['deleteattemptcheck'] = 'Ar esate visiškai įsitikinę, kad norite visiškai panaikinti šiuos bandymus?';
$string['deleteselected'] = 'Naikinti pasirinktus bandymus';
$string['deleteuserattemptcheck'] = 'Ar jūs įsitikinęs kad norite pašalinti savo bandymus?';
$string['details'] = 'Sekimo išsami informacija';
$string['directories'] = 'Rodyti katalogų saitus';
$string['disabled'] = 'Išjungtas';
$string['display'] = 'Rodyti paketą';
$string['displayattemptstatus'] = 'Rodyti bandymo būseną';
$string['displayattemptstatus_help'] = 'Jei įjungta, bandymų balai ir įverčiai rodomi SCORM struktūros puslapyje.';
$string['displayattemptstatusdesc'] = 'Ši nuostata nustato bandymų būsenos rodymo parametro numatytąją reikšmę';
$string['displaycoursestructure'] = 'Įrašų puslapyje rodyti kursų struktūrą';
$string['displaycoursestructure_help'] = 'Jei įjungta, SCORM struktūros puslapyje rodomas turinys.';
$string['displaycoursestructuredesc'] = 'Ši nuostata nustato kursų struktūros rodymo įrašų puslapyje parametro numatytąją reikšmę';
$string['displaydesc'] = 'Ši nuostata nustato numatytąją reikšmę, ar rodyti veiklos paketą, ar ne.';
$string['displaysettings'] = 'Rodyti nustatymus';
$string['domxml'] = 'DOMXML išorinė biblioteka';
$string['element'] = 'Elementas';
$string['enter'] = 'Įvesti';
$string['entercourse'] = 'Įvesti kursus';
$string['errorlogs'] = 'Klaidų žurnalas';
$string['everyday'] = 'Kiekvieną dieną';
$string['everytime'] = 'Kiekvieną kartą naudojant';
$string['exceededmaxattempts'] = 'Pasiekėte didžiausią leistiną bandymų skaičių.';
$string['exit'] = 'Išeiti iš kursų';
$string['exitactivity'] = 'Išeiti iš veiklos';
$string['expired'] = 'Apgailestaujame, ši veikla uždaryta {$a} ir nebegalima';
$string['external'] = 'Naujinti išorinio paketo laiko apskaičiavimą';
$string['failed'] = 'Nepavyko';
$string['finishscorm'] = 'Jei baigėte peržiūrėti šį išteklių, {$a}';
$string['finishscormlinkname'] = 'spustelėkite čia, kad grįžtumėte į kursų puslapį';
$string['firstaccess'] = 'Pirma prieiga';
$string['firstattempt'] = 'Pirmasis bandymas';
$string['forcecompleted'] = 'Ši nuostata nustato priverstinio užbaigimo parametro numatytąją reikšmę';
$string['forcecompleted_help'] = 'Jei įjungta, dabartinio bandymo būsena priverstinai nustatoma kaip Užbaigta. Šis parametras taikomas tik SCORM 1.2 paketams. Tai naudinga, jei SCORM paketas peržiūros ar naršymo režimu netinkamai apdoroja pakartotinę bandymo peržiūrą arba dėl kitų priežasčių pateikia neteisingą užbaigimo būseną.';
$string['forcecompleteddesc'] = 'Ši nuostata nustato priverstinio užbaigimo parametro numatytąją reikšmę';
$string['forcejavascript'] = 'Reikalauti, kad vartotojai įjungtų „JavaScript“';
$string['forcejavascript_desc'] = 'Jei įjungtas (rekomenduojama) užkerta priėjimą prie SCORM objektų kai JavaScript yra nepalaikomas arba išjungtas vartotojo naršyklėje. Jei ši funkcija išjungta vartotojas gali matyti SCORM bet API komunikacija neįvyks ir vertinimo informacija nebus išsaugota.';
$string['forcejavascriptmessage'] = 'Norint peržiūrėti šį objektą reikalinga „JavaScript“. Naršyklėje įjunkite „JavaScript“ ir bandykite dar kartą.';
$string['forcenewattempts'] = 'Priverstinis naujas bandymas';
$string['found'] = 'Deklaracija rasta';
$string['frameheight'] = 'Ši nuostata nustato numatytąjį etapo rėmelio arba lango aukštį';
$string['framewidth'] = 'Ši nuostata nustato numatytąjį etapo rėmelio arba lango plotį';
$string['fullscreen'] = 'Užpildyti visą ekraną';
$string['general'] = 'Bendrieji duomenys';
$string['gradeaverage'] = 'Vidutinis įvertis';
$string['gradeforattempt'] = 'Bandymo įvertis';
$string['gradehighest'] = 'Aukščiausias įvertis';
$string['grademethod'] = 'Vertinimo metodas';
$string['grademethod_help'] = 'Vertinimo metodas apibrėžia, kaip nustatomas veiklos vieno bandymo įvertis. Yra 4 vertinimo metodai: * Mokymosi objektai – užbaigtų / išlaikytų mokymosi objektų skaičius * Aukščiausias įvertis – aukščiausias balas iš visų balų, gautų už išlaikytus mokymosi objektus * Vidutinis įvertis – visų balų vidurkis * Įverčių suma – visų balų suma';
$string['grademethoddesc'] = 'Ši nuostata nustato numatytąjį veiklos vertinimo metodą';
$string['gradereported'] = 'Įvertis užregistruotas';
$string['gradescoes'] = 'Mokymosi objektai';
$string['gradesettings'] = 'Vertinimų nustatymai';
$string['gradesum'] = 'Įverčių suma';
$string['height'] = 'Aukštis';
$string['hidden'] = 'Paslėpta';
$string['hidebrowse'] = 'Išjungti peržiūros režimą';
$string['hidebrowse_help'] = 'Naudodamas peržiūros režimą klausytojas gali naršyti veiklą prieš bandydamas ją atlikti. Jei peržiūros režimas išjungtas, peržiūros mygtukas yra paslėptas.';
$string['hidebrowsedesc'] = 'Ši nuostata nustato numatytąją reikšmę – ar išjungti peržiūros režimą, ar jį įjungti';
$string['hideexit'] = 'Slėpti išėjimo saitą';
$string['hidereview'] = 'Slėpti peržiūros mygtuką';
$string['hidetoc'] = 'Leistuve rodyti kursų struktūrą';
$string['hidetoc_help'] = 'Šis parametras nurodo, kaip SCORM leistuve rodomas turinys.';
$string['hidetocdesc'] = 'Ši nuostata nustato numatytąją reikšmę – ar SCORM leistuve rodyti kursų struktūrą (TOC), ar ją slėpti';
$string['highestattempt'] = 'Aukščiausiai įvertintas bandymas';
$string['identifier'] = 'Klausimo identifikatorius';
$string['incomplete'] = 'Neužbaigta';
$string['info'] = 'Informacija';
$string['interactions'] = 'Sąveika';
$string['invalidactivity'] = 'SCORM veikla yra netinkama';
$string['invalidhacpsession'] = 'Negaliojanti HACP sesija';
$string['invalidmanifestresource'] = 'ĮSPĖJIMAS: Šie ištekliai buvo paminėti jūsų deklaracijoje, bet nebuvo surasti:';
$string['invalidurl'] = 'Nurodytas negaliojantis URL';
$string['last'] = 'Paskutinės prieigos data';
$string['lastaccess'] = 'Paskutinė prieiga';
$string['lastattempt'] = 'Paskutinis bandymas';
$string['lastattemptlock'] = 'Užrakinti po paskutinio bandymo';
$string['lastattemptlock_help'] = 'Jei įjungta, klausytojas, išnaudojęs visus jam priskirtus bandymus, nebegali paleisti SCORM leistuvo.';
$string['lastattemptlockdesc'] = 'Ši nuostata nustato užrakinimo po paskutinio bandymo parametro numatytąją reikšmę';
$string['location'] = 'Rodyti vietos juostą';
$string['max'] = 'Didžiausias balas';
$string['maximumattempts'] = 'Bandymų skaičius';
$string['maximumattempts_help'] = 'Šis parametras įjungia bandymų skaičiaus apribojimą. Jis taikomas tik SCORM 1.2 ir AICC paketams.';
$string['maximumattemptsdesc'] = 'Ši nuostata nustato veiklos numatytąjį didžiausią bandymų skaičių';
$string['maximumgradedesc'] = 'Ši nuostata nustato veiklos numatytąjį didžiausią įvertį';
$string['menubar'] = 'Rodyti meniu juostą';
$string['min'] = 'Mažiausias balas';
$string['missing_attribute'] = 'Trūksta žymės {$a->tag} atributo {$a->attr}';
$string['missing_tag'] = 'Trūksta žymės {$a->tag}';
$string['missingparam'] = 'Trūksta būtino parametro arba jis netinkamas';
$string['mode'] = 'Režimas';
$string['modulename'] = 'SCORM paketas';
$string['modulename_help'] = 'SCORM ir AICC yra specifikacijų, užtikrinančių veiksmų suderinamumą, leidžiančių pasiekti ir pakartotinai naudoti žiniatinkliu pagrįstą mokymosi turinį, rinkinys. SCORM/AICC modulis leidžia į kursus įtraukti SCORM/AICC paketus.';
$string['modulenameplural'] = 'SCORM paketai';
$string['navigation'] = 'Naršymas';
$string['newattempt'] = 'Pradėti naują bandymą';
$string['next'] = 'Tęsti';
$string['no_attributes'] = 'Žymė {$a->tag} privalo turėti atributus';
$string['no_children'] = 'Žymė {$a->tag} privalo turėti antrinį elementą';
$string['noactivity'] = 'Nėra, apie ką pranešti';
$string['noattemptsallowed'] = 'Leidžiamų bandymų skaičius';
$string['noattemptsmade'] = 'Išnaudotų bandymų skaičius';
$string['nolimit'] = 'Bandymų skaičius neribotas';
$string['nomanifest'] = 'Deklaracija nerasta';
$string['noprerequisites'] = 'Apgailestaujame, bet išpildyta nepakankamai būtinų sąlygų, kad galėtumėte pasiekti šį mokymosi objektą';
$string['noreports'] = 'Nėra rodytinos ataskaitos';
$string['normal'] = 'Įprasta';
$string['noscriptnoscorm'] = 'Jūsų naršyklė nepalaiko „JavaScript“ arba „JavaScript“ palaikymas išjungtas. Šis SCORM paketas gali būti netinkamai atkuriamas arba neteisingai įrašomi duomenys.';
$string['not_corr_type'] = 'Neatitinka žymės {$a->tag} tipas';
$string['notattempted'] = 'Nebandyta';
$string['notopenyet'] = 'Apgailestaujame, ši veikla negalima iki {$a}';
$string['objectives'] = 'Tikslai';
$string['optallstudents'] = 'visi vartotojai';
$string['optattemptsonly'] = 'tik vartotojai, turintys bandymų';
$string['options'] = 'Parinktys (draudžiamos kai kurių naršyklių)';
$string['optionsadv'] = 'Nustatymai (Išplėstiniai)';
$string['optionsadv_desc'] = 'Jei pažymėta, lango nustatymai bus nustatyti kaip išplėstiniai nustatymai formoje';
$string['optnoattemptsonly'] = 'tik vartotojai, neturintys bandymų';
$string['organization'] = 'Organizacija';
$string['organizations'] = 'Organizacijos';
$string['othersettings'] = 'Papildomi parametrai';
$string['package'] = 'Paketo failas';
$string['package_help'] = 'Paketo failas yra ZIP (arba PIF) failas, kuriame yra SCORM/AICC kursų apibrėžimo failai.';
$string['packagedir'] = 'Failų sistemos klaida: nepavyksta sukurti paketo katalogo';
$string['packagefile'] = 'Nenurodytas paketo failas';
$string['packageurl_help'] = 'Užuot pasirinkus failą naudojant failų parinkiklį, šis parametras leidžia nurodyti SCORM paketo URL.';
$string['page-mod-scorm-x'] = 'Bet kuris SCORM modulio puslapis';
$string['pagesize'] = 'Puslapio dydis';
$string['passed'] = 'Pavyko';
$string['php5'] = 'PHP 5 (DOMXML prigimtinė biblioteka)';
$string['pluginadministration'] = 'SCORM/AICC administravimas';
$string['pluginname'] = 'SCORM paketas';
$string['popup'] = 'Naujas langas';
$string['popupmenu'] = 'Išplečiamajame meniu';
$string['popupopen'] = 'Atidaryti paketą naujame lange';
$string['popupsblocked'] = 'Atrodo, kad blokuojami iššokantieji langai, todėl negalima atkurti šio SCORM modulio. Prieš vėl paleisdami patikrinkite naršyklės parametrus.';
$string['position_error'] = 'Žymė {$a->tag} negali būti žymės {$a->parent} antrinis elementas';
$string['preferencespage'] = 'Tik šio puslapio nuostatos';
$string['preferencesuser'] = 'Šios ataskaitos nuostatos';
$string['prev'] = 'Ankstesnis';
$string['raw'] = 'Neapdorotas balas';
$string['regular'] = 'Įprasta deklaracija';
$string['report'] = 'Ataskaita';
$string['reportcountallattempts'] = '{$a->nbusers} vartotojo (-ų) {$a->nbattempts} bandymas (-ų) iš {$a->nbresults} rezultatų';
$string['reportcountattempts'] = 'Rezultatų: {$a->nbresults} (vartotojų: {$a->nbusers})';
$string['reports'] = 'Ataskaitos';
$string['result'] = 'Rezultatas';
$string['results'] = 'Rezultatai';
$string['review'] = 'Peržiūrėti';
$string['reviewmode'] = 'Peržiūros režimas';
$string['scoes'] = 'Mokymosi objektai';
$string['score'] = 'Balas';
$string['scorm:deleteownresponses'] = 'Pašalinti savo bandymus';
$string['scorm:deleteresponses'] = 'Naikinti SCORM bandymus';
$string['scorm:savetrack'] = 'Įrašyti sekimus';
$string['scorm:skipview'] = 'Praleisti apžvalgą';
$string['scorm:viewreport'] = 'Peržiūrėti ataskaitas';
$string['scorm:viewscores'] = 'Peržiūrėti balus';
$string['scormclose'] = 'Iki';
$string['scormcourse'] = 'Mokymosi kursai';
$string['scormloggingoff'] = 'API prisijungimas išjungtas';
$string['scormloggingon'] = 'API prisijungimas įjungtas';
$string['scormopen'] = 'Atidaryti';
$string['scormresponsedeleted'] = 'Panaikinti vartotojo bandymai';
$string['scormtype'] = 'Tipas';
$string['scormtype_help'] = 'Šis parametras nustato, kaip paketas įtraukiamas į kursus. Yra 4 parinktys: * Įkeliamas paketas – SCORM paketą galima pasirinkti naudojant failų parinkiklį * Išorinė SCORM deklaracija – galima nurodyti imsmanifest.xml URL. Pastaba: jei URL domeno pavadinimas kitoks nei jūsų svetainės, tada geriau rinktis parinktį Atsisiunčiamas paketas, nes kitaip nebus įrašyti įverčiai. * Atsisiunčiamas paketas – galima nurodyti paketo URL. Paketas bus išskleistas ir įrašytas vietiniame diske ir atnaujintas, kai bus atnaujintas išorinis SCORM paketas. * Vietinė IMS turinio saugykla – paketą galima pasirinkti IMS saugykloje';
$string['scrollbars'] = 'Leisti slinkti lange';
$string['selectall'] = 'Pasirinkti viską';
$string['selectnone'] = 'Naikinti visų žymėjimą';
$string['show'] = 'Rodyti';
$string['sided'] = 'Prie krašto';
$string['skipview'] = 'Klausytojas praleidžia turinio struktūros puslapį';
$string['skipview_help'] = 'Šis parametras nurodo, ar bus praleidžiamas (nerodomas) turinio struktūros puslapis. Jei pakete yra tik vienas mokymosi objektas, turinio struktūros puslapį visada galima praleisti.';
$string['skipviewdesc'] = 'Ši nuostata nustato numatytąją reikšmę, ar praleisti puslapio turinio struktūrą';
$string['slashargs'] = 'ĮSPĖJIMAS: šiame objekte yra išjungti pasvirojo brūkšnio argumentai, todėl objektai gali veikti ne taip, kaip numatyta!';
$string['stagesize'] = 'Etapo dydis';
$string['stagesize_help'] = 'Šie du parametrai nurodo mokymosi objekto rėmelio / lango plotį ir aukštį.';
$string['started'] = 'Pradėta';
$string['status'] = 'Būsena';
$string['statusbar'] = 'Rodyti būsenos juostą';
$string['student_response'] = 'Atsakymas';
$string['subplugintype_scormreport'] = 'Ataskaita';
$string['subplugintype_scormreport_plural'] = 'Ataskaitos';
$string['suspended'] = 'Sulaikyta';
$string['syntax'] = 'Sintaksės klaida';
$string['tag_error'] = 'Nežinoma žymė ({$a->tag}) ir šis turinys: {$a->value}';
$string['time'] = 'Laikas';
$string['title'] = 'Pavadinimas';
$string['too_many_attributes'] = 'Žymė {$a->tag} turi per daug atributų';
$string['too_many_children'] = 'Žymė {$a->tag} turi per daug antrinių elementų';
$string['toolbar'] = 'Rodyti įrankių juostą';
$string['totaltime'] = 'Laikas';
$string['trackcorrectcount_help'] = 'Teisingų rezultatų skaičius klausimui';
$string['trackingloose'] = 'ĮSPĖJIMAS: šiame puslapyje esanti sekimo informacija bus prarasta!';
$string['tracklatency_help'] = 'Laiko praėjo tarp sąveikos <br /> kuri buvo prieinama mokinio atsakui <br /> ir laiko nuo pirmo atsako';
$string['trackresult_help'] = 'Rezultatas pagal studento atsaką ir <br /> teisingą atsakymą';
$string['trackscoremax_help'] = 'Didžiausia reikšmė diapazone grynam pažymiui';
$string['trackscoremin_help'] = 'Mažiausia reikšmė diapazone grynam pažymiui';
$string['trackscoreraw_help'] = 'Skaičius kuris atspindi mokinio spartą <br /> priklausomai nuo diapazono susieto su mažiausia ir didžiausia reikšme.';
$string['tracksuspenddata_help'] = 'Duoda vietos talpinti ir parsisiųsti duomenis <br /> tarp mokinių sesijų';
$string['tracktime_help'] = 'Laikas kada bandymas buvo inicijuotas';
$string['trackweight_help'] = 'Svoris priskirtas klausimo elementui';
$string['type'] = 'Tipas';
$string['typeaiccurl'] = 'Išorinis AICC URL';
$string['typeexternal'] = 'Išorinė SCORM deklaracija';
$string['typelocal'] = 'Įkeltas paketas';
$string['typelocalsync'] = 'Atsisiųstas paketas';
$string['unziperror'] = 'Išskleidžiant paketą įvyko klaida';
$string['updatefreq'] = 'Automatinio naujinimo dažnis';
$string['updatefreq_help'] = 'Tai leidžia išoriniams paketams būti automatiškai parsiųstiems ir atnaujintiems';
$string['updatefreqdesc'] = 'Ši nuostata nustato veiklos numatytąjį automatinio naujinimo dažnį';
$string['validateascorm'] = 'Tikrinti paketą';
$string['validation'] = 'Tikrinimo rezultatas';
$string['validationtype'] = 'Ši nuostata nustato DOMXML biblioteką, naudojamą SCORM deklaracijai tikrinti. Jei nežinote, ką nustatyti, palikite tai, kas pasirinkta.';
$string['value'] = 'Reikšmė';
$string['versionwarning'] = 'Deklaracijos versija senesnė 1.3, įspėjimas ties {$a->tag} žyme';
$string['viewallreports'] = 'Peržiūrėti {$a} bandymų ataskaitas';
$string['viewalluserreports'] = 'Peržiūrėti {$a} vartotojų ataskaitas';
$string['whatgrade'] = 'Bandymų vertinimas';
$string['whatgrade_help'] = 'Jei leidžiami keli bandymai, šis parametras nurodo, kuris bandymas įrašomas į įverčių knygutę – vidutinis (vidurkis), pirmas ar paskutinis. Kelių bandymų apdorojimas * Parinktis norint pradėti naują bandymą pateikiama kaip žymės langelis, esantis virš turinio struktūros puslapio mygtuko Įvesti, todėl, jei norite leisti kelis bandymus, įsitikinkite, kad suteikta prieiga prie šio puslapio. * Kai kurie SCORM paketai žino apie naujus badymus, bet dauguma jų to nežino. Tai reiškia, kad klausytojui pakartotinai įėjus į esamą bandymą, jei SCORM turinyje nėra vidinės logikos, neleidžiančios pakeisti ankstesnių bandymų, jie gali būti pakeisti, net jei bandymas buvo Užbaigtas arba Pavyko. * Be to, naudojant parametrus Priverstinai užbaigta, Priverstinis naujas bandymas ir Užrakinti po paskutinio bandymo galima toliau valdyti kelis bandymų.';
$string['whatgradedesc'] = 'Ši nuostata nustato numatytąjį bandymų vertinimą';
$string['width'] = 'Plotis';
$string['window'] = 'Langas';
