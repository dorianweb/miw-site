<nav class="row row-cols-12 w-100 h-personal bg-secondary m-0">
        <div class="h-100 col-4 col-md-3">
            <a href="">
                <svg class="fill-w">
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
        </div>
        <div class=" col-2">
            <label for="menubtn">
                appuie
                <svg>
                    <use  v-show="!isMobileMenuOpen" xlink:href="#logo"></use>
                    <use  v-show="!isMobileMenuOpen" xlink:href="#logo"></use>
                    
                </svg>
            </label>
            <input id="menubtn" v-model="isMobileMenuOpen" type="checkbox">

        </div>
    </nav>




<script>
    export default {
        props: ['link-environnement', 'link-licence', 'link-contact'],
        name: "Navbar",
        data(){
            return{
                isMobileMenuOpen:false,
            };
        }


    }
</script>

<style scoped>
    a {
      text-decoration: none;
    }
    svg {
        width: 100%;
        height: 100%;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .fill-w {
        fill: white;
    }

    @media screen and (min-width: 1200px) {
    }
</style>
