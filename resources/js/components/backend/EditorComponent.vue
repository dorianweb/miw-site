<template>
    <div ref="editor" v-html="value"></div>
</template>


<script>
    import Quill from 'quill';

    export default {
        props: {
            value: {
                type: String,
                default: ''
            }
        },

        data() {
            return {
                editor: null,
                val:''
            };
        },
        mounted() {
            this.editor = new Quill(this.$refs.editor, {
                modules: {
                    toolbar: [
                        [{'header': [1, 2, 3, 4, 5, 6, false]}],
                        [{'font': []}],
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{'list': 'ordered'}, {'list': 'bullet'}, {'align': []}],
                        [{'color': []}, {'background': []}],
                        ['clean'],
                        ['link', 'image', 'video'],
                        [{'direction': 'rtl'}]
                    ]
                },
                theme: 'snow',
            });

            this.editor.root.innerHTML = this.value;

            this.editor.on('text-change', () => {

            });
        },

        methods: {
            update() {
                this.val = this.editor.getText().trim() ?  this.editor.root.innerHTML: ''
            }
        }
    }
</script>

<style>
    @import "~quill/dist/quill.snow.css";
</style>
