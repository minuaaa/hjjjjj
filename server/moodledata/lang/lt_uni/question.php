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
 * Strings for component 'question', language 'lt_uni', version '4.2'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanotherhint'] = 'Pridėti dar vieną užuominą';
$string['adminreport'] = 'Apie galimas problemas praneškite klausimų duomenų bazėje.';
$string['availableq'] = 'Ar prieinama?';
$string['behaviourbeingused'] = 'Naudojama elgsene: {$a}';
$string['broken'] = 'Tai neveikiantis saitas, jis nurodo nesamą failą.';
$string['byandon'] = 'Vartotojas <em>{$a->user}</em>, laikas <em>{$a->time}</em>';
$string['cannotcreate'] = 'Lentelėje question_attempts nepavyko sukurti naujo įrašo';
$string['cannotcreatepath'] = 'Nepavyksta sukurti kelio: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Negalite ištrinti šios elgsenos \'{$a}\'. Ji yra naudojama klausimams.';
$string['cannotdeletecate'] = 'Negalite naikinti šios kategorijos. Tai numatytoji šio konteksto kategorija.';
$string['cannotdeleteneededbehaviour'] = 'Negalite ištrinti klausimo elgsenos \'{$a}\'. Yra kitų elgsenų, kuriuos nuo to yra priklausomos.';
$string['cannotdeleteqtypeinuse'] = 'Negalite ištrinti klausimo tipo \'{$a}\'. Yra tokio tipo klausimų klausimų sąraše.';
$string['cannotdeleteqtypeneeded'] = 'Negalite ištrinti klausimų tipo \'{$a}\'. Yra kitų klausimų tipų, kurie nuo to priklausomi.';
$string['cannotenable'] = 'Klausimo tipo {$a} tiesiogiai sukurti negalima.';
$string['cannotenablebehaviour'] = 'Klausimo elgsena {$a} negali būti naudojama tiesiogiai. Ji tik vidiniam naudojimui.';
$string['cannotfindquestionfile'] = 'Suglaudintame faile nepavyko rasti klausimų duomenų failo';
$string['cannotgetdsfordependent'] = 'Nepavyksta gauti nuo duomenų rinkinio priklausomo klausimo nurodyto duomenų rinkinio! (klausimas: {$a->id}, duomenų rinkinio elementas: {$a->item})';
$string['cannotgetdsforquestion'] = 'Nepavyksta gauti apskaičiuoto klausimo nurodyto duomenų rinkinio! (klausimas: {$a})';
$string['cannothidequestion'] = 'Nepavyko paslėpti klausimo';
$string['cannotimportformat'] = 'Atsiprašome, šio formato importavimo galimybė dar neįdiegta!';
$string['cannotinsertquestion'] = 'Nepavyko įterpti naujo klausimo!';
$string['cannotinsertquestioncatecontext'] = 'Nepavyko įterpti naujos klausimo kategorijos {$a->cat}, neleistinas konteksto ID {$a->ctx}';
$string['cannotmovequestion'] = 'Norėdami perkelti klausimus, turinčius su jais susietų skirtingų sričių failų, negalite naudoti šio scenarijaus.';
$string['cannotopenforwriting'] = 'Negalima atidaryti norint rašyti: {$a}';
$string['cannotpreview'] = 'Šių klausimų peržiūrėti negalite!';
$string['cannotread'] = 'Negalima skaityti failo (arba failas yra tuščias)';
$string['cannotretrieveqcat'] = 'Nepavyko nuskaityti klausimo kategorijos';
$string['cannotunhidequestion'] = 'Nepavyko panaikinti failo slėpimo.';
$string['cannotunzip'] = 'Nepavyko išskleisti failo.';
$string['cannotwriteto'] = 'Eksportuotų klausimų nepavyksta įrašyti į {$a}';
$string['categorydoesnotexist'] = 'Tokios kategorijos nėra';
$string['categorymoveto'] = 'Įrašyti į kategoriją';
$string['categorynamecantbeblank'] = 'Kategorijos pavadinimas negali būti paliktas tuščias.';
$string['changeoptions'] = 'Pakeisti nustatymus';
$string['changepublishstatuscat'] = 'Kursų {$a->coursename} <a href="{$a->caturl}">kategorijos {$a->name}</a> bendro naudojimo būsena bus pakeista iš <strong>{$a->changefrom} į {$a->changeto}</strong>.';
$string['check'] = 'Tikrinti';
$string['chooseqtypetoadd'] = 'Pasirinkite pridedamą klausimo tipą';
$string['clearwrongparts'] = 'Išvalyti neteisingus atsiliepimus';
$string['clicktoflag'] = 'Spustelėkite, kad pažymėtumėte šį klausimą vėliavėle';
$string['clicktounflag'] = 'Spustelėkite, kad panaikintumėte šio klausimo žymėjimą vėliavėle';
$string['clickunflag'] = 'Nuimti pažymėjimą';
$string['combinedfeedback'] = 'Bendri atsiliepimai';
$string['commentormark'] = 'Palikti komentarą arba pakeisti pažymį';
$string['commentx'] = 'Komentaras: {$a}';
$string['contexterror'] = 'Jei neperkeliate kategorijos į kitą kontekstą, čia patekti neturėjote.';
$string['copy'] = 'Kopijuoti iš {$a} ir keisti saitus.';
$string['correct'] = 'Teisinga';
$string['correctfeedback'] = 'Kiekvienam teisingam atsakymui';
$string['correctfeedbackdefault'] = 'Jūsų atsakymas yra teisingas.';
$string['createdmodifiedheader'] = 'Sukurta / paskutinį kartą įrašyta';
$string['createnewquestion'] = 'Kurti naują klausimą...';
$string['cwrqpfs'] = 'Pasirinktiniai klausimai, pasirenkant klausimus iš subkategorijų.';
$string['cwrqpfsinfo'] = '<p>Naujinant versiją į „Moodle 1.9“ atskiriame klausimų kategorijas į skirtingus kontekstus. Turės būti pakeistos kai kurių klausimų kategorijų ir klausimų, esančių jūsų svetainėje, bendro naudojimo būsenos. Tai būna retais atvejais, kai vienas ar keli atsitiktiniai testo klausimai nustatyti taip, kad būtų pasirinkti iš bendrai naudojamų ir bendrai nenaudojamų kategorijų derinio (kaip tai yra šioje svetainėje). Taip nutinka, kai atsitiktinis klausimas nustatytas taip, kad būtų pasirinktas iš subkategorijų, o viena ar kelios subkategorijos turi kitokią pirminės kategorijos, kuriame sukurtas atsitiktinis klausimas, bendro naudojimo būseną.</p> <p>Atnaujinant į „Moodle 1.9“ šių klausimų kategorijų, iš kurių atsitiktiniai klausimai pirminėse kategorijose parenka klausimus, bendro naudojimo būsenos bus pakeistos į tą pačią bendro naudojimo būseną kaip kategorija, kurioje yra atsitiktinis klausimas. Bus pakeista šių kategorijų bendro naudojimo būsena. Paveikti klausimai toliau veiks visuose esamuose testuose, kol jų nepašalinsite iš tų testų.</p>';
$string['cwrqpfsnoprob'] = 'Nė vienos svetainės klausimų kategorijos nepaveikė pasirinktinių klausimų, pasirenkant klausimus iš subkategorijų, problema.';
$string['decimalplacesingrades'] = 'Skaičių po kablelio pažymiuose';
$string['defaultfor'] = '{$a} numatytoji reikšmė';
$string['defaultinfofor'] = 'Kontekste {$a} bendrai naudojamų klausimų numatytoji kategorija';
$string['defaultmark'] = 'Numatytasis pažymys';
$string['deletecoursecategorywithquestions'] = 'Klausimų banke yra klausimų, susijusių su šia kursų kategorija. Jei tęsite, jie bus panaikinti. Galbūt pirmiausia norite juos perkelti, naudodami klausimų banko sąsają.';
$string['deletequestioncheck'] = 'Ar tikrai norite ištrinti \'{$a}\'?';
$string['deletequestionscheck'] = 'Ar tikrai norite ištrinti sekančius klausimus ?<br /><br />{$a}';
$string['didnotmatchanyanswer'] = '[Neatitiko nei vienas atsakymas]';
$string['disterror'] = 'Paskirstymas {$a} sukėlė problemų';
$string['donothing'] = 'Nekopijuokite ir neperkelkite failų, nekeiskite saitų.';
$string['editcategories_help'] = 'Užuot viską laikę viename dideliame sąraše, klausimus galite suskirstyti į kategorijas ir subkategorijas. Yra kiekvienos kategorijos kontekstas, nustatantis, kur gali  būti naudojama subkategorijoje esantis klausimas: * Veiklos kontekstas – tik veiklos modulyje prieinami klausimai * Kursų kontekstas –  kursų visuose veiklos moduliuose prieinami klausimai * Kursų kategorijos kontekstas – kursų kategorijos visuose veiklos moduliuose ir kursuose prieinami klausimai * Sistemos kontekstas – klausimai, prieinami visuose svetainės Kategorijos kursuose ir veiklose, taip pat naudojami atsitiktiniams klausimams kaip iš konkrečios kategorijos parinkti klausimai.';
$string['editquestion'] = 'Taisyti klausimą';
$string['emptyxml'] = 'Nežinoma klaida – tuščias imsmanifest.xml';
$string['enabled'] = 'Įjungta';
$string['erroraccessingcontext'] = 'Nepavyksta pasiekti konteksto';
$string['errordeletingquestionsfromcategory'] = 'Įvyko klaida naikinant klausimus iš kategorijos {$a}.';
$string['errorduringpost'] = 'Įvyko klaida atliekant baigiamąjį apdorojimą!';
$string['errorduringpre'] = 'Įvyko klaida atliekant išankstinį apdorojimą!';
$string['errorduringproc'] = 'Apdorojant įvyko klaida!';
$string['errorduringregrade'] = 'Klausimo įvertinti iš naujo {$a->qid} nepavyko, pereinamam į būseną {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Klaida: nepavyksta nukopijuoti failo {$a}.';
$string['errorfilecannotbemoved'] = 'Klaida: nepavyksta perkelti failo {$a}.';
$string['errorfileschanged'] = 'Klaida: nuo tada, kai buvo parodyta forma, iš klausimų susieti failai pasikeitė';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Klausimas ({$a}) rodomas daugiau nei vieną kartą skirtingose testo vietose ir būna skirtingo svorio. Šiuo metu tokios funkcijos nepalaiko statistinė ataskaita, todėl šio klausimo statistiniai duomenys gali būti nepatikimi.';
$string['errormanualgradeoutofrange'] = 'Klausimo {$a->name} įvertis {$a->grade} nėra nuo 0 iki {$a->maxgrade}. Balai ir komentarai neįrašyti.';
$string['errormovingquestions'] = 'Įvyko klaida perkeliant klausimus, kurių ID {$a}.';
$string['errorpostprocess'] = 'Įvyko klaida atliekant baigiamąjį apdorojimą!';
$string['errorpreprocess'] = 'Įvyko klaida atliekant išankstinį apdorojimą!';
$string['errorprocess'] = 'Apdorojant įvyko klaida!';
$string['errorprocessingresponses'] = 'Įvyko klaida apdorojant jūsų atsakymus.';
$string['errorsavingcomment'] = 'Įvyko klaida įrašant klausimo {$a->name} komentarą į duomenų bazę.';
$string['errorsavingflags'] = 'Saugant vėliavos būseną įvyko klaida.';
$string['errorupdatingattempt'] = 'Įvyko klaida bandant atnaujinti {$a->id} duomenų bazėje.';
$string['exportcategory_help'] = 'Šis parametras nustato kategoriją, iš kurios bus imami eksportuojami klausimai. Tam tikri importavimo formatai, pvz., GIFT ir „Moodle“ XML, leidžia į eksportavimo failą įtraukti kategorijos ir konteksto duomenis, kurie gali (pasirinktinai) būti atkurti importuojant. Jei to reikia, turi būti pažymėti atitinkami žymės langeliai.';
$string['exporterror'] = 'Eksportuojant įvyko klaidų!';
$string['exportquestions_help'] = 'Ši funkcija įjungia visos klausimų kategorijos (ir subkategorijų) eksportavimą į failą. Atkreipkite dėmesį, kad atsižvelgiant į pasirinktą failo formatą kai kurių klausimų duomenų ir tam tikrų klausimų tipų eksportuoti negalima.';
$string['feedback'] = 'Grįžtamasis ryšys';
$string['filecantmovefrom'] = 'Klausimų failo perkelti negalima, nes neturite tesės perkelti failų iš vietos, iš kurios bandote perkelti klausimus.';
$string['filecantmoveto'] = 'Klausimų failo perkelti ar nukopijuoti negalima, nes neturite tesės įtraukti failų į vietą, į kurią bandote perkelti klausimus.';
$string['filesareacourse'] = 'kursų failų sritis';
$string['filesareasite'] = 'svetainės failų sritis';
$string['filestomove'] = 'Ar perkelti / kopijuoti failus į {$a}?';
$string['fillincorrect'] = 'Užpildykite teisingais atsakymais';
$string['flagged'] = 'Pažymėta vėliavėlė';
$string['flagthisquestion'] = 'Pažymėti vėliavėlė šį klausimą';
$string['formquestionnotinids'] = 'Formoje buvo klausimas, kurio nėra tarp klausimų ID';
$string['fractionsnomax'] = 'Vieno iš atsakymų balas turi būti 100 %, kad būtų galima gauti visus šio klausimo balus.';
$string['generalfeedback'] = 'Bendras grįžtamasis ryšys';
$string['generalfeedback_help'] = 'Bendras atsakas yra rodomas visiems studentams po to kai jie atsakė klausimą. Skirtingai nuo atsako, kuris priklauso nuo klausimo tipo ir ką atsakė studentas, tas pats bendras atsakas yra rodomas visiems studentams. Galite naudoti bendrą atsaką į klausimą, leisdami studentams suprasti kokias žinias klausimas testavo, arba duoti nuorodą į platesnę informaciją kurią jie gali panaudoti, jei nesuprato klausimo.';
$string['hintn'] = 'Užuomina {no}';
$string['hinttext'] = 'Užuominos tekstas';
$string['howquestionsbehave'] = 'Kaip klausimai elgiasi';
$string['howquestionsbehave_help'] = 'Studentais gali sąveikauti su testų klausimais įvariais būdais. Pavyzdžiui, gal jūs norite, kad studentai įvestų atsakymą kiekvienam klausimui ir tik tada užbaigtų testą, prieš parodant kokį grįžtamajį ryšį. Tai būtų "Atidėtas grįžtamasis ryšys". Kaip alternatyvą gal jūs norite, kad studentai tik pateikę klausimo atsakymą gautų atgalinį ryšį. Tai būtų "Sąveikaujantis su keliais bandymais"';
$string['ignorebroken'] = 'Nepaisyti neveikiančių saitų';
$string['importcategory'] = 'Importuoti į kategoriją';
$string['importcategory_help'] = 'Šis parametras nustato kategoriją, į kurią pateks importuoti klausimai. Tam tikri importavimo formatai, pvz., GIFT ir „Moodle“ XML, į importavimo failą gali įtraukti kategorijos ir konteksto duomenis. Norint naudoti šiuos duomenis, o ne pasirinktą kategoriją, turi būti pažymėti  atitinkami žymės langeliai. Jei importavimo faile nurodytų kategorijų nėra, jos bus sukurtos.';
$string['importerror'] = 'Importuojant įvyko klaida';
$string['importfromcoursefiles'] = '... arba pasirinkite kurso failą importavimui.';
$string['importingquestions'] = 'Importuojami {$a} klausimai iš failo';
$string['importparseerror'] = 'Klaidos rastos nagrinėjant importuotą failą. Nei vienas klausimas nebuvo importuotas. Norėdami importuoti gerus klausimus pabandykite dar kartą, nustatydami \'Sustoti ties klaida\' į \'ne';
$string['importquestions_help'] = 'Ši funkcija leidžia importuoti įvairių formatų klausimus naudojant tekstinį failą. Atkreipkite dėmesį, kad failo kodavimas turi būti UTF-8.';
$string['importwrongfiletype'] = 'Jūsų pasirinktas failo tipas ({$a->actualtype}) neatitinka importuojamo formato tipo ({$a->expectedtype}).';
$string['impossiblechar'] = 'Negalimas simbolis {$a} aptiktas kaip skliaustas';
$string['incorrectfeedback'] = 'Kiekvienam neteisingam atsakymui';
$string['incorrectfeedbackdefault'] = 'Jūsų atsakymas yra neteisingas.';
$string['invalidanswer'] = 'Nepilnas atsakymas';
$string['invalidarg'] = 'Nepateikta galiojančių argumentų arba neteisingai sukonfigūruotas serveris';
$string['invalidcategoryidforparent'] = 'Neteisingas pirminio elemento kategorijos ID!';
$string['invalidcategoryidtomove'] = 'Neteisingas kategorijos ID norint perkelti!';
$string['invalidconfirm'] = 'Neteisinga patvirtinimo eilutė';
$string['invalidcontextinhasanyquestions'] = 'Į question_context_has_any_questions perduotas netinkamas kontekstas.';
$string['invalidpenalty'] = 'Negaliojanti nuobauda';
$string['invalidwizardpage'] = 'Nurodytas netinkamas puslapio vedlys arba jo nėra!';
$string['lastmodifiedby'] = 'Paskutinį kartą modifikavo';
$string['linkedfiledoesntexist'] = 'Susieto failo {$a} nėra';
$string['makechildof'] = 'Kurti {$a} antrinį elementą';
$string['maketoplevelitem'] = 'Perkelti į aukščiausią lygį';
$string['manualgradeoutofrange'] = 'Šis pažymys yra neleistinose ribose.';
$string['manuallygraded'] = 'Rankinio būdo vertinimas {$a->mark} su komentaru: {$a->comment}';
$string['mark'] = 'Pažymys';
$string['markedoutof'] = 'Įvertinti iš';
$string['markedoutofmax'] = 'Įvertinti iš {$a}';
$string['markoutofmax'] = 'Įvertinimas {$a->mark} iš {$a->max}';
$string['matchgrades'] = 'Gretinti įverčius';
$string['matchgrades_help'] = 'Importuoti įverčiai turi atitikti vieną iš fiksuotų sąrašų, sudarytų iš leistinų įverčių – 100, 90, 80, 75, 70, 66,666, 60, 50, 40, 33,333, 30, 25, 20, 16,666, 14,2857, 12,5, 11,111, 10, 5, 0 (taip pat neigiamos reikšmės). Jei ne, yra dvi parinktys: * Klaida, jei įverčio nėra sąraše, – jei klausime yra įverčių, kurių nėra sąraše, rodoma klaida ir tas klausimas neimportuojamas * Artimiausias įvertis, jei įverčio nėra sąraše, – jei randamas įvertis, kuris neatitinka sąrašo reikšmės, įvertis pakeičiamas artimiausia tinkama sąrašo reikšme.';
$string['matchgradeserror'] = 'Klaida jeigu pažymio nėra';
$string['matchgradesnearest'] = 'Artimiausias pažymys jeigu nėra išvardintas';
$string['missingcourseorcmid'] = 'Į print_question reikia pateikti kursų ID arba cmid.';
$string['missingcourseorcmidtolink'] = 'Į get_question_edit_link reikia pateikti kursų ID arba cmid.';
$string['missingimportantcode'] = 'Trūksta šio klausimo tipo svarbaus kodo: {$a}.';
$string['missingoption'] = 'Praleistų žodžių įstatymo klausime {$a} trūksta parinkčių';
$string['modified'] = 'Paskutinį kartą įrašyta';
$string['move'] = 'Perkelti iš {$a} ir keisti saitus.';
$string['movedquestionsandcategories'] = 'Klausimai ir klausimų kategorijos, perkeltos iš {$a->oldplace} į {$a->newplace}.';
$string['movelinksonly'] = 'Pakeisti tik vietas, kurias nurodo saitai, failų neperkelti ir nekopijuoti.';
$string['moveqtoanothercontext'] = 'Klausimą perkelti į kitą kontekstą';
$string['movingcategoryandfiles'] = 'Ar tikrai norite perkelti kategoriją {$a->name} ir antrines kategorijas į {$a->contextto} kontekstą?<br /> Aptikome su {$a->fromareaname} klausimais susietų failų: {$a->urlcount}. Ar šiuos failus norite kopijuoti į {$a->toareaname}, ar perkelti?';
$string['movingcategorynofiles'] = 'Ar tikrai norite perkelti kategoriją {$a->name} ir antrines kategorijas į {$a->contextto} kontekstą?';
$string['movingquestions'] = 'Perkeliami klausimai ir visi failai';
$string['movingquestionsandfiles'] = 'Ar  tikrai norite perkelti klausimą (-us) {$a->questions} į <strong>{$a->tocontext}</strong> kontekstą?<br /> {$a->fromareaname} aptikome su šiuo (-iais) klausimu (-ais) susietų <strong>failų: {$a->urlcount}</strong>. Ar šiuos failus norite perkelti į {$a->toareaname} ar kopijuoti?';
$string['movingquestionsnofiles'] = 'Ar tikrai norite perkelti klausimą (-us) {$a->questions} į <strong>{$a->tocontext}</strong> kontekstą?<br /> {$a->fromareaname} <strong>nėra</strong> su šiuo (-iais) klausimu (-ais) susijusių failų.';
$string['needtochoosecat'] = 'Turite pasirinkti kategoriją, į kurią perkelsite šį klausimą, arba paspausti Atšaukti.';
$string['nocate'] = 'Tokios kategorijos {$a} nėra!';
$string['nopermissionadd'] = 'Neturite teisės čia įtraukti klausimų.';
$string['nopermissionmove'] = 'Neturite teisės iš čia perkelti klausimų. Turite klausimą įrašyti į šią kategoriją arba įrašyti kaip naują klausimą.';
$string['noprobs'] = 'Klausimų duomenų bazėje problemų nerasta.';
$string['noresponse'] = '[Nėra atsako]';
$string['notanswered'] = 'Neatsakyta';
$string['notenoughanswers'] = 'Šis klausimo tipas reikalauja bent {$a} atsakymų';
$string['notenoughdatatoeditaquestion'] = 'Nenurodytas nei klausimo ID, nei kategorijos ID, nei klausimo tipas.';
$string['notenoughdatatomovequestions'] = 'Turite pateikti norimų perkelti klausimų ID.';
$string['notflagged'] = 'Nepažymėta vėliavėle';
$string['notgraded'] = 'Neįvertinta';
$string['notshown'] = 'Neparodyta';
$string['notyetanswered'] = 'Neatsakyta';
$string['novirtualquestiontype'] = 'Nėra klausimo tipo {$a} virtualaus klausim tipo';
$string['numqas'] = 'Klausimų bandymų skaičius';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} paslėptas)';
$string['options'] = 'Nustatymai';
$string['page-question-category'] = 'Klausimų kategorijų puslapis';
$string['page-question-edit'] = 'Klausimų redagavimo puslapis';
$string['parent'] = 'Pirminis';
$string['parentcategory'] = 'Pirminė kategorija';
$string['parentcategory_help'] = 'Ši pirminė kategorija – tai kategorija, į kurią bus įtraukiama nauja kategorija. Viršutinė reiškia tai, kad ši kategorija nėra jokioje kitoje kategorijoje. Kategorijos kontekstas rodomas paryškintai. Kiekviename kontekste turi būti bent viena kategorija.';
$string['parenthesisinproperclose'] = '{$a}** prieš ** esantis skliaustas uždarytas netinkamai';
$string['parenthesisinproperstart'] = '{$a}** prieš ** esantis skliaustas atidarytas netinkamai';
$string['parsingquestions'] = 'Nagrinėjiami klausimai iš importuoto failo.';
$string['partiallycorrect'] = 'Iš dalies teisingas';
$string['partiallycorrectfeedback'] = 'Kiekvienam dalinai teisingam atsakymui';
$string['penaltyfactor'] = 'Baudos koeficientas';
$string['penaltyfactor_help'] = 'Šis parametras nustato, kokia surinktų balų dalis atimama už kiekvieną neteisingą atsakymą. Tai taikoma tik tada, jei testas atliekamas adaptyviuoju režimu. Baudos koeficientas turi būti nuo 0 iki 1. Baudos koeficientas 1 reiškia, kad klausytojas, norėdamas gauti už atsakymą kreditų, turi pateikti teisingą atsakymą pirmu bandymu. Baudos koeficientas 0 reiškia, kad klausytojas gali bandyti tiek kartų, kiek nori, ir vis tiek gaus visus balus.';
$string['penaltyforeachincorrecttry'] = 'Nuobauda už kiekviena neteisingą bandymą';
$string['penaltyforeachincorrecttry_help'] = 'Kai jūs paleidžiate savo klausimą naudojant „Interaktyvus su keliais bandymais“ arba „Adaptuoto režimo“  elgsena , taip studentai turės kelis bandymus išspręsti klausimą teisingai, tada šis pasirinkimas nustato kokia bus nuobauda už neteisingą bandymą. Nuobauda yra proporcija viso klausimo įvertinimo, jei klausimas vertas trijų balų, ir nuobauda yra 0.3333333, tada  studentas gaus 3 balus jei atsakys teisingai iš pirmo karto, 2 jei atsakys teisingai iš antro karto ir 1 jei atsakys teisingai iš trečio karto.';
$string['permissionsaveasnew'] = 'Įrašyti kaip naują kausimą';
$string['permissionto'] = 'Turite teisę:';
$string['previewquestion'] = 'Peržiūrėti klausimą : {$a}';
$string['published'] = 'bendrai naudojama';
$string['questionaffected'] = '<a href="{$a->qurl}">Klausimas {$a->name} ({$a->qtype})</a> yra klausimų kategorijoje, bet taip pat naudojamas kitų kursų {$a->coursename} <a href="{$a->qurl}">teste {$a->quizname}</a>.';
$string['questionbehaviouradminsetting'] = 'Klausimų elgsenos nustatymai';
$string['questionbehavioursdisabled'] = 'Klausimų elgsenos, kurias išjungti';
$string['questionbehavioursdisabledexplained'] = 'Įveskite kableliu atskirta sąrašą elgsenų, kurios neturėtų pasirodyti iššokančiame meniu';
$string['questionbehavioursorder'] = 'Klausimų elgsenos tvarka';
$string['questionbehavioursorderexplained'] = 'Įveskite kableliu atskirta sąrašą elgsenų tokia tvarka, kokia norite matyti iššokančiame meniu';
$string['questioncatsfor'] = '{$a} klausimų kategorijos';
$string['questiondoesnotexist'] = 'Tokio klausimo nėra';
$string['questionidmismatch'] = 'Klausimų id nesutampa';
$string['questionname'] = 'Klausimo pavadinimas';
$string['questions'] = 'Klausimai';
$string['questionsaveerror'] = 'Įvyko klaidų įrašant klausimą – ({$a})';
$string['questionsinuse'] = '(* Klausimas pažymėtas žvaigždute jau yra naudojamas klausimynuose. Šie klausimai nebus ištrinti iš klausimyno, tik iš kategorijos sąrašo.)';
$string['questionsmovedto'] = 'Vis dar naudojami klausimai perkelti į {$a}, į pirminę kursų kategoriją.';
$string['questionsrescuedfrom'] = 'Įrašyti klausimai iš konteksto {$a}.';
$string['questionsrescuedfrominfo'] = 'Panaikinus kontekstą {$a}, šie klausimai (kai kurie gali būti paslėpti) buvo įrašyti, nes jie vis dar naudojami kai kuriuose testuose ar kitose veiklose.';
$string['questiontext'] = 'Klausimo tekstas';
$string['questionuse'] = 'Naudoti klausimą šioje veikloje';
$string['requiresgrading'] = 'Reikia vertinimo';
$string['responsehistory'] = 'Atsakymų istorija';
$string['restartwiththeseoptions'] = 'Pradėti iš naujo su šiais nustatymais';
$string['rightanswer'] = 'Teisingas atsakymas';
$string['saveflags'] = 'Įrašyti vėliavėlių būseną';
$string['selectacategory'] = 'Pasirinkite kategoriją:';
$string['selectaqtypefordescription'] = 'Norėdami peržiūrėti aprašą, pasirinkite klausimo tipą.';
$string['selectquestionsforbulk'] = 'Pasirinkti klausimus masiniams veiksmams atlikti';
$string['settingsformultipletries'] = 'Nustatymai keletui bandymų.';
$string['shareincontext'] = 'Bendrai naudoti {$a} kontekste';
$string['showmarkandmax'] = 'Rodyti pažymį ir maksimumą';
$string['showmaxmarkonly'] = 'Rodyti tiktai maksimalų pažymį';
$string['shown'] = 'Rodoma';
$string['shownumpartscorrect'] = 'Rodyti teisingų atsakymų skaičių';
$string['shownumpartscorrectwhenfinished'] = 'Parodyti teisingų atsakymų kiekį kai klausimas bus baigtas';
$string['showquestiontext'] = 'Rodyti klausimo teksta klausimų sąraše';
$string['specificfeedback'] = 'Specifinis grįžtamasis ryšys';
$string['stoponerror'] = 'Stabdyti įvykus klaidai';
$string['stoponerror_help'] = 'Šis parametras nustato, ar importavimo procesas bus stabdomas aptikus klaidą ir nebus importuotas nė vienas klausimas, ar bus nepaisoma klausimų su klaidomis, o visi tinkami klausimai bus importuoti.';
$string['submissionoutofsequence'] = 'Informacijos išrinkimas ne iš sekos. Prašau nespausti mygtuko "atgal" kai dirbate su klausimynu.';
$string['submissionoutofsequencefriendlymessage'] = 'Įvesti duomenys neatitinka normalios sekos. Tai galėjo atsitikti dėl to kad panaudojote naršyklės Atgal arba Pirmyn mygtukus; prašome nenaudoti jų per testą. Taip pat tai galėjo atsitikti jei jūs kažką paspaudėte kol puslapis krovėsi. Spauskite <strong> Tęsti</strong> testo atnaujinimui.';
$string['uninstallbehaviour'] = 'Ištrinti šią klausimo elgseną.';
$string['uninstallqtype'] = 'Ištrinti šį klausimo tipą.';
$string['unknowntolerance'] = 'Nežinomas nuokrypio tipas {$a}';
$string['unpublished'] = 'bendrai nenaudojama';
$string['unusedcategorydeleted'] = 'Ši kategorija panaikinta, nes panaikinus kursus jos klausimai nebebuvo naudojami.';
$string['upgradeproblemcategoryloop'] = 'Atnaujinant klausimų kategorijas aptikta problema. Kategorijų medyje yra ciklas. Paveiktų  kategorijų ID yra {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Nepavyko atnaujinti klausimų kategorijos {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Atnaujinant klausimų kategorijas aptikta problema. Kategorija {$a->id} nurodo pirminę kategoriją {$a->parent}, kurios nėra. Norint išspręsti problemą, pirminė kategorija pakeista.';
$string['withselected'] = 'Su pasirinktu';
$string['wrongprefix'] = 'Netinkamai suformatuotas pavadinimo priešvardis {$a}';
$string['xoutofmax'] = '{$a->mark} iš {$a->max}';
$string['yougotnright'] = 'Jūs dabar pasirinkęs {$a->num}.';
$string['youmustselectaqtype'] = 'Turite pasirinkti klausimo tipą.';
$string['yourfileshoulddownload'] = 'Eksportavimo failas turi būti netrukus pradėtas atsisiųsti. Jei ne, <a href="{$a}">spustelėkite čia</a>.';
