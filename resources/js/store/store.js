export default {
    strict: true,
    state: {
        pages: '',
        img_url: 'coucou',

    },

    getters: {
        IMG_URL_GETTER(state) {
            return state.img_url;
        },
        PAGES_GETTER(state) {
            return state.pages;
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
    },

    mutations: {
        SET_IMG_URL: (state, {img}) => {
            state.img_url = img;
        },
        SET_PAGES: (state, payload) => {
            state.pages = payload;
        }
    }
}


