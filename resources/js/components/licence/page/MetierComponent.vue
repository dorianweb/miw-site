<template>
    <div>
        <div class="img-title">
            <img class="img" :src="`${IMG_URL_GETTER}/svg/1.svg`" alt="step 1 sign with e-candidat ">
            <h2 class="title">S'inscrire sur e-candidat</h2>
        </div>
        <div class="img-title">
            <img class="img" :src="`${IMG_URL_GETTER}/svg/2.svg`" alt=" meet te school tutor by phone">
            <h2 class="title">Entretien Téléphonique avec le gérant de la licence</h2>
        </div>
        <div class="img-title">
            <img class="img" :src="`${IMG_URL_GETTER}/svg/3.svg`" alt="fill a google form ">
            <h2 class="title"> Répondre au formulaire transmit</h2>
        </div>
        <div class="img-title">
            <img class="img" :src="`${IMG_URL_GETTER}/svg/4.svg`" alt="">
            <h2 class="title">Inscription Présentielle à l'IUT </h2>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        name: "MetierComponent",
        computed: {
            ...mapGetters(['IMG_URL_GETTER']),
        }
    }
</script>

<style scoped>
    .img-title {
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 10px;
    }

    .img {
        width: 9%;
    }

    .title {
        width: 69%;
        font-size: 1.2em;
        margin: 0;
        color: #916f6fff;
    }

    @media screen and (min-width: 768px) {
        .block {
            width: 80%;
        }
        h2{
            font-weight: bold;
        }


    }

    @media screen and (min-width: 1024px) {
        .block {
            width: 70%;
        }
    }

</style>
