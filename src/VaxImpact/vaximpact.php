<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.css" integrity="sha512-XXtRBFtk/QfR8GEWwQPYjrQBHQwjidXg0wo8HJi9YOaFycWqd2uWkjJoAyx8Mb/+H8uhvmf70EAIxDnQxrwrvw==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js" integrity="sha512-igVQ7hyQVijOUlfg3OmcTZLwYJIBXU63xL9RC12xBHNpmGJAktDnzl9Iw0J4yrSaQtDxTTVlwhY730vphoVqJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
.shadow {
        border: 0px solid black;
        padding: 12px;
        border-radius: 7px;
        text-align: left;
        box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
        background: #ffffff;
        margin-top: 10px;
    }
    
p {
    font-size: 17px;
}
.wrap {
        display: flex;
        margin-top: 0px;
        flex-wrap: wrap;
    }
.wrap>* {
    flex: 1 1 200px;
}
.boxshadow {
        border: 0px solid black;
        margin-top: 20px;
        padding: 10px 10px 10px 10px;
        border-radius: 7px;
        margin-right: 15px;
        max-width: 500px;
        text-align: left;
        /*box-shadow: 6px 4px 25px #c3d19d;*/
        box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
        width: 100%;
        background: #ffffff;
    }

.boxshadow-wide {
    border: 0px solid black;
    margin-top: 20px;
    padding: 10px 10px 10px 10px;
    border-radius: 7px;
    margin-right: 15px;
    max-width: 800px;
    text-align: left;
    /*box-shadow: 6px 4px 25px #c3d19d;*/
    box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
    width: 100%;
    background: #ffffff;
}
.title_h2 {
    margin-top: 80px;
    margin-bottom: 10px;
}
.title {
    margin-top: 50px;
}
</style>

