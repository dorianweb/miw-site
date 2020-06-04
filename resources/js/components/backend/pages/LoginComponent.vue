<template>
    <div>
        <form class="login" method="post" action="#" @submit.prevent="submit">
            <input autocomplete v-model="form.email" class="login_email" id="login_email" type="email"/>
            <input autocomplete v-model="form.password" class="login_password" id="login_password" type="password"/>
            <input type="submit">
        </form>
    </div>
</template>
<script>
    import {mapGetters,mapActions} from 'vuex';

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
            ...mapGetters(['AUTH_GETTER']),
        },
        methods: {
            ...mapActions(['AUTH_SETTER']),
            submit() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('api/connect', this.form).then(response => {
                        this.AUTH_SETTER({
                            email:response.data.email,
                            name: response.data.name,
                            isAuth:true,
                        });
                        this.$router.push('/backend');
                    });
                })
            }
        }
    }
</script>

<style scoped>

</style>
