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
            <h3 class="title">espace de travail</h3>

            <div class="workspace_text">
                <p>
                    La salle informatique, réservée aux étudiants de la licence, est accessible toute la journée grâce à
                    un digicode.
                </p>
                <p> Chaque étudiant dispose d'un espace de travail personnel pendant toute la formation (bureau,
                    ordinateur récent, logiciels de développement et pour le multimédia).
                </p>
            </div>

            <img class="workspace_img"  :src="IMG_URL_GETTER+'/Licence/classroom.jpg'" alt="a cool student classroom">

            <div class="workspace_text">
                <p>Les cours sont donnés par des enseignants et ancien eleves issue
                    d'entreprise informatique et agence web afin de garantir la
                    pertinence des cours et technologie utilisés par les étudiants
                </p>
            </div>
            <img v-if=" innerWidth >= 728" src="" alt="fgshg">
        </div>
        <div class="hours"></div>
        <div class="admission_inscription "></div>
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
        margin-top: 20px;
        margin-bottom: 0;
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
    .workspace{
        display: flex;
        flex-direction: column;
    }
    .workspace_text{
        background-color: #5D99F2;
        font-size: 0.9em;
        padding: 10px 10px 0 10px;
        margin-top: 5px;
    }
    .workspace_img{
        width: 100%;
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
            margin: 0;
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

        /*ecran 3*/
        .title {
            width: 30%;
            font-size: 1.2em;
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

        .prerequis h3 {
            font-size: 1.4em;
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
    }

</style>
