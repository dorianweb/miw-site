<template>
    <div id="app">
        <ckeditor :editor="editor" v-model="clone.text_val" :config="clone.editor_config"></ckeditor>

        <button @click="update">Valider</button>
    </div>
</template>

<script>
    import {mapActions, mapState} from 'vuex';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: "TextChangeComponent",
        data() {
            return {
                editor: ClassicEditor,
                clone: '',
            }
        },
        computed: {
            ...mapState({
                ckeditor: state => state.ckeditor
            }),
        },
        methods: {
            ...mapActions(['CKEDITOR_SETTER', 'CKEDITOR_SEND','PAGES_SETTER']),
            update: async function () {
                await this.CKEDITOR_SETTER(this.clone);
                await this.CKEDITOR_SEND();
                this.$router.push('texts');
            }
        },
        created() {
            this.clone = {...this.ckeditor}
            ;
        }
    }
</script>
<style scoped>
</style>
