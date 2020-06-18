<template>
    <div>
        <div class="block" v-for="block in vue_blocks" :key="block.name">
            <div class="text" v-for="text in  block.texts" v-html="text.htmlContent">
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        name: "CompetenceComponent", computed: {
            ...mapGetters(['PAGES_GETTER']),
            vue_blocks: function () {
                let temp, temp2;
                temp = this.PAGES_GETTER.filter(element => element.name == 'Presentation')[0];
                temp2 = temp.subpages.find(element => element.name == this.$route.path.split('/')[2]);
                return temp2 ? temp2.blocks : 'not defined';
            },
        },
    }
</script>

<style scoped>
    .block {
        width: 95%;
        margin: 0 auto;
    }

    .text >>> h3 {
        color: white;
        background-color: #2198a2;
        width: fit-content;
        padding: 15px 50px;
        margin: 20px auto;
    }

    .text >>> h3::after {
        content: ""; /* This is necessary for the pseudo element to work. */
        display: block; /* This will put the pseudo element on its own line. */
        margin: 0; /* This will center the border. */
        position: relative;
        left: -33%;
        width: 89%; /* Change this to whatever width you want. */
        padding-top: 5px; /* This creates some space between the element and the border. */
        border-bottom: 1px solid white; /* This creates the border. Replace black with whatever color you want. */
    }

    .text >>> ul {
        padding-left: 10px;
    }

    .text >>> li {
        background-color: #EEEEEE;
        border: none;
        list-style-type: none;
        padding: 13px;
        font-size: 0.9em;
        margin: 1px;
    }

    @media screen and (min-width: 768px) {
        .block {
            width: 80%;
        }

        .text >>> li {
            background-color: #EEEEEE;
            border-left: 10px solid #2198a2;
            border-bottom: 2px solid white;
            list-style-type: none;
            padding: 13px;
            font-size: 0.9em;
            margin: 0;
        }

    }

    @media screen and (min-width: 1024px) {
        .block {
            width: 70%;
        }
    }

</style>
