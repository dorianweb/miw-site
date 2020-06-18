<template>
    <div>
        <h2>pictures</h2>
        <div v-for="(block,index) in vue_blocks" :key="index">
            <h3>{{block.name}}</h3>
            <div>
                <img @click.prevent="changelocation(picture.id)" v-for="picture in block.pictures"
                     :src="`${IMG_URL_GETTER}/${picture.public_folder}/${picture.filename}`"
                     alt="" class="img">
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "PicturesCommponent",
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

    .img {
        width: 100%;
    }
</style>