<body>
    <p><b>Combien d'hospitalisations ont été évitées grâce au vaccin Covid19 ? Quelle est l'importance de la non vaccination du Covid19 dans les décès hospitaliers ?</b> Cet outil permet d'évaluer l'impact de la vaccination sur les hospitalisations et décès de la Covid19.
    Ces statistiques s'appuient sur les données issues des études de la DREES mises à jour chaque semaine (dernière : <span id="date-maj-1">-/-/-</span>). La méthodologie et les calculs sont décrits en bas de page.</p>
    
    <!--
    <div>
    <input type="radio" id="ensemble-population" name="population" value="ensemble-population" onchange="radioButtonChanged('ensemble')" checked>
    <label for="ensemble-population">Ensemble de la population</label>
    </div>

    <div>
    <input type="radio" id="tranche-age" name="population" value="tranche-age" onchange="radioButtonChanged('tranche')">
    <label for="tranche-age">Tranche d'âge : <span id="age">--</span> ans</label>
    </div>
    

    <div id="slider" style="max-width: 200px; margin-top: 5px;"></div>
    -->

    <h2 class="title_h2">Cas positifs</h2>
    <p>Ce graphique permet de visualiser le nombre de nouveaux cas positifs déclarés comme symptomatiques chaque jour en fonction du statut vaccinal des personnes.</p>

        <div style="width: 100%; max-width: 1000px;">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/cas_journ.jpeg" target="_blank" rel="noopener noreferrer">
                <img id="imageTab" src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/pcr_plus_sympt_proportion_selon_statut_vaccinal.jpeg" width="95%">
            </a>
        </div>

    <!--
    <p>Ces quatre graphiques permettent de visualier les quatre principaux indicateurs de l'épidémie (cas symptomatiques, admissions à l'hôpital et en soins critiques, décès hospitaliers) suivant le statut vaccinal des personnes. Les données sont rapportées au nombre de personnes de chaque groupe afin d'écarter le biai lié à la couverture vaccinale.</p>

    <h3 class="title">Réduction du risque de cas positif</h3>
    <h3 class="title">Cas positifs attribuables à la non vaccination</h3>

    
    <div class="row charts lineaire">
            
            <div class="col-md-6">
                <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/rea_journ.jpeg" target="_blank" rel="noopener noreferrer">
                    <img id="imageTab" src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/sc_proportion_selon_statut_vaccinal.jpeg" width="95%">
                </a>
            </div>
            
    </div>
    -->
    <br>
    <h2 class="title_h2">Admissions à l'hôpital</h2>
    <p>Ce graphique permet de visualiser le nombre de nouvelles admissions à l'hôpital chaque jour en fonction du statut vaccinal des patients.</p>
        
        <div style="width: 100%; max-width: 1000px;">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/hosp_journ.jpeg" target="_blank" rel="noopener noreferrer">
                <img id="imageTab" src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/hc_proportion_selon_statut_vaccinal.jpeg" width="95%">
            </a>
        </div>
    <h3 class="title">Réduction du risque d'admission</h3>
    <p>Imaginons deux groupes de taille identique, l'un comportant des individus vaccinés de <span id="age_paragraphe2">--</span> et l'autre non vaccinés. S'il y a une personne hospitalisée chaque jour dans le groupe vacciné, alors il y aura probablement <span id="chiffre-non-vax-hosp-paragraphe">--</span> hospitalisations chaque jour dans le groupe non vacciné.</p>
    
    <div style="margin-top: 50px;">
            <div>
                <div id="slider_hosp" style="max-width: 500px; margin-top: 5px; margin-left: 20px;"></div>
            </div>
    </div>

    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow" style="">
                <span style="color:#4fafd9; font-size: 20px;">Groupe vacciné • </span>
                <span style="color:#4fafd9; font-size: 20px; font-weight: bold;"><span id="chiffre-vax-hosp">--</span> hospitalisation(s)</span><br>
                <span id="hosp-non-vax-cumul" style="font-size: 15px;">cumulée sur 1 jour</span><br>

                <div id="figure-vax-hosp" style="margin-top: 20px;"></div>
            </div>
            <div class="boxshadow">
                <span style="color:orange; font-size: 20px;">Groupe non vacciné • </span>
                <span style="color:orange; font-size: 20px; font-weight: bold;"><span id="chiffre-non-vax-hosp">--</span> hospitalisation(s)</span><br>
                <span id="hosp-vax-cumul" style="font-size: 15px;">cumulées sur 1 jour</span><br>

                <div id="figure-non-vax-hosp" style="margin-top: 20px;"></div>
            </div>
    </div>
    <div style="font-size: 10px; margin-top: 10px;">Mise à jour : <span id="date-maj-2">-/-/-</span> • Données DREES • VaxImpact.fr</div>
    
    <br>
    <h3 class="title">Admissions attribuables à la non vaccination</h3>
    <p>Cet indicateur permet d'estimer la proportion des hospitalisations parmi les personnes non vaccinées qui auraient pu être évités si elles avaient été vaccinées.</p>
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow-wide" style="">
                <span style="color:black; font-size: 20px;">Hospitalisations attribuables à la non vaccination • </span>
                <span style="color:#800; font-size: 20px; font-weight: bold;"><span id="chiffre-vax-hosp-evitables">--</span> %</span><br>
                <p>Cela signifie que sur 100 hospitalisations de personnes non vaccinées ayant <span id="age_surrisque_hosp">--</span>, <span id="chiffre-vax-hosp-evitables-paragraphe">--</span> hospitalisations auraient pu être évités par la vaccination. </p>
                <div id="figure-vax-hosp-evitables" style="margin-top: 20px;"></div>
            </div>
    </div>
    <div style="font-size: 10px; margin-top: 10px;">Mise à jour : <span id="date-maj-4">-/-/-</span> • Données DREES • VaxImpact.fr</div>
    <br>
    </p>En population générale, le nombre d'hospitalisations qui auraient pu être évitées par la vaccination est de <span id="chiffre-vax-hosp-evitables-pop-generale">--</span> % (attention cet indicateur dépend du taux de vaccination).</p>
    
    <br>
    <h2 class="title">Décès hospitaliers</h2>
    <p>Ce graphique permet de visualiser le nombre de nouveaux décès hospitaliers chaque jour en fonction du statut vaccinal des personnes.</p>

        <div style="width: 100%; max-width: 1000px;">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/dc_journ.jpeg" target="_blank" rel="noopener noreferrer">
                <img id="imageTab" src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/dc_proportion_selon_statut_vaccinal.jpeg" width="95%">
            </a>
        </div>
    <br>
    <h3 class="title">Réduction du risque de décès</h3>

    <p>Imaginons deux groupes de taille identique, l'un comportant des individus vaccinés de <span id="age_paragraphe3">--</span> et l'autre non vaccinés. S'il y a un décès chaque jour dans le groupe vacciné, alors il y aura probablement <span id="chiffre-non-vax-paragraphe">--</span> décès chaque jour dans le groupe non vacciné.</p>
    <div style="margin-top: 50px;">
            <div>
                <div id="slider_dc" style="max-width: 500px; margin-top: 5px; margin-left: 20px;"></div>
            </div>
    </div>
    
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow" style="">
                <span style="color:#4fafd9; font-size: 20px;">Groupe vacciné • </span>
                <span style="color:#4fafd9; font-size: 20px; font-weight: bold;"><span id="chiffre-vax">--</span> décès</span><br>
                <span id="dc-vax-cumul" style="font-size: 15px;">cumulé sur 1 jour</span><br>
                <div id="figure-vax" style="margin-top: 20px;"></div>
            </div>
            <div class="boxshadow">
                <span style="color:orange; font-size: 20px;">Groupe non vacciné • </span>
                <span style="color:orange; font-size: 20px; font-weight: bold;"><span id="chiffre-non-vax">--</span> décès</span><br>
                <span id="dc-non-vax-cumul" style="font-size: 15px;">cumulés sur 1 jour</span><br>
                <div id="figure-non-vax" style="margin-top: 20px;"></div>
            </div>
    </div>
    <div style="font-size: 10px; margin-top: 10px;">Mise à jour : <span id="date-maj-3">-/-/-</span> • Données DREES • VaxImpact.fr</div>


    
    <br>
    <h3 class="title">Décès attribuables à la non vaccination</h3>
    <p>Cet indicateur permet d'estimer la proportion des décès parmi les personnes non vaccinées qui auraient pu être évités si elles avaient été vaccinées.</p>
    <div class="wrap" style="margin-top: 20px;">
            <div class="boxshadow-wide" style="">
                <span style="color:black; font-size: 20px;">Décès attribuables à la non vaccination • </span>
                <span style="color:#800; font-size: 20px; font-weight: bold;"><span id="chiffre-vax-evitables">--</span> %</span><br>
                <p>Cela signifie que sur 100 décès de personnes non vaccinées ayant <span id="age_surrisque">--</span>, <span id="chiffre-vax-evitables-paragraphe">--</span> décès auraient pu être évités par la vaccination. </p>
                <div id="figure-vax-evitables" style="margin-top: 20px;"></div>
            </div>
    </div>
    <div style="font-size: 10px; margin-top: 10px;">Mise à jour : <span id="date-maj-5">-/-/-</span> • Données DREES • VaxImpact.fr</div>
    <br>
    <p>En population générale, le nombre de décès qui auraient pu être évités par la vaccination est de <span id="chiffre-vax-evitables-pop-generale">--</span> % (attention cet indicateur dépend du taux de vaccination).</p>

    <br>
    <br>
    <?php include(__DIR__ . '/menuBasPage.php'); ?>
    <br>
    <br>
    <div style="border:solid 2px rgba(0, 0, 0, 0.1); border-radius: 10px; padding: 30px;">
        <h2>Méthodologie</h2>
        <p>Ces statistiques sont obtenues à partir des données publiées par la DREES. Elles seront mises à jour lors de la publication de nouvelles données.</p>
        <p><a href="https://github.com/CovidTrackerFr/data-utils/raw/main/vaximpact/data/doc/impact_vaccin_covid.pdf">Télécharger le document de méthodologie (PDF)</a></p>
    </div>
    <br>
    Auteurs : Sacha Guilhaumou, Guillaume Rozier.<br>
    Remerciements pour leur aide : Catherine Hill, Dan Chaltiel.
    
