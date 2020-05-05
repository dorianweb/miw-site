export default {

    state: {

        img_url: 'coucou',

    },

    getters: {
        IMG_URL_GETTER(state) {
            return state.img_url;
        }
    },

    actions: {
        IMG_URL_SETTER(context,payload) {
            context.commit('SET_IMG_URL',payload);
        }
    },

    mutations: {
        SET_IMG_URL:(state,{img})=>{
            state.img_url=img;
        }
    }
}


