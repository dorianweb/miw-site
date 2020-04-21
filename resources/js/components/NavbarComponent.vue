<template>


    <nav class="menu">
        <div :class=" isScrolling?'menu_head scrollEffect':'menu_head' ">
            <router-link to="/" class="menu_head_logo">
                <svg>
                    <use xlink:href="#logo"></use>
                </svg>
            </router-link>
            <div v-if="screen>=1024" class="menu_body">
                <ul class="menu_content">
                    <li v-for="route in  routes" :key="route.path" class="link">
                        <router-link :to="route.path" :class=" isScrolling?'link_item scrollEffect2':'link_item' ">
                            {{route.name}}
                        </router-link>
                    </li>
                </ul>
            </div>
            <label v-if="screen<1024" class="menu_head_icon" for="menutoggle">
                <svg v-show="!isMobileMenuOpen">
                    <use xlink:href="#menu"></use>
                </svg>
                <svg v-show="isMobileMenuOpen">
                    <use xlink:href="#cross"></use>
                </svg>
            </label>
            <input type="checkbox" id="menutoggle" v-model="isMobileMenuOpen" style="display:none">
        </div>
        <div v-if="screen<1024&&isMobileMenuOpen" class="menu_body">
            <ul class="menu_content">
                <li v-for="route in  routes" :key="route.path" class="link">
                    <router-link v-on:click.native="toggleMobileMenu" :to="route.path"
                                 :class=" isScrolling?'link_item scrollEffect':'link_item' ">
                        {{route.name}}
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>

</template>

<script>
    import router from "../router";

    export default {
        name: 'Navbar',
        mounted() {
            window.addEventListener('scroll', this.scrollcss);
            window.addEventListener('resize', this.sizeHandler);
        },
        methods: {
            toggleMobileMenu() {
                this.isMobileMenuOpen = !this.isMobileMenuOpen;
            },
            scrollcss() {
                this.isScrolling = this.scrollPosition <= pageYOffset;
                this.isMobileMenuOpen = this.scrollPosition >= pageYOffset&&this.isMobileMenuOpen;
                this.scrollPosition = window.pageYOffset;

            },
            sizeHandler() {
                this.screen = window.innerWidth;
            }
        },
        data: function () {
            return {
                routes: router.routes.filter(route => route.name != 'Home'),
                isMobileMenuOpen: false,
                isScrolling: false,
                scrollPosition: '',
                screen: window.innerWidth,
            }
        },
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
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .menu_head {
        width: 100%;
        height: 80px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        background-color: #2198a2;
        box-shadow: 0px 1px 10px #bfbfbf;
    }

    .scrollEffect {
        background-color: rgba(97, 135, 179, 0.43) !important;
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

    .menu_body {
        width: 100%;
        position: absolute;
        right: 0;
    }

    .link {
        display: flex;
        width: 100%;
        height: 35px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .link_item {
        width: 100%;
        height: 100%;
        background-color: #76c8eb;
        text-decoration: none;
        text-align: center;
        font-size: 1.3em;
        color: white;
        transition-duration: 1s;
    }
    .link_item:active{
        background-color: rgb(72, 161, 235)git ;
    }

    .scrollEffect2 {
        background-color: rgba(97, 135, 179, 0.55);
    }

    @media screen and (min-width: 750px) {
        .menu_body {
            width: 40%;
        }
    }

    @media screen and (min-width: 1024px) {
        .menu_body {
            width: 71%;
            position: unset;
        }

        .menu_content {
            display: flex;
            justify-content: flex-end;
            margin: 0;
            align-items: center;

        }

        .link {
            width: 170px;
            height: 100%;
            position: unset;
            padding: 2px;
            margin: 0 10px;
        }

        .link_item {
            padding: 0px 10px;
            position: unset;
            font-size: 1.3em;
            width: 100%;
            border: white solid 2px;
            border-radius: 20px;
            background-color: transparent;
            opacity: 0.7;
        }

        .link_item:hover {
            opacity: 1;
            box-shadow: white;
            font-size: 1.4em;
        }
    }
</style>