</body>

<script>
var slider = document.getElementById('slider');
var slider_hosp = document.getElementById('slider_hosp');
let LIGHT_BLUE = "#4fafd9"
let LIGHT_GREEN = "#3ab55f" //"#4fd978"
let MSG_DONNEES_INSUFFISANTES = ` 
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="15px" width="15px" x="0px" y="0px"
        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; margin-right: 3px;" xml:space="preserve">
    <g>
        <g>
            <path d="M256,0C114.497,0,0,114.507,0,256c0,141.503,114.507,256,256,256c141.503,0,256-114.507,256-256
                C512,114.497,397.493,0,256,0z M256,472c-119.393,0-216-96.615-216-216c0-119.393,96.615-216,216-216
                c119.393,0,216,96.615,216,216C472,375.393,375.385,472,256,472z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M256,128.877c-11.046,0-20,8.954-20,20V277.67c0,11.046,8.954,20,20,20s20-8.954,20-20V148.877
                C276,137.831,267.046,128.877,256,128.877z"/>
        </g>
    </g>
    <g>
        <g>
            <circle cx="256" cy="349.16" r="27"/>
        </g>
    </g> 
    <i>  Les données de la DREES sont insuffisantes pour calculer cet indicateur, sélectionnez une autre tranche d'âge.</i>
    `

