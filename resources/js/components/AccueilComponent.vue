<template>
    <div>
        <div v-if="screen<1024" class="accueil">
            <div class="logo_text">
                <div class="logo">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </div>
                <div class="text_lp">
                    Licence Professionnelle
                </div>
                <div class="text_description">
                    Mobilité, Internet, Web
                </div>
            </div>
            <div class="accueil_img">
                <img :src="img+'/accueil.png'" alt="a human with a computer">
            </div>
            <div class="presentation">
                <div>
                    Cette licenceb <span class="bold">professionnelle</span>
                    forme des diplômés dans les secteurs
                    très demandeurs et porteurs du <span class="bold"> DÉVELOPPEMENT WEB,
                D'APPLICATION MOBILES et D'OBJETS CONNECTES.</span>
                </div>
            </div>
            <div class="presentation">
                <div>
                    Les <span class="bold">DEVELOPPEURS WEB</span> devront maîtriser de nombreux langages de
                    programmation comme le <span class="bold">PHP,le JavaScript, le HTML5, le CSS3</span> mais aussi
                    connaître des <span class="bold">CMS</span>, des frameworks et des bibliothèques. Des compétences en
                    bases de données, <span class="bold">réseau et sécurité</span> seront nécessaire.

                </div>
            </div>
        </div>
        <div v-else class="accueil">

            <div class="relative_container">
                <div class="logo_text">
                    <div class="logo">
                        <svg>
                            <use xlink:href="#logo"></use>
                        </svg>
                    </div>
                    <div class="text_lp">
                        Licence Professionnelle
                    </div>
                    <div class="text_description">
                        Mobilité, Internet, Web
                    </div>
                </div>
                <div class="presentation p1">
                    <div>
                        Cette licenceb <span class="bold">professionnelle</span>
                        forme des diplômés dans les secteurs
                        très demandeurs et porteurs du <span class="bold"> DÉVELOPPEMENT WEB,
                D'APPLICATION MOBILES et D'OBJETS CONNECTES.</span>
                    </div>
                </div>
                <div class="presentation p2">
                    <div>
                        Les <span class="bold">DEVELOPPEURS WEB</span> devront maîtriser de nombreux langages de
                        programmation comme le <span class="bold">PHP,le JavaScript, le HTML5, le CSS3</span> mais aussi
                        connaître des <span class="bold">CMS</span>, des frameworks et des bibliothèques. Des
                        compétences en
                        bases de données, <span class="bold">réseau et sécurité</span> seront nécessaire.

                    </div>
                </div>
                <div class="accueil_img">
                    <svg>
                        <use xlink:href="#accueil-1"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="item relative">
            <div class="item_img">
                <img :src="img+'/iMac2.png'" alt="">
            </div>
            <div class="argument">
                <h3> Un secteur qui recrute !</h3>
                <p class="paragraphe">Beaucoup d'entreprises font appel aujourd'hui aux technologies nouvelles comme
                    moyens d'interactions
                    internes ou externes : commerce électronique, télétravail, vidéoconférence, télécommunication
                    d'informations et de documents électroniques, gestion de projets multi-localisés etc...</p>
                <p class="paragraphe" v-show="screen>=1024">Désormais, dans les entreprises, les hommes et les machines
                    coopèrent en permanence au travers de
                    nouveaux outils tels Internet, Intranet, Réseaux d'entreprise, Système d'informations Distribuées et
                    Multimédia. Ces outils nécessitent une évolution des modes de pensée et des métiers. Ces nouveaux
                    métiers imposent une grande ouverture d'esprit, une polyvalence, des connaissances techniques et
                    humaines.</p>
            </div>
            <a href="">
                <button class="item_btn">
                    Les Débouché
                </button>
            </a>
        </div>
        <div class="item relative item2">
            <div class="item_img">
                <img :src="img+'/miw_2019.png'" alt="">
            </div>
            <div class="argument">
                <h3>Pourquoi choisir cette formation ?</h3>
                <p class="paragraphe">
                    Cette Licence professionnelle forme des diplômés dans les secteurs très demandeurs et porteurs du
                    développement
                    web, d'applications mobiles et d'objets connectés.
                </p>

            </div>
            <div class="item_group_btn">
                <a href="">
                    <button class="item_btn">
                        Les Compétences
                    </button>
                </a>
                <a href="">
                    <button class="item_btn">
                        Découvrez le programme
                    </button>
                </a>
                <a href="#">
                    <button class="item_btn">
                        Devenir Étudiant
                    </button>
                </a>
            </div>
        </div>
        <div class="boxes">
            <div class="box"  :style="{backgroundImage:`url(${img}/stuff.png)`}">
                <h3>Travail de groupe</h3>
            </div>
            <div class="box" :style="{backgroundImage:`url(${img}/cours-design.png)`}" >

                <h3>Des enseignants issus du monde professionnel</h3>
            </div>

            <div class="box " :style="{backgroundImage:`url(${img}/femme-ordi.png)`}" >

                <h3>Les dernière technologie</h3>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AccueilComponent",
        props: ['img_url'],
        methods: {
            sizeHandler() {
                this.screen = window.innerWidth;
            }
        },
        mounted() {
            window.addEventListener('resize', this.sizeHandler);
        },
        data() {
            return {
                img: this.img_url,
                screen: window.innerWidth,
            }
        }
    }
