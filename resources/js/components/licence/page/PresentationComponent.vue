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
        <div class="target_people"></div>
        <div class=" workspace"></div>
        <div class="hours"></div>
        <div class="admission_inscription "></div>


    </div>
</template>
<script>
    export default {
        name: "PresentationComponent"
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


    .prerequis {
        background-color: #1DB0BA;
        padding: 10px;
        font-size: 0.9em;
    }

    .prerequis h3 {
        font-size: 1.2em;
    }

    .prerequis ul {
        width: 100%;
        padding-left: 10px;
        margin-left: 10px;
        border-left: white 1px solid;
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
            padding: 30px 10px 10px 25px;
            box-shadow: -8px -6px 0px 0px rgba(0, 0, 0, 0.25);
            font-size: 0.96em;
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
    }


    @media screen and (min-width: 1024px) {

        .intro {
            width: 90%;
            margin: 0 auto;
        }

        .intro_text {
            box-shadow: -11px -13px 0px 0px rgba(0, 0, 0, 0.25);
            font-size: 1em;
        }
    }

    @media screen and (min-width: 1024px) {
        .intro {
            padding: 4.4%;
        }
    }

</style>
