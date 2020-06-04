import Vuex from 'vuex';
import VuexPersistence from "vuex-persist";
import Vue from "vue";

Vue.use(Vuex);
const vuexLocal = new VuexPersistence({
    storage: window.localStorage
});

let data = {
    strict: true,

    state: {
        pages: '',
        img_url: 'coucou',

        auth: {
            isAuth: false,
            email: null,
            name: null,
        },
        ckeditor: {
            block_id: '',
            text_id: '',
            text_index: '',
            editor_config: {},
            text_val: '',
            updated: 'none',
        },

    },

    getters: {
        IMG_URL_GETTER(state) {
            return state.img_url;
        },
        PAGES_GETTER(state) {
            return state.pages;
        },
        APITOKEN_GETTER(state) {
            return state.apiToken;
        },
        AUTH_GETTER(state) {
            return state.auth;
        },
        CKEDITOR_GETTER(state) {
            return state.ckeditor;
        }
    },

    actions: {
        IMG_URL_SETTER(context, payload) {
            context.commit('SET_IMG_URL', payload);
        },
        PAGES_SETTER(context) {
            axios.get("api/pages")
                .then((response) => {
                    if (Array.isArray(response.data)) context.commit("SET_PAGES", response.data) //categories will be run from mutation
                })
        },

        AUTH_SETTER(context, payload) {
            context.commit('SET_AUTH', payload);
        },
        AUTH_CHECK(context) {
            axios.get('api/auth_user').then(response => {
                if (response.data.email != this.state.auth.email) {
                    context.dispatch('AUTH_SETTER', {
                        email: '',
                        name: '',
                        isAuth: false,
                    })
                } else {
                }
            })

        },
        CKEDITOR_SETTER(context, payload) {
            context.commit('SET_CKEDITOR', payload);
        },
        CKEDITOR_SEND(context) {
            axios.put(`api/texts/${this.state.ckeditor.text_id}`, {text_val: this.state.ckeditor.text_val}).then(response =>
                this.state.ckeditor.text_val = response.data.htmlContent
            ).catch(error => {
                this.dispatch('OBJECT_PROPERTY_SETTER', {objname: 'ckeditor', propname: 'updated', val: 'false'})
            });
            context.dispatch('PAGES_SETTER');
            this.dispatch('OBJECT_PROPERTY_SETTER', {objname: 'ckeditor', propname: 'updated', val: 'true'})
        },
        OBJECT_PROPERTY_SETTER(context, payload) {
           context.commit('SET_OBJECT_PROPERTY',payload);
        }
    },

    mutations: {
        SET_IMG_URL: (state, {img}) => {
            state.img_url = img;
        },
        SET_PAGES: (state, payload) => {
            state.pages = payload;
        },
        SET_AUTH: (state, payload) => {
            state.auth = payload;
        },
        SET_CKEDITOR: (state, payload) => {
            let a = {...state.ckeditor};
            for (let [key, value] of Object.entries(payload)) {
                a = {
                    ...a,
                    [key]: value,
                }
            }
            state.ckeditor = {
                ...state.ckeditor,
                ...a,
            };
        },
        SET_OBJECT_PROPERTY:(state, payload)=>{

            state[payload.objname][payload.propname] = payload.val;
        },
    },
};

export default new Vuex.Store({
    ...data,
    plugins: [vuexLocal.plugin],
})
