<template>
    <div class="main">
        <div v-if="screen<1024" class="accueil">
            <div class="logo_text">
                <div class="logo">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </div>
                <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][0]['htmlContent']"
                     class="text_lp"></div>
                <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][1]['htmlContent']"
                     class="text_description"></div>
            </div>
            <div class="accueil_img">
                <img :src="IMG_URL_GETTER+'/Accueil/accueil.png'" alt="a human with a computer">
            </div>
            <div class="presentation">
                <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][2]['htmlContent']"></div>
            </div>
            <div class="presentation">
                <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][3]['htmlContent']"></div>
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
                    <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][0]['htmlContent']"
                         class="text_lp"></div>
                    <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][1]['htmlContent']"
                         class="text_description"></div>
                </div>
                <div class="presentation p1">
                    <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][2]['htmlContent']"></div>
                </div>
                <div class="presentation p2">
                    <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][0]['texts'][3]['htmlContent']"></div>
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
                <img
                    :src="IMG_URL_GETTER+'/'+PAGES_GETTER[0]['subpages'][0]['blocks'][1]['pictures'][0]['public_folder']+'/'+PAGES_GETTER[0]['subpages'][0]['blocks'][1]['pictures'][0]['filename']"
                    alt="">
            </div>
            <div class="argument">
                <h3 v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][1]['texts'][0]['htmlContent']"></h3>
                <p v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][1]['texts'][1]['htmlContent']"
                   class="paragraphe"></p>
                <p v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][1]['texts'][2]['htmlContent']" class="paragraphe"
                   v-show="screen>=1024"></p>
            </div>
            <router-link to="#">
                <button v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][1]['texts'][3]['htmlContent']"
                        class="item_btn"></button>
            </router-link>
        </div>
        <div class="item relative item2">
            <div class="item_img">
                <img
                    :src="`${IMG_URL_GETTER}/${PAGES_GETTER[0]['subpages'][0]['blocks'][2]['pictures'][0]['public_folder']}/${PAGES_GETTER[0]['subpages'][0]['blocks'][2]['pictures'][0]['filename']}`"
                    alt="">
            </div>
            <div class="argument">
                <h3 v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][2]['texts'][0]['htmlContent']"></h3>
                <p v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][2]['texts'][1]['htmlContent']"
                   class="paragraphe p4"></p>

            </div>
            <div class="item_group_btn">
                <a href="">
                    <button v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][2]['texts'][2]['htmlContent']"
                            class="item_btn"></button>
                </a>
                <a href="">
                    <button v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][2]['texts'][3]['htmlContent']"
                            class="item_btn"></button>
                </a>
                <a href="#">
                    <button v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][2]['texts'][4]['htmlContent']"
                            class="item_btn"></button>
                </a>
            </div>
        </div>
        <div class="boxes">
            <div class="box"
                 :style="{backgroundImage:`url(${IMG_URL_GETTER}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][0]['public_folder']}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][0]['filename']})`}">
                <h3 v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][3]['texts'][0]['htmlContent']"></h3>
            </div>
            <div class="box"
                 :style="{backgroundImage:`url(${IMG_URL_GETTER}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][1]['public_folder']}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][1]['filename']})`}">

                <h3 v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][3]['texts'][1]['htmlContent']"></h3>
            </div>
            <div class="box "
                 :style="{backgroundImage:`url(${IMG_URL_GETTER}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][2]['public_folder']}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][2]['filename']})`}">
                <h3 v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][3]['texts'][2]['htmlContent']"></h3>
            </div>
        </div>


        <div class="banniere_container"
             :style="{backgroundImage:`url(${IMG_URL_GETTER}/${PAGES_GETTER[0]['subpages'][0]['blocks'][3]['pictures'][2]['public_folder']}/${PAGES_GETTER[0]['subpages'][0]['blocks'][4]['pictures'][0]['filename']})`}">

            <div class="banniere">
                <div v-html="PAGES_GETTER[0]['subpages'][0]['blocks'][4]['texts'][0]['htmlContent']">
                </div>
                <h3>
                    {{new Date(dates.date).toLocaleDateString('fr-FR', {day: 'numeric', month: 'numeric', year:
                    'numeric'}).replace(/ /g, '/') }}
                </h3>
                <div class="bold">
                    {{date?date.name:dates.name}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import {mapGetters} from 'vuex';

    export default {
        name: "AccueilComponent",
        props: ['dates'],

        mounted() {
            window.addEventListener('resize', this.sizeHandler);
        },


        computed: {
            ...mapGetters(['IMG_URL_GETTER', 'PAGES_GETTER'])
        },


        data() {
            return {
                date: this.dates,
                screen: window.innerWidth,
            }
        },


        methods: {
            sizeHandler() {
                this.screen = window.innerWidth;
            }
        },

    }
</script>

<style scoped>
    .main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* ecran 1   */
    img, svg {
        width: 100%;
        height: 100%;
    }

    * {
        color: white;
    }

    *::selection {
        background-color: #38c172;
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
        cursor: default;
    }

    /* ecran 2 */
    .presentation {
        margin-top: 25px;
        width: 92%;
        letter-spacing: 1px;
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
        border-radius: 18px;
        border: none;
    }

    /*ecran 3 */
    .box {
        width: 100%;
        height: 325px;
        background-repeat: no-repeat;
        display: flex;
        margin-top: 20px;
        flex-direction: column;
        justify-content: flex-end;
        background-size: cover;
    }

    .box > h3 {
        width: 100%;
        height: 70px;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(90deg, #7fcff5bd, #4ca6bd94, #1cb1badb);
    }

    .banniere_container {
        width: 100%;
        height: 145px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 1.1em;
        margin-top: 25px;
    }

    .banniere {
        width: 265px;
        height: 80%;
        text-align: center;
        background-color: #212529a6;

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

        /* ecran 3*/
        .boxes {
            display: flex;
            flex-direction: row;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-evenly;

        }

        .box {
            width: 350px;
            text-align: center;
        }

        .banniere {
            width: 365px;
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
            font-size: 0.8em;
            width: 45%;
            margin: 0;
            left: 50px;
        }

        .p1 {
            top: 240px;
        }

        .p2 {
            top: 345px;
        }

        .logo_text {
            position: absolute;
            width: 350px;
            top: 40px;
            left: 50px;
            margin: 0;
        }

        .logo {
            margin-left: -95px;
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
            width: 70%;
            font-size: 0.8em;
            position: absolute;
            top: 10%;
            right: 0;
            text-align: left;
            padding: 10px 20px;
        }

        .item_btn {
            position: absolute;
            width: 220px;
            top: 285px;
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
            width: 69%;
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

        /*ecran 3*/
        .boxes {
            width: 100%;
        }

        .box {
            width: 30%;
            height: 190px;
            margin-top: 0;

        }

        .box > h3 {
            font-size: 1.5em;
        }

        .banniere_container {
            height: 195px;
        }

        .banniere {
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 60%;
        }
    }

    @media screen and (min-width: 1300px) {

        .logo {
            width: 69%;
        }

        .logo_text {
            width: 680px;
            left: 65px;
            top: 40px;
        }

        .text_lp {
            font-size: 1.3em;
        }
        .text_description {
            font-size: 1.8em;
        }

        .presentation {
            font-size: 1.1em;
            width: 45%;
            left: 65px;
        }


        .p1 {
            top: 250px;
        }

        .p2 {
            top: 405px;
        }

        .p4 {
            font-size: 1.5em;
        }

        .item_btn {
            font-size: 1.4em;
            top: 400px;
        }

        .argument {
            padding: 21px 38px;
            font-size: 1.1em;
        }

        .item_group_btn {
            top: 205px !important;
        }

        .box {
            height: 325px;
        }
    }
</style>
