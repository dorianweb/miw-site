<template>


    <nav class="menu">
        <div class="menu_head">
            <div class="menu_head_logo">
                <svg>
                    <use xlink:href="#logo"></use>
                </svg>
            </div>
            <label class="menu_head_icon" for="menutoggle">
                <svg v-show="!isMobileMenuOpen">
                    <use xlink:href="#menu"></use>
                </svg>
                <svg v-show="isMobileMenuOpen">
                    <use xlink:href="#cross"></use>
                </svg>
            </label>
            <input type="checkbox" id="menutoggle" v-model="isMobileMenuOpen" style="display:none">
        </div>

        <div v-show="isMobileMenuOpen" class="menu_body">
            <ul class="">
                <li class="" v-for="route in  routes">
                    <router-link :to="route.path" class="">{{route.name}}</router-link>
                </li>
            </ul>
        </div>

    </nav>
</template>

<script>
    import router from "../router";

    export default {
        data: function () {
            return {
                routes: router.routes,
                isMobileMenuOpen: false,
            }
        }
    }
</script>

<style scoped>
    svg {
        width: 100%;
        height: 100%;
    }
    ul {
        padding: 0;
    }
    li{
        list-style-type: none;
    }

    .menu {
        width: 100%;
        height: 100%;
    }

    .menu_head {
        width: 100%;
        height: 80px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        border-bottom: black solid 1px;
    }


    .menu_head_logo {
        width: 90px;
        padding: 5px 10px;
        margin-left: 20px;
        height: 70px;
        text-align: center;
    }

    .menu_head_icon {
        width: 53px;
        height: 100%;
        padding: 10px 10px;
        margin-bottom: 0;
        margin-right: 10px;
    }
    .menu_head_icon>svg{
        fill: white;
    }

</style>
