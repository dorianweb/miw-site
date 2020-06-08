<template>
    <div>
        <img class="img" :src="`${IMG_URL_GETTER}/${img.public_folder}/${img.filename}`" alt="">
        <input type="file" @change="changeFile($event)">
        <img v-if="url"  class="img" :src="url"/>
        <input type="submit" @click="Upload" value="valider">
        <div>
        </div>
    </div>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex'

    export default {
        name: "PictureChangeComponent",
        data() {
            return {
                new_picture: '',
                url: null,
            }
        },
        computed: {
            ...mapGetters(['IMG_URL_GETTER', 'IMGEDITOR_GETTER', 'PAGES_GETTER']),
            img: function () {
                let val;
                this.PAGES_GETTER.forEach(page => {
                    page.subpages.forEach(subpage => {
                        subpage.blocks.forEach(block => {
                            block.pictures.forEach(picture => {
                                if (picture.id == this.IMGEDITOR_GETTER.img_id) {
                                    val = {...picture}
                                }
                            })
                        })
                    })
                });
                return val;
            }
        },
        methods: {
            ...mapActions(['OBJECT_PROPERTY_SETTER', 'IMGEDITOR_SEND']),
            changeFile: function (event) {
                let filer = new FileReader();
                filer.readAsDataURL(event.target.files[0]);
                filer.onload=(event)=>{
                this.new_picture=event.target.result;
                };
                 this.url = URL.createObjectURL(event.target.files[0]);
            },
            Upload: function () {
                this.OBJECT_PROPERTY_SETTER({
                    objname: 'imgeditor',
                    propname: 'file',
                    val: this.new_picture,
                });
                this.IMGEDITOR_SEND();

            }
        },
    }
</script>

<style scoped>
.img{
    width: 100px;
}
</style>