</script>

<style scoped>

    /* ecran 1   */
    img, svg {
        width: 100%;
        height: 100%;
    }

    * {
        color: white;
    }

    .accueil {
        width: 100%;
        background: linear-gradient(45deg, #2198a2, #76c8eb, blanchedalmond);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 15px;
    }

    .logo_text {
        width: 70%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        margin-top: 45px;
    }

    .logo {
        height: 110px;
    }

    .text_lp {
        font-size: 0.8em;
    }

    .text_description {

        font-size: 1.2em;
    }

    .bold {
        font-weight: bold;
    }

    .accueil_img {
        width: 100%;
        margin-top: 30px;
    }

    /* ecran 2 */
    .presentation {
        margin-top: 25px;
        width: 92%;
        text-align: center;
    }

    .argument {
        background-color: #2198A2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .argument > h3 {
        font-size: 2.2em;
    }

    .item_btn {
        background-color: #2198a2;
        height: 45px;
        width: 70%;
        margin: 10px 15%;
        border: gray 1px solid;
        border-radius: 18px;
    }

    /*ecran 3 */
.box{
    width: 100%;
    height: 325px;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    background-size:110%,cover;
}
.box >h3{
    width: 100%;
    height: 70px;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(90deg, #7fcff5bd, #4ca6bd94,#1cb1badb);
}

    @media screen and (min-width: 768px) {

        .item {
            width: 75%;
            margin: 0 auto;
        }

        .logo_text {
            width: 33%;
        }

        .text_lp {
            margin-top: 5px;
        }
    }

    @media screen  and (min-width: 1024px) {

        .accueil_img {
            width: 100%;
        }

        .relative_container {
            position: relative;
            width: 100%;
            height: 85vh;
        }

        .accueil_img {
            height: 100%;
        }

        .presentation {
            position: absolute;
            text-align: left;
            font-size: 0.7em;
            width: 40%;
            margin: 0;
        }

        .p1 {
            top: 275px;
            left: 65px;
        }

        .p2 {
            top: 350px;
            left: 65px;
        }

        .logo_text {
            position: absolute;
            width: 240px;
            top: 90px;
            left: 65px;
            margin: 0;
        }

        /*ecran2*/
        .item {
            margin-bottom: 50px;
        }

        .relative {
            position: relative;
            width: 100%;
        }

        .item_img {
            width: 45%;
            margin-left: -8%;
        }

        .argument {
            width: 69%;
            font-size: 0.6em;
            position: absolute;
            top: 23%;
            right: 0;
            text-align: left;
            padding: 15px 25px;
        }

        .item_btn {
            position: absolute;
            width: 220px;
            top: 84%;
            right: 5%;
            margin: 0;
        }

        .item2 .item_img {
            width: 30%;
            margin-right: 5px;
            margin-left: 69%;
            font-size: 0.7em;
        }

        .item2 .argument {
            width: 70%;
            top: 3px;
            left: 0;
            font-size: 0.7em;
        }

        .item2 .item_btn {
            position: inherit;
        }

        .item2 .item_group_btn {
            width: 70%;
            display: flex;
            justify-content: space-evenly;
            position: absolute;
            top: 148px;
            left: 0;
        }

    }

</style>
