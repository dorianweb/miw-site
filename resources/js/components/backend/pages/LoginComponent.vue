<template>
    <div class="contain">
        <img class="img" :src="IMG_URL_GETTER+'/svg/world.svg'" alt="">
        <form class="login" @submit.prevent="submit">
            <h2 class="title">Connexion :</h2>
            <span class="login_span_email">
               <input autocomplete v-model="form.email" class="login_email" id="login_email" type="email"/>
           </span>
            <span class="login_span_password">
                <input autocomplete v-model="form.password" class="login_password" id="login_password" type="password"/>
            </span>
            <button type="submit">Valider</button>
        </form>
    </div>
</template>
<script>
    import {mapActions, mapGetters} from 'vuex';

    export default {
        name: "LoginComponent",
        data() {
            return {
                form: {
                    email: 'dorian-13016@live.fr',
                    password: 'dorian'
                },
                cookie: '',
            }
        },
        computed: {
            ...mapGetters(['IMG_URL_GETTER', 'AUTH_GETTER']),
        },
        methods: {
            ...mapActions(['AUTH_SETTER']),
            submit() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('api/connect', this.form).then(response => {
                        this.AUTH_SETTER({
                            email: response.data.email,
                            name: response.data.name,
                            isAuth: true,
                        });
                        this.$router.push('/backend');
                    });
                })
            }
        }
    }
</script>

<style scoped>
    .contain {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        background: linear-gradient(90deg, #7fcff5bd, #4ca6bd94, #1cb1badb);
    }

    .img {
        width: 100%;
    }

    .login {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        height: 300px;

    }

    .login span {
        width: 80%;
    }

    .login input {
        border: none;
        border-radius: 12px;
        width: 100%;
        text-align: center;
        color: #7fcff5bd;
    }

    .login input:focus {
        outline: none;
    }

    .login_span_email::before {
        content: 'e-mail :';
        color: white;
    }

    .login_span_password::before {
        content: 'password :';
        color: white;
    }

    .login button {
        border: none;
        background-color: white;
        color: #7fcff5bd;
        width: 80%;
        font-size: 1.2em;
        height: 32px;
        border-radius: 12px;
    }
    .title {
        color: white;
    }

    @media screen and (min-width: 768px) {
        .login {
            width: 250px;

        }

        .contain {
            justify-content: space-evenly;
            align-items: center;
            height: fit-content;
        }

        .img {
            width: 50%;
        }

        .title {
            color: white;
            align-self: start;
            position: relative;
            top: 10px;
            left: -15px;
            font-size: 1.9em;
        }
    }


</style>
