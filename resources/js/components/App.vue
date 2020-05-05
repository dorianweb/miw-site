<template>
    <div>
        <NavbarComponent></NavbarComponent>
        <router-view :dates="dates[0]"></router-view>
        <FooterComponent :socials="socials"></FooterComponent>

    </div>

</template>

<script>
    import NavbarComponent from "./NavbarComponent";
    import FooterComponent from "./FooterComponent";
    import {mapActions, mapGetters} from 'vuex';

    export default {
        name: "App",
        components: {
            NavbarComponent,
            FooterComponent
        },
        mounted() {
            this.getSocial();
            this.getDate();
            this.IMG_URL_SETTER({img: this.img_url})

        },
        props: ['img_url'],
        data() {
            return {
                socials: '',
                dates: '',
            }
        },
        computed: {
            ...mapGetters(['IMG_URL_GETTER']),
        },
        methods: {
            ...mapActions(['IMG_URL_SETTER']),
            getSocial() {
                axios.get('api/socials').then(response => {
                    this.socials = response.data.filter(social => social.activ == 1)
                }).catch(error => console.log(error));
            },
            getDate() {
                axios.get('api/dates').then(response => {
                    this.dates = response.data
                }).catch(error => console.log(error));
            }
        }
    }
</script>

<style scoped>

</style>
