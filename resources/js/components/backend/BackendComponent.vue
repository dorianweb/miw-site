<template>
    <div>
        <h1>Bienvenue dans lespace de modification</h1>
        <div class="back_menu">
            <router-link class="back_link" to="/backend/texts"
                         :style="{backgroundColor:$route.fullPath=='/backend/texts'?'black':'white'}">
                <svg :style="{fill:$route.fullPath=='/backend/texts'?'white':'black'}">
                    <use xlink:href="#copy"></use>
                </svg>
                <span :style="{color:$route.fullPath=='/backend/texts'?'white':'black'}">Text</span>
            </router-link>
            <router-link class="back_link"
                         :style="{backgroundColor:$route.fullPath=='/backend/pictures'?'black':'white'}"
                         to="/backend/pictures">
                <svg :style="{fill:$route.fullPath=='/backend/pictures'?'white':'black'}">
                    <use xlink:href="#camera"></use>
                </svg>
                <span :style="{color:$route.fullPath=='/backend/pictures'?'white':'black'}">Pictures</span>
            </router-link>
            <router-link class="back_link" to="/backend/preview"
                         :style="{backgroundColor:$route.fullPath=='/backend/preview'?'black':'white'}">
                <svg :style="{fill:$route.fullPath=='/backend/preview'?'white':'black'}">
                    <use xlink:href="#eyes"></use>
                </svg>
                <span :style="{color:$route.fullPath=='/backend/preview'?'white':'black'}">Preview</span>
            </router-link>
        </div>
        <div class="contain">
            <div class="selection">
                <select v-model="page_selected" name="" @change="subpage_selected=''">
                    <option v-for="(page,index) in PAGES_GETTER " :key="index" :value="page.id">{{page.name}}</option>
                </select>
                <select v-model="subpage_selected">
                    <option v-for="(subpage,index) in subpages" :key="index" :value="subpage.id">
                        {{subpage.name}}
                    </option>
                </select>
            </div>
            <router-view class="contain2" v-if="AUTH_GETTER.isAuth || $route.fullPath=='/backend/login'" :page="page_selected"
                         :subpage="subpage_selected"></router-view>
            <router-link v-else to="/backend/login">Espace privée : se connecté ?</router-link>
        </div>
    </div>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex';

    export default {
        name: "BackendComponent",
        data() {
            return {
                page_selected: 1,
                subpage_selected: '',
            }
        },
        computed: {
            ...mapGetters(['IMG_URL_GETTER', 'PAGES_GETTER', 'AUTH_GETTER']),
            subpages: function () {

                return this.PAGES_GETTER.filter(element => element.id == this.page_selected)[0].subpages;
            }
        },
        methods: {
            ...mapActions(['AUTH_CHECK']),
        },
        created() {
            this.AUTH_CHECK();
        },
    }
</script>

<style scoped>
    h1 {
        text-align: center;
        font-size: 1.7em;
        margin: 10px 0;
    }

    .back_menu {
        padding: 10px 0;
        margin: 0;

        position: fixed;
        bottom: 0;
        z-index: 100;
        width: 100%;
        height: 90px;

        background-color: white;

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;


    }

    .back_link {
        width: 30%;
        height: 100%;
        padding: 10px;
    }

    .back_link svg {
        width: 100%;
        height: 100%;
    }

    .back_link span {
        display: none;
    }
    .selection{
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .contain2{
        margin-bottom: 95px;
    }

    @media screen and (min-width: 768px) {
        .back_link span {
            display: block;
            color: black;
        }

        .back_link {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .back_menu {
            opacity: 0.8;
        }
    }

    @media screen and (min-width: 1024px) {
        .back_link span {
            display: block;
        }

        .back_link {
            flex-direction: row;
            align-items: center;
            width: 100%;
        }

        .back_menu {
            top: 140px;
            left: 0;
            width: 20%;
            flex-direction: column;
            /* justify-content: space-evenly;*/
        }

        .back_link svg {
            width: 50%;
        }

        .back_link span {
            width: 50%;
            font-size: 1.5em;
        }
        .contain{
            width: 50%;
            margin: 0 auto;
        }

    }
</style>
