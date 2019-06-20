@extends('layouts.front')
@section('content')

    <section class="container-fluid bg-rand-page">
        <div class="container">
            <h2 class="text-center py-4 text-dark">Info/Afspraak</h2>
            <div class="row">
                <div class="col-lg-6 col-12 d-flex align-items-stretch">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-header">
                            <h3 class=" mt-4 cont-title"><i class="fas fa-angle-double-right  pr-2"></i>Afspraak/Vraag</h3>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-auto">
                                <p>Voor tattoos uit de online-shop, gelieve een afspraak te maken hier onder met vermelding van de tattoo.</p>
                                <p>Heeft u een vraag i.v.m. een tattoo of piercing? Bekijk dan ook eens onze bijkomende informatie verder op de pagina.
                                    Beantwoord onze bijkomende informatie uw vraag niet? Stuur ons dan gerust een berichtje en wij nemen spoedig met uw contact op!</p>
                            </div>

                            <div class="">
                                <button type="button" class="btn bluebg text-white btn-shadow mr-2 mb-3 mb-md-0 mb-lg-0" data-toggle="modal" data-target=".bd-example-modal-lg">Afspraak maken</button>
                                <button type="button" class="w- btn bluebg text-white btn-shadow" data-toggle="modal" data-target=".bd-example-modal-lg2">Vraag stellen</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 text-cont d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-header">
                            <h3 class="mt-4 cont-title"><i class="fas fa-angle-double-right  pr-2"></i>Algemene Info</h3>
                        </div>
                        <div class="card-body">
                            <p><i class="fas fa-map-marker-alt "></i> dingesstraat 8, 6666 DINGES </p>
                            <p><i class="fa fa-phone "></i>  051 66 66 66 66  </p>
                            <p><i class="fa fa fa-envelope "></i> InkXperience@inked.com  </p>
                            <p><i class="far fa-clock "></i> Openingsuren: </p>
                            <p class="ml-3"> Ma-Vr: 9u00-12u00 (op afspraak) & 13u00-19u00 <br>
                                Za: 9u00-12u00 & 13u-18u00 (op afspraak) <br>
                                Zondagen & feestdagen: gesloten</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="bluebg mr-3 mr-lg-0">
            <div class="row">
                <div class="col-lg-8 col-12 order-0">
                    <h2 class="text-center py-4 text-dark">Bijkomende informatie</h2>
                    <h3 class="text-dark"><i class="fas fa-angle-double-right  pr-2"></i>House Rules</h3>
                    <ul style="list-style-type:disc" class="text-dark">
                        <li>Tattoos worden gezet vanaf 18 jaar, piercings vanaf 16 jaar mits het bijzijn of toestemming van een ouder. </li>
                        <li>Bij alle tattoos wordt er op voorhand een voorschot betaald bij het afspreken van een datum:
                            <ul style="list-style-type:circle" class="ml-4">
                                <li>Kleine tattoos: 50 euro.</li>
                                <li>Middel-grote tattoos: 75 euro.</li>
                                <li>Grote tattoos: 100 euro.</li>
                            </ul>
                            Voorschotten worden bij het niet nakomen van een afspraak NIET terug betaald.</li>
                        <li>Een afspraak voor een tattoo kan maar 1-malig kosteloos verzet worden.
                            Bij verdere verzettingen van afspraken wordt er telkens een bedrag van 10 euro bijgerekend.</li>
                        <li>Bij vooraf vastgestelde prijzen van tattoos in de shop, wordt er niet over onderhandelt mits u er een design bij wenst.</li>
                        <li>Bij zwangerschap en/of het nemen van medicatie moet dit steeds vermeld worden.</li>
                        <li>Bij het plaatsen van een tattoo zorgt u dat u makkelijke kledij aan heeft die niet in de weg zit bij het plaatsen van de tattoo.</li>
                        <li>Personen onder invloed of recent gebruik van drank en/of drugs worden niet geholpen.</li>
                        <li>Bij het plaatsen van een tattoo wordt er 1 extra persoon toegelaten. Kinderen onder de leeftijd van 13 jaar worden niet toegelaten.</li>
                        <li>Er worden geen huisdieren toegelaten in de shop.</li>
                        <li>Het is verboden om binnen te roken in de shop.</li>
                        <li>Bij vandalisme wordt er contact op genomen met de politie.</li>
                        <li>Er moet steeds waarheidsgetrouw een toestemmingsformulier ingevuld worden.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-center order-1 mb-3 mb-lg-0">
                    <img class="img-fluid w-100" src="assets/images/quote1.png" alt="">
                </div>

                <div class="col-lg-6 col-12 d-flex align-items-center justify-content-md-center order-3 order-lg-2 mb-3 mb-lg-0">
                    <img class="img-fluid" src="assets/images/infoFoto1.jpg" alt="">
                </div>
                <div class="col-lg-6 col-12 order-2 order-lg-3">
                    <div class="text-dark text-right">
                        <h3><i class="fas fa-angle-double-right  pr-2"></i>Werkwijze tattoos</h3>
                        <p>Daar wij uit liefde voor ons vak kwaliteit voor kwantiteit verkiezen werken wij enkel op afspraak, zowel voor een bespreking als voor het plaatsen van een tatoeage.</p>
                        <p>Tijdens een bespreking kunnen wij op deze manier iedere klant op de gepaste wijze te woord staan en een duidelijk beeld schetsen van hun wensen, om vervolgens ongestoord en met volle aandacht dit tot een mooi resultaat te brengen.</p>
                        <p>Tijdens het proces om getatoeëerd te worden, zult u merken dat we een heel specifiek proces volgen om kruisbesmetting te voorkomen. Alle naalden en materiaal die tijdens het plaatsen van uw tatoeage worden gebruikt, zijn steriel verpakt, gesteriliseerd en verzegeld.</p>
                        <p>Voor uw zekerheid worden alle materialen die tijdens uw tatoeage worden gebruikt geopend, gebruikt en weggegooid in uw aanwezigheid. Elke tattoo ruimte wordt grondig gedesinfecteerd tussen elke klant.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-4">
                    <div class="text-dark">
                        <h3><i class="fas fa-angle-double-right  pr-2"></i>Na-verzorging tattoos</h3>
                        <p>Wil je graag een tatoeage waar je trots op kunt zijn, dan is de nazorg heel belangrijk. De genezingstijd van je nieuwe tatoeage bedraagt ongeveer 2 weken.
                            Algemene gezondheid en lichamelijke hygiëne spelen hierbij een belangrijke rol. Tijdens het genezingsproces kan de nieuwe tatoeage gaan jeuken en/of vervellen, dit is normaal.</p>
                        <p>Persoonlijke hygiëne is tijdens de genezingstijd van de nieuwe tatoeage absoluut noodzakelijk. Na het zetten van je nieuwe tatoeage wordt de tattoo afgedekt met folie.</p>
                        <p>Behandel je nieuwe tatoeage als volgt:</p>
                        <ul style="list-style-type:disc">
                            <li>Verwijder de folie na ongeveer 1 à 2 uur.</li>
                            <li>Spoel de tatoeage met een milde ongeparfumeerde zeep met lauw water (gebruik hierbij enkel je handen, geen spons of doekjes) en spoel deze nadien met water af.</li>
                            <li>Dep de tatoeage na het wassen met een propere handdoek of keukenpapier voorzichtig droog (niet wrijven).</li>
                            <li>Smeer de getatoeëerde zone met een dunne laag zalf die de tattoo-artiest aanraadt voorzichtig in.</li>
                            <li>Smeer de tatoeage 4x per dag gedurende minimum 2 weken in met een dunne laag zalf zodat de tatoeage genoeg gevoed en gehydrateerd blijft.
                                Bij gebruik van een dikke laag zalf, zal de tattoo niet kunnen ademen waardoor jeuk en roodheid (irritatie) kan ontstaan met een ontsteking tot gevolg.</li>
                        </ul>
                        <p>Het is niet nodig om de tattoo opnieuw af te dekken, wanneer je dit wel doet kan de tattoo niet genoeg ademen en zal de kwaliteit van de tattoo veel minder zijn.</p>
                        <p>Draag geen te strakke of vuile kleding over je nieuwe tattoo. Krab niet aan eventuele korstjes, zodat je geen inkt uit de huid kan trekken. Deze vallen er vanzelf af, wanneer de huid genoeg hersteld is.</p>
                        <p>ermijd tijdens het genezingsproces iedere vorm van baden en onderdompelen; zwembad, welness, bad, sauna… Douchen is geen enkel probleem.
                            Stel de tattoo tijdens het genezingsproces nooit bloot aan de zon of zonnebank, hierdoor zal de kwaliteit van je nieuwe tattoo aanzienlijk verminderen. Gebruik nadat de tattoo is genezen een zonnebrandcrème met een hoge beschermingsfactor tijdens het zonnen.</p>
                        <p>Neem bij extreme roodheid, zwelling, pijn of andere klachten contact op met de tattoo-artiest of de huisarts.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-5 d-flex align-items-center justify-content-md-center mb-3 mb-lg-0">
                    <img class="img-fluid" src="assets/images/infoFoto2.jpg" alt="">
                </div>

                <div class="col-lg-6 col-12 order-lg-6 order-7 mt-lg-3 d-flex justify-content-md-center">
                    <img class="img-fluid" src="assets/images/infoFoto3.jpg" alt="">
                </div>
                <div class="col-lg-6 col-12 order-lg-7 order-6 text-dark mt-lg-3">
                    <h3><i class="fas fa-angle-double-right  pr-2"></i>Werkwijze piercings</h3>
                    <p>Onze vriendelijke en bekwame medewerker zal u helpen een keuze te maken bij alle sieraden die beschikbaar zijn voor de specifieke piercing waarin u geïnteresseerd bent.
                        De kwaliteit van uw juweel wordt gegarandeerd daar wij enkel titanium of chirurgisch staal gebruiken om uw lichaam te versieren.
                        De persoon die uw piercing plaatst beantwoordt graag iedere vraag ivm de gekozen plaats, de voor- en nadelen en eventuele ongemakken die zich kunnen voordoen.</p>
                    <p>Voor NA-VERZORGING wordt dit in de shop zelf besproken wegens dit voor iedere piercing verschillend is. Uw krijgt een blaadje met de nodige verzorging voorgeschreven.</p>
                </div>
            </div>


            <hr class="bluebg mr-3 mr-lg-0">
            <div class="row">
                <div class="col-12 w-100">
                    <h5 class=" pt2 cont-title text-center text-dark"><i class="fas fa-angle-double-right  pr-2"></i>Op de kaart</h5>
                    <div class=" d-flex">
                        <iframe class="kaart2 flex-fill mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2511.643065774348!2d2.956116915957999!3d50.9857878565268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcb5ee25f39319%3A0x138cdeaf6f88c93e!2sUnnamed+Road%2C+8650+Houthulst!5e0!3m2!1snl!2sbe!4v1544007530983" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>



            <!-----------------------------BUTTON AFSPRAAK MAKEN-------------------------------->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg bluecl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Afspraak maken :</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="rest">
                                <legend class="col-form-label col-sm-2 pt-0 pl-0">Naam:</legend>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">E-mail:</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="col-6">
                                        <label >Telefoon:</label>
                                        <input type="tel" class="form-control" id="exampleInputTel" aria-describedby="Telefoon" placeholder="Telefoon">
                                    </div>

                                </div>
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0 pt-3">Soort tattoo:</legend>
                                    <div class="col-sm-10 pt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Cover-up
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios1">
                                                Tekst
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                            <label class="form-check-label" for="gridRadios1">
                                                Portret
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option3">
                                            <label class="form-check-label" for="gridRadios1">
                                                Andere
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0 pt-3">Grootte tattoo:</legend>
                                    <div class="col-sm-10 pt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios2">
                                                Klein, tot +- 6cm, bv pols
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Middelgroot, eerder 10x10
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios7" value="option3">
                                            <label class="form-check-label" for="gridRadios2">
                                                Groot, volle dag werk of meerdere dagen
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios8" value="option4">
                                            <label class="form-check-label" for="gridRadios1">
                                                Volledige arm- of beensleeve, of volledige rug
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios9" value="option5">
                                            <label class="form-check-label" for="gridRadios2">
                                                Ik sta open voor suggesties
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios10" value="option6">
                                            <label class="form-check-label" for="gridRadios1">
                                                Ik twijfel
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-lg-0 pt-3 pt-lg-4">Grootte -+ in cm:</legend>
                                    <div class="">
                                        <input type="text" class="form-control ml-3 mt-lg-4" placeholder="Grootte ongeveer">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto pl-0 mr-2">
                                        <legend class="col-form-label col-sm-2 pt-3 pt-lg-0">Kleur:</legend>
                                    </div>
                                    <div class="col-auto  ml-lg-5 pt-3 pt-lg-0 pl-lg-1">

                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect1">
                                            <option selected>Kleur</option>
                                            <option value="1">Wit-zwart</option>
                                            <option value="2">Nog niet zeker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-3 ">Waar moet de tattoo komen?</legend>
                                    <div class="pt-lg-3 pt-0 pl-2 pl-lg-3">
                                        <input type="text" class="form-control " placeholder="Plaats tattoo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto px-0">
                                        <legend class="col-form-label col-sm-2 pt-lg-0 pt-3">Voorkeur artist:</legend>
                                    </div>
                                    <div class="col-auto px-0  pt-lg-0 pt-3 pl-lg-2">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect2">
                                            @if($artists)
                                                @foreach($artists as $artist)
                                            <option value="1">{{$artist->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto px-0">
                                        <legend class="col-form-label col-sm-2 pt-3 ">Eventuele bestanden:</legend>
                                    </div>
                                    <div class="col-auto px-lg-0 pl-2">
                                        <input type="file" class="form-control-file mt-3" id="exampleFormControlFile11">
                                        <input type="file" class="form-control-file mt-3" id="exampleFormControlFile12">
                                        <input type="file" class="form-control-file mt-3" id="exampleFormControlFile13">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1">Opmerkingen:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-5 ">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="reset" class="btn bluebg text-dark mr-2">Reset</button>
                                        <a  href="mailto:taravandevenne@hotmail.com?Subject=Hello%20again" target="_top"> <button type="submit" class="btn bluebg text-dark" data-dismiss="modal">Versturen</button></a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>


            <!----------------------------------BUTTON VRAAG STELLEN---------------------------------->

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg bluecl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel2">Stel uw vraag/opmerking :</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="rest">
                                <legend class="col-form-label col-sm-2 pt-0 pl-0">Naam:</legend>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">E-mail:</label>
                                        <input type="email" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="col-6">
                                        <label >Telefoon:</label>
                                        <input type="tel" class="form-control" id="exampleInputTel2" aria-describedby="Telefoon" placeholder="Telefoon">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <label for="exampleFormControlTextarea1">Uw vraag/opmerking:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto px-0">
                                        <legend class="col-form-label col-sm-2 pt-3 ">Eventuele bestanden:</legend>
                                    </div>
                                    <div class="col-auto px-lg-0 pl-2">
                                        <input type="file" class="form-control-file mt-3" id="exampleFormControlFile14">
                                        <input type="file" class="form-control-file mt-3" id="exampleFormControlFile15">
                                        <input type="file" class="form-control-file mt-3" id="exampleFormControlFile16">
                                    </div>
                                </div>

                                <div class="row mt-5 ">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="reset" class="btn bluebg text-dark mr-2">Reset</button>
                                        <button type="submit" class="btn bluebg text-dark" data-dismiss="modal">Versturen</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>



        </div>
    </section>


@endsection
