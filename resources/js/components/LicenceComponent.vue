<template>
    <div class="licence_arianne">
        <ul>
            <li v-for="(tab,index) in tabs" :key="index" @click="" class="">{{tab}}</li>
        </ul>
        <div>
            {{tabs[selectedComponent]}}
        </div>
    </div>
</template>

<script>
    export default {
        name: "LicenceComponent",
        data() {
            return {
                selectedComponent: 0,
                tabs: ['Présentation', 'Programme', 'Compétences', 'Métiers'],
            }
        }
    }
</script>

<style scoped>
    .licence_arianne {
    }

    ul, li {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

</style>
