<template>
    <div class="presentation">
        <div class="intro">
            <div class="intro_text">
                <p>
                    Depuis un peu plus de 40 ans Internet c’est imiscisser petit a petit dans nos vie et
                    Grandit.Internet a grandi au point de devenir la Source de divers Métier développeur,intégrateur
                    ,gestionnaire de base de données administrateur systeme et reseau.
                </p>
                <p>
                    C'est pourquoi depuis 20 ans L’iut de Gap pôle gea vous propose d’apprendre le métier de développeur
                    web en 6 mois à travers la Licence Pro Mobilité Internet Webmaster .
                </p>
                <p>
                    Parfaite pour étudié et maîtrisé La création de projet et application dans le domaine du web cette
                    licence vous propose d'étudier les bases de la création de site ainsi que les différentes
                    technologie
                    utilisé dans les entreprises du secteur.
                </p>
            </div>
            <div class="intro_block b1"></div>
            <div class="intro_block b2"></div>

        </div>
        <div class="prerequis">
            <h3>Prérequis</h3>
            <ul>
                <li>être titulaire d'un bac +2 informatique</li>
                <li>ou</li>
                <li>avoir des connaissance en informatique</li>
                <li>être motivé et asssidu</li>
            </ul>
        </div>
        <div class="target_people">
            <h3 class="title public">Public concerné</h3>
            <div class="boxes">
                <div v-for="(value,index) in box_text" :key="index" :class="'box box'+index"
                     :style="{backgroundImage:`url(${IMG_URL_GETTER}/Licence/${box_img[index]})`}">
                    <h4>{{value}}</h4>
                </div>
            </div>
        </div>
        <div class=" workspace">
            <h3 class="title">Espace De Travail</h3>
            <div class="workspace_text w_text_1">
                <p>
                    La salle informatique, réservée aux étudiants de la licence, est accessible toute la journée grâce à
                    un digicode.
                </p>
                <p> Chaque étudiant dispose d'un espace de travail personnel pendant toute la formation (bureau,
                    ordinateur récent, logiciels de développement et pour le multimédia).
                </p>
            </div>

            <img class="workspace_img w_img_1" :src="IMG_URL_GETTER+'/Licence/classroom.jpg'"
                 alt="a cool student classroom">

            <div class="workspace_text w_text_2">
                <p>Les cours sont donnés par des enseignants et ancien eleves issue
                    d'entreprise informatique et agence web afin de garantir la
                    pertinence des cours et technologie utilisés par les étudiants
                </p>
            </div>
            <img v-if="innerWidth >=768" class="workspace_img w_img_2" :src="IMG_URL_GETTER+'/Licence/classroom.jpg'"
                 alt="a cool student classroom">
        </div>
        <div class="hours">
            <h3 class="title reverse">Volume Horraires</h3>
            <div v-for="(circle,index) in circle_img" :key="index" :class="'circle-item circle'+index">
                <div class="circle-background"></div>
                <img class="circle-img" :src="IMG_URL_GETTER+'/Licence/'+circle"/>
                <span class="circle_text">{{circle_text[index]}}</span>
            </div>

        </div>
        <div class="admission_inscription ">
            <h3 class="title">Admission et obtention
                du diplome</h3>
            <div class="prerequis obtention">
                <h3>obtention du diplome</h3>
                <ul>
                    <li>avoir une moyenne générale > 10</li>
                    <li>avoir une note aux modules > 8</li>
                    <li>tout eleves ayant eu une moyenne >10 et une note
                        a un module inferieur a 8 recevra une attestation
                        notifiant l'elleves des module a repasser
                    </li>
                </ul>
            </div>
            <div class="inscription">
                <h3 class="title reverse inscription_title">Procédure d'inscription</h3>
                <div class="inscription_container_svg">
                <img class="inscription_svg" :src="IMG_URL_GETTER+'/svg/interview.svg'" alt="">
                </div>
                    <router-link class="inscription_btn" to="">Avec e-candidat</router-link>
                    <router-link class="inscription_btn" to="">Sans e-candidat</router-link>
            </div>
        </div>
    </div>
</template>
<script>
    import {mapGetters} from 'vuex';

    export default {
        name: "PresentationComponent",
        data: () => {
            return {
                box_img: ['setup.jpg', 'worker.jpg', 'student.jpg'],
                box_text: ['Salarié en pleine reconversion professionnel', 'salarié en formation ', 'étudiant'],
                innerWidth,
                circle_img: ['reunion.jpg', 'groupe.jpg', 'presentation.jpg'],
                circle_text: ['550h  de cours', 'Projet scolaire de 90h', 'Stage d\'une durée \n' +
                'de 3 a 6 mois']
            }
        },

        computed: {
            ...mapGetters(['IMG_URL_GETTER']),
        }
    }