var value_age = 6;
let DATE_MAX = "26/07/2021"
let DICT_AGES_STR = {
    100 : "tous âges",
    0: "0 - 9 ans",
    1: "10 - 19 ans",
    2: "20 - 29 ans",
    3: "30 - 39 ans",
    4: "40 - 49 ans",
    5: "50 - 59 ans",
    6: "60 - 69 ans",
    7: "70 - 79 ans",
    8: "80 - 89 ans",
}
var data;

download_data();
function download_data(){
    var requestURL = 'https://raw.githubusercontent.com/CovidTrackerFr/data-utils/main/vaximpact/data/output/vaximpact.json';
    var request = new XMLHttpRequest();
    request.open('GET', requestURL);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        data = request.response;
        populate_stats(data);
    }
}

function populate_stats(data){
    data_last_day = data[DATE_MAX];
    update_stats(
        sur_risque_hopital = parseFloat(data_last_day["hospitalisation_conventionnelle"]["risque_relatif"]).toFixed(0), 
        sur_risque_dc = parseFloat(data_last_day["deces"]["risque_relatif"]).toFixed(0), 
        hosp_evitables = parseFloat(data_last_day["hospitalisation_conventionnelle"]["FER_non_vacc"]).toFixed(0), 
        hosp_evitables_pop_generale = parseFloat(data_last_day["hospitalisation_conventionnelle"]["FER_pop"]).toFixed(0), 
        dc_evitables = parseFloat(data_last_day["deces"]["FER_non_vacc"]).toFixed(0),
        dc_evitables_pop_generale=parseFloat(data_last_day["deces"]["FER_pop"]).toFixed(0),
        )
}

function get_icon_body(color="black", animate=false){
    animate_str=""
    if(animate==true){
        animate_str=`
                <animate
                    attributeType="XML"
                    attributeName="fill"
                    values="#800;#f00;#800;#800"
                    dur="2s"
                    repeatCount="indefinite"/>
        `
    }
    return `<svg id="Icons" height="40" viewBox="0 0 74 74" width="31" xmlns="http://www.w3.org/2000/svg" fill="${color}">
    <path d="m45.74 19.75h-17.48a6 6 0 0 0 -6 6v19.57a2.15 2.15 0 0 0 4.29 0v-11.32a1.11 1.11 0 0 1 2.22 0v34.44a3.56 3.56 0 0 0 7.12 0v-17.66a1.11 1.11 0 0 1 2.22 0v17.66a3.56 3.56 0 0 0 7.12 0v-34.44a1.11 1.11 0 0 1 2.22 0v11.32a2.15 2.15 0 0 0 4.29 0v-19.58a6 6 0 0 0 -6-5.99z"/><circle cx="37" cy="8.87" r="6.87"/>
    ${animate_str}
    </svg>
    `
}

function get_bed_icon(color, animate=false){
    animate_str = ""
    if(animate==true){
        animate_str = `
                 <animate
                    attributeType="XML"
                    attributeName="fill"
                    values="#800;#f00;#800;#800"
                    dur="2s"
                    repeatCount="indefinite"/>`
    }
    return `
        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="35px" height="25px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve" fill="${color}">
        <g>
            <g>
                <path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
                    c0,8.399-0.5,16.8-1.6,25H789.1z"/>
                <path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
                    C273.4,293.5,223.1,263.7,165.9,263.7z"/>
                <path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
                    c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
                    C0,718,13.4,731.5,30,731.5z"/>
                    ${animate_str}
            </g>
        </g>
        </svg>
`
}

