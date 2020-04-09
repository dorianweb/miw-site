<template>
        <div>
            <NavbarComponent ></NavbarComponent>
            <router-view></router-view>
        </div>

</template>

<script>
    import NavbarComponent from "./NavbarComponent";
    export default {
        name: "App",
        components: {
            NavbarComponent
        },
        data() {
            return {

            }
        }
    }
</script>

<style scoped>

</style>
