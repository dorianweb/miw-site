<template>
    <h2>preview</h2>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "PreviewComponent",
        props: ['page', 'subpage'],
        computed: {
            ...mapGetters(['IMG_URL_GETTER', 'PAGES_GETTER']),
            vue_blocks: function () {
                let temp , temp2;
                temp = this.PAGES_GETTER.filter(element => element.id == this.page)[0];
                temp2 = temp.subpages.filter(element => element.id == this.subpage);
                if (this.subpage != "" && this.subpage != undefined) {
                    return temp2[0].blocks;
                } else {
                    return temp2;
                }
            },
        },
        methods: {
            ... mapActions(['OBJECT_PROPERTY_SETTER']),
            changelocation: function (id) {
                this.OBJECT_PROPERTY_SETTER({
                    objname:'imgeditor',
                    propname:'img_id',
                    val:id,
                });
                this.$router.push({name:'imgeditor'})
            },
        },

    }
</script>

<style scoped>

</style>