function radioButtonChanged(type){
    if(type=="ensemble"){
        slider.setAttribute('disabled', true);
        document.getElementById("age").innerHTML = "--";
        change_ages(100);
    }

    if(type=="tranche"){
        slider.removeAttribute('disabled');
        sliderChanged();
    }

}

function get_bodies(number, color="black", animate=false){
    var bodies = "";
    for(let i = 0; i < number; i++){
        bodies = bodies + get_icon_body(color, animate)
    }
    return bodies;

}

function get_beds(number, color="black", animate=false){
    var beds = "";
    for(let i = 0; i < number; i++){
        beds = beds + get_bed_icon(color, animate)
    }
    return beds;

}

//update_stats();
function update_stats(sur_risque_hopital=0, sur_risque_dc=0, hosp_evitables=0, hosp_evitables_pop_generale=0, dc_evitables=0, dc_evitables_pop_generale=0){
    populateFigureHosp(nb_vax=1, sur_risque=sur_risque_hopital);
    populateFigure(nb_vax=1, sur_risque=sur_risque_dc);
    populateFigureDecesEvitables(dc_evitables=dc_evitables, dc_evitables_pop_generale=0);
    populateFigureHospEvitables(hosp_evitables=hosp_evitables, hosp_evitables_pop_generale=hosp_evitables_pop_generale);
    populateDates();
}

function populateDates(){
    
    for (let i = 1; i <= 5; i++) {
        document.getElementById(`date-maj-${i}`).innerHTML = DATE_MAX;
    }
    
}

function populateFigure(nb_vax=1, sur_risque=0){
    let figure_vax = get_bodies(nb_vax, LIGHT_BLUE);
    let figure_non_vax = get_bodies(sur_risque*nb_vax, "orange");
    
    if(sur_risque == 0){
        document.getElementById("figure-vax").innerHTML = MSG_DONNEES_INSUFFISANTES;
        document.getElementById("figure-non-vax").innerHTML = MSG_DONNEES_INSUFFISANTES;
    }
    else{
        document.getElementById("figure-vax").innerHTML = figure_vax;
        document.getElementById("chiffre-vax").innerHTML = nb_vax;
        document.getElementById("chiffre-non-vax").innerHTML = sur_risque*nb_vax;
        document.getElementById("chiffre-non-vax-paragraphe").innerHTML = sur_risque;
        document.getElementById("figure-non-vax").innerHTML = figure_non_vax;
    }
}

function populateFigureHosp(nb_vax=1, sur_risque=1){
    let figure_vax = get_beds(nb_vax, LIGHT_BLUE);
    let figure_non_vax = get_beds(sur_risque*nb_vax, "orange");

    if(sur_risque == 0){
        document.getElementById("figure-vax-hosp").innerHTML = MSG_DONNEES_INSUFFISANTES;
        document.getElementById("figure-non-vax-hosp").innerHTML = MSG_DONNEES_INSUFFISANTES;
    }
    else{
        document.getElementById("figure-vax-hosp").innerHTML = figure_vax;
        document.getElementById("chiffre-vax-hosp").innerHTML = nb_vax;
        document.getElementById("chiffre-non-vax-hosp").innerHTML = sur_risque*nb_vax;
        document.getElementById("chiffre-non-vax-hosp-paragraphe").innerHTML = sur_risque;
        document.getElementById("figure-non-vax-hosp").innerHTML = figure_non_vax;
    }
}

function populateFigureDecesEvitables(){
    var figure_vax = get_bodies(100-dc_evitables, "grey");
    figure_vax += get_bodies(dc_evitables, LIGHT_GREEN, animate=true);

    if(dc_evitables == 0){
        document.getElementById("figure-vax-evitables").innerHTML = MSG_DONNEES_INSUFFISANTES;
    }
    else{
        document.getElementById("chiffre-vax-evitables").innerHTML = dc_evitables;
        document.getElementById("chiffre-vax-evitables-pop-generale").innerHTML = dc_evitables_pop_generale;
        document.getElementById("chiffre-vax-evitables-paragraphe").innerHTML = dc_evitables;
        document.getElementById("figure-vax-evitables").innerHTML = figure_vax;
    }
}