</script>

<style scoped>
    p {
        margin-bottom: 10px;
    }

    * {
        color: white;
    }

    li {
        list-style-type: none;
    }

    .intro_text {
        color: white;
        background-color: #5193F4;
        padding: 30px 20px;
        font-size: 0.9em;
    }

    /*ecran2*/
    .prerequis {
        background-color: #1DB0BA;
        width: 320px;
        padding: 10px;
        font-size: 0.9em;
        margin: 10px auto;
    }

    .prerequis h3 {
        font-size: 1.2em;
        margin: 12px;
        width: fit-content;
    }

    .prerequis ul {
        width: 80%;
        padding-left: 0;
        margin-left: 10%;
        border-left: white 1px solid;
        text-align: center;
    }

    /*ecran3*/
    .title {
        background-color: #1DB0BA;
        font-size: 1.2em;
        padding: 30px 0;
        text-align: center;
        position: relative;
        width: 70%;
        margin: 15px 0;
    }

    .title::after {
        content: ""; /* This is necessary for the pseudo element to work. */
        display: block; /* This will put the pseudo element on its own line. */
        margin: 0; /* This will center the border. */
        position: absolute;
        left: 0;
        width: 46%; /* Change this to whatever width you want. */
        padding-top: 5px; /* This creates some space between the element and the border. */
        border-bottom: 1px solid white; /* This creates the border. Replace black with whatever color you want. */
    }

    .boxes {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .box {
        width: 90%;
        height: 325px;
        background-repeat: no-repeat;
        display: flex;
        margin-top: 20px;
        flex-direction: column;
        justify-content: flex-end;
        background-size: cover;
    }

    .box > h4 {
        width: 100%;
        height: 70px;
        margin: 0;
        font-size: 1.2em;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(90deg, #7fcff5bd, #4ca6bd94, #1cb1badb);
    }

    .box1 {
        background-position: bottom right;
    }

    /*ecran 4*/
    .workspace {
        display: flex;
        flex-direction: column;
    }

    .workspace_text {
        background-color: rgb(93, 153, 242, 0.83);
        font-size: 0.9em;
        padding: 10px 10px 0 10px;
        margin-top: 0;
    }

    .workspace_img {
        width: 100%;
    }

    .hours {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background-color: #EEEEEE;
    }

    .circle-item {
        position: relative;
        width: 250px;
        height: 250px;
    }

    .circle-background {
        width: 100%;
        height: 100%;
        background-color: #6cb2eb;
        border-radius: 100%;
    }

    .circle-img {
        width: 94%;
        height: 94%;
        position: absolute;
        background-color: white;
        top: 0;
        bottom: 0;
        left: 0;
        margin: auto auto;
        right: 0;
        border-radius: 100%;
    }

    .circle_text {
        width: 94%;
        height: 44%;
        position: absolute;
        background-color: rgb(0, 0, 0, 0.4);
        top: 49%;
        bottom: 0;
        left: 0;
        margin: auto auto;
        right: 0;
        text-align: center;
        border-radius: 0 0 50% 50% / 0 0 94% 94%;
        padding: 12%;
    }

    .reverse {
        color: #1DB0BA;
        background-color: inherit;
        align-self: flex-end;
        position: relative;
        right: 0;
    }

    .reverse:after {
        border-color: #1DB0BA;
        left: 54%;
    }

    .obtention {
        height: 280px;
    }

    .obtention > ul {
        height: 80%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .inscription{
        background-color: #EEEEEE;
        width: 100%;
        display: flex;
        flex-direction: column;
        margin-top: 2%;
    }
    .inscription_container_svg{
        overflow: hidden;
        width: 100%;
        height: 380px;
    }
.inscription_svg{
    width: 181%;
    margin-left: -38%;
    margin-top: -26%;
    height: 145%;
}

.inscription_btn{
    background-color: #52D2BC;
    padding: 10px;
    border-radius: 30px;
    text-align: center;
    font-style: italic;
    font-weight: bold;
    margin-bottom: 10px;
}
    @media screen and (min-width: 768px) {
        .intro {
            width: 100%;
            position: relative;
            height: 373px;
            padding: 5.4%;
        }

        .intro_text {
            margin: 0 auto;
            width: 100%;
            height: 100%;
            border: none;
            padding: 25px 10px 10px 20px;
            box-shadow: -8px -6px 0px 0px rgba(0, 0, 0, 0.25);
            font-size: 1em;
        }

        .intro_block {
            width: 50%;
            height: 265px;
            background-color: #C8DBFB;
            z-index: -1;
            position: absolute;
            border: none;
        }

        .b1 {
            top: 8%;
            left: 3%;
        }

        .b2 {
            bottom: 8%;
            right: 3%;
        }

        /*ecran2*/
        .prerequis {
            width: 450px;
            margin-left: 36%;
            margin-top: 20px;
            font-size: 1em;
        }

        .prerequis ul {
            padding-left: 30px;
            margin-left: 45px;

        }

        .prerequis ul li {
            width: 90%;
        }

        /*ecran 3*/
        .target_people {
            position: relative;
            background-color: #EEEEEE;
            padding: 20px 0;
        }

        .title {
            width: 33%;
        }

        .public {
            padding: 30px 0 245px 0;
        }

        .boxes {
            flex-direction: row;
            position: absolute;
            width: 92%;
            top: 75px;
            left: 59px;
            justify-content: space-around;
        }

        .box {
            width: 31%;
            height: 200px;
        }

        /*ecran 4*/
        .workspace {
            width: 95%;
            margin: 0 auto;
        }

        .workspace_img {
            width: 80%;
            position: relative;
            top: -60px;
            z-index: -1;
        }

        .workspace_text {
            width: 65%;
            padding: 15px;
        }

        .w_text_1 {
            align-self: flex-start;

        }

        .w_img_1 {
            align-self: flex-end;
        }

        .w_text_2 {
            align-self: flex-end;
        }

        .w_img_2 {
            align-self: flex-start;
        }

        .hours {
            padding: 0 17%;
            position: relative;
        }

        .reverse {
            position: absolute;
        }

        .circle-item {
            width: 33vw;
            height: 33vw;
        }

        .circle0 {
            align-self: flex-start;
            top: 20px;
        }

        .circle2 {
            align-self: flex-end;
            top: -20px;
        }

        .circle1:before, .circle1:after {
            content: '';
            position: absolute;
            background-color: #6cb2eb;
            width: 3vw;
            height: 3vw;
            border-radius: 100%;
        }

        .circle1:before {
            right: 32%;
            top: -20%;
        }

        .circle1:after {
            left: 32%;
            bottom: -20%;
        }

        .obtention {
            margin: 0 auto;
            width: 50%;
        }
        .inscription{
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        .inscription_container_svg{
            height: 600px;
        }
        .inscription_svg{
            margin-top: -17%;
        }
        .inscription_btn{
            width: 40%;
            margin-top: 25px;
        }
        .inscription_title{
            top: 0;
            position: relative;
            width: 50% !important;
        }

    }


    @media screen and (min-width: 1024px) {
        .intro {
            width: 100%;
            margin: 0 auto;
        }

        .intro_text {
            box-shadow: -11px -13px 0px 0px rgba(0, 0, 0, 0.25);
            font-size: 1em;
        }

        /*ecran2*/
        .prerequis {
            margin-left: 53%;
        }

        .prerequis > h3 {
            font-size: 1.4em;
        }

        /*ecran 3*/
        .title {
            width: 30%;
            font-size: 1.4em;
        }

        .boxes {
            height: 60%;
            top: 27%;
            left: 8%;
        }

        .box {
            height: 100%;
            margin: 0;
        }

        .public {
            padding: 2% 0 25% 0;
        }

        .workspace_text {
            font-size: 1.2em;
        }

        .hours {
            padding: 1% 23%;
        }

        .circle-item {
            width: 20vw;
            height: 20vw;
        }

        .circle1:before, .circle1:after {
            width: 4vw;
            height: 4vw;
        }

        .circle1:before {
            top: -28%;
            right: 52%;

        }

        .circle1:after {
            bottom: -28%;
            left: 52%;
        }

        .obtention {
            width: 50%;
            margin: 0 auto;
            height: 320px;
            padding:30px;
        }

        .obtention > ul {
            margin: 0 auto;
            text-align: left;
        }
        .inscription{
            padding: 1% 15%;
        }
    }

    @media screen and (min-width: 1440px) {
        .intro {
            padding: 4.4%;
        }

        .intro_text {
            font-size: 1.2em;
        }

        /*ecran2*/
        .prerequis {
            margin-left: 66%;
        }

        .prerequis li {
            font-size: 1.2em;
        }

        /*ecran 3*/
        .title {
            font-size: 1.4em;
            width: 25%;
        }

        .boxes {
            height: 63%;
        }

        /*ecran4*/
        .reverse {
            font-size: 2em;
        }

        .circle_text {
            font-size: 1.5em;
        }

        .obtention {
            width: 43%;
            margin: 0 auto;
            height: 365px;
            padding: 35px;
        }

        .obtention > ul {
            margin: 0 auto;
            text-align: left;
        }

    }

</style>
