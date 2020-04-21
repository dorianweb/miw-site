<template>
    <div>
        <NavbarComponent></NavbarComponent>
        <router-view :img_url="img" :dates="dates[0]" ></router-view>
        <FooterComponent :socials="socials"></FooterComponent>

    </div>

</template>

<script>
    import NavbarComponent from "./NavbarComponent";
    import FooterComponent from "./FooterComponent";

    export default {
        name: "App",
        components: {
            NavbarComponent,
            FooterComponent
        },
        mounted() {
            this.getSocial();
            this.getDate();
        },
        props: ['img_url'],
        data() {
            return {
                socials: '',
                img: this.img_url,
                dates:'',
            }
        },
        methods: {
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
