<template>
    <div>
        <h2>texts</h2>

        <div v-if="subpage" v-for="(block,bindex) in vue_blocks" :key="bindex">
            <div>
                <div class="area " @click.prevent="cc(block.id,index,text)" v-for="(text,index) in block.texts"
                     :key="text.id" v-html="text.htmlContent"></div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex';

    export default {
        name: "MainComponent",
        props: ['page', 'subpage'],
        data() {
            return {}
        },
        computed: {
            ...mapGetters(['PAGES_GETTER', 'CKEDITOR_GETTER']),
            vue_blocks: function () {
                let temp;
                let temp2;
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
            ...mapActions(['CKEDITOR_SETTER']),
            cc: async function (block_index, text_index, text) {

                await this.CKEDITOR_SETTER({
                    text_val: text.htmlContent,
                    text_id: text.id,
                });
                this.$router.push('change');
            }
        },
        watch: {
            CKEDITOR_GETTER(newv, old){
                console.log('cocuS');
            },
        },
    }
</script>

<style scoped>
    .area {
        width: 100%;
        margin: 20px 0;

    }

</style>
