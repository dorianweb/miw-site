<template>
    <div id="app">
        <button type="button" @click="selected_editor=!selected_editor">Changez d'éditeur ( permet des option en plus )</button>

        <ckeditor v-if="selected_editor" :editor="editor" v-model="clone.text_val" :config="config"></ckeditor>
        <button @click="update">Valider</button>
        <editor v-if="!selected_editor" v-model="clone.text_val" :value="clone.text_val"></editor>
        <div>{{clone.text_val}}</div>
    </div>
</template>

<script>
    import {mapActions, mapState} from 'vuex';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import '@ckeditor/ckeditor5-build-classic/build/translations/fr'

    export default {
        name: "TextChangeComponent",
        data() {
            return {
                selected_editor:true,
                editor: ClassicEditor,
                clone: '',
                config: {
                    language: 'fr',
                    removePlugins: ['easyimage, cloudservices'],
                    ckfinder: {
                        uploadUrl: CKFinder._config.connectorPath + '?command=QuickUpload&type=Files'
                    },
                    toolbar: ['ckfinder', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo','|','link','list']
                },
            };
        },
        computed: {
            ...mapState({
                ckeditor: state => state.ckeditor
            }),
        },
        methods: {
            ...mapActions(['CKEDITOR_SETTER', 'CKEDITOR_SEND', 'PAGES_SETTER']),
            update: async function () {
                await this.CKEDITOR_SETTER(this.clone);
                await this.CKEDITOR_SEND();
                this.$router.push('texts');
            }
        },
        created() {
            this.clone = {...this.ckeditor};
           //ClassicEditor.builtinPlugins.map(plugin => console.log(plugin.pluginName));
         console.log(Array.from( this.editor.ui.componentFactory.names()) );

        }
    }
</script>
<style scoped>
    div {
        width: 100%;
    }
</style>
