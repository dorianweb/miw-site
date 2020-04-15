<template>
        <div>
            <NavbarComponent></NavbarComponent>
            <router-view></router-view>
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
        },
        data() {
            return {
                socials: ''
            }
        },
        methods: {
            getSocial() {
                axios.get('api/socials').then(response => {
                    this.socials = response.data.filter(social => social.activ == 1)
                }).catch(error => console.log(error));
            }
        }
    }
</script>

<style scoped>

</style>