function populateFigureHospEvitables(){
    var figure_vax = get_beds(100-hosp_evitables, "grey");
    figure_vax += get_beds(hosp_evitables, LIGHT_GREEN, animate=true);
    if(hosp_evitables == 0){
        document.getElementById("figure-vax-hosp-evitables").innerHTML = MSG_DONNEES_INSUFFISANTES;
    }
    else{
        document.getElementById("chiffre-vax-hosp-evitables").innerHTML = hosp_evitables;
        document.getElementById("chiffre-vax-hosp-evitables-pop-generale").innerHTML = hosp_evitables_pop_generale;
        document.getElementById("chiffre-vax-hosp-evitables-paragraphe").innerHTML = hosp_evitables;
        document.getElementById("figure-vax-hosp-evitables").innerHTML = figure_vax;
    }
}

//buildNoUiSlider()

change_ages(100)
function change_ages(value){
    document.getElementById("age_paragraphe2").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_paragraphe3").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_surrisque_hosp").innerHTML = DICT_AGES_STR[value];
    document.getElementById("age_surrisque").innerHTML = DICT_AGES_STR[value];
}

function sliderChanged(){
    let value = parseInt(slider.noUiSlider.get())
    document.getElementById("age").innerHTML = DICT_AGES_STR[value];
    //document.getElementById("age_paragraphe").innerHTML = DICT_AGES_STR[value];
    change_ages(value);
    value_start = value;
}

function plural(value_pl){
    jour_s = ""
        if(value_pl>1){
            jour_s = "s"
        }
    return jour_s
}

function sliderRiskChanged(type){
    if(type=="hosp"){
        let value = parseInt(slider_hosp.noUiSlider.get());
        sur_risque = parseFloat(data[DATE_MAX]["hospitalisation_conventionnelle"]["risque_relatif"]).toFixed(0);
        populateFigureHosp(nb_vax=value, sur_risque=sur_risque);
        
        jour_s = plural(value);
        
        cumule_s = plural(value=value);
        document.getElementById("hosp-vax-cumul").innerHTML = `cumulées sur ${value} jour${jour_s}`;

        cumule_s = plural(sur_risque*value);
        document.getElementById("hosp-non-vax-cumul").innerHTML = `cumulées sur ${value} jour${jour_s}`;
        
    } else if (type=="dc"){
        let value = parseInt(slider_dc.noUiSlider.get());
        sur_risque = parseFloat(data[DATE_MAX]["deces"]["risque_relatif"]).toFixed(0);
        populateFigure(nb_vax=value, sur_risque=sur_risque);

        jour_s = plural(value);
        
        cumule_s = plural(value);
        document.getElementById("dc-vax-cumul").innerHTML = `cumulé${cumule_s} sur ${value} jour${jour_s}`;

        cumule_s = plural(sur_risque*value);
        document.getElementById("dc-non-vax-cumul").innerHTML = `cumulé${cumule_s} sur ${value} jour${jour_s}`;
    }
}

function buildNoUiSlider(){
    noUiSlider.create(slider, {
        start: [value_age],
        connect: true,
        step: 1,
        range: {
            'min': 0,
            'max': 8,
        },
    });
    slider.setAttribute('disabled', true);
    slider.noUiSlider.on('change', function () { sliderChanged(); });
}

buildNoUiSlider_hosp();
function buildNoUiSlider_hosp(){
    noUiSlider.create(slider_hosp, {
        start: [1],
        connect: true,
        step: 1,
        range: {
            'min': 1,
            'max': 50,
        },
        tooltips: wNumb({decimals: 0, prefix: "Jour "}),
        //tooltips: {to: (value: number){return "lol";}}
    });
    //slider.setAttribute('disabled', true);
    slider_hosp.noUiSlider.on('slide', function () { sliderRiskChanged("hosp"); });
}

buildNoUiSlider_dc();
function buildNoUiSlider_dc(){
    noUiSlider.create(slider_dc, {
        start: [1],
        connect: true,
        step: 1,
        range: {
            'min': 1,
            'max': 50,
        },
        tooltips: wNumb({decimals: 0, prefix: "Jour "}),
        //tooltips: {to: (value: number){return "lol";}}
    });
    //slider.setAttribute('disabled', true);
    slider_dc.noUiSlider.on('slide', function () { sliderRiskChanged("dc"); });
}

</script>