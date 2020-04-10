<template>

    <div>
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
                <ul class="menu_content">
                    <li v-for="route in  routes" class="link">
                        <div class="link_bg"></div>
                        <router-link :to="route.path" class="link_item">
                            {{route.name}}
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="test"></div>
    </div>

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

    li {
        list-style-type: none;
    }

    .menu {
        width: 100%;
        height: 100%;
        position: fixed;
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

    .menu_head_icon > svg {
        fill: white;
    }

    .link {
        display: flex;
        width: 100%;
        height: 50px;
        position: relative;
        margin-bottom: 8px;
    }

    .link_bg {
        width: 100%;
        height: 40px;
        position: absolute;
        background-color: #CFE9FF;
    }

    .link_item {
        width: 100%;
        height: 40px;
        position: absolute;
        background-color: #2699FB;
        top: 6px;
        left: 8px;
        text-decoration: none;
        text-align: center;
        font-size: 1.5em;
        color: white;
    }

    .test {
        width: 100%;
        height: 900px;
        background-color:black;
    }
</style>
