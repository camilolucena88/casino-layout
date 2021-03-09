import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        games: [],
    },
    mutations: {
        ADD_GAME(state, game) {
            return state.games = [...state.games, game]
        },
    },
    getters: {},
    actions: {
        setGamesFromApi({commit}, games) {
            games.forEach((game) => {
                const newGame = {
                    launchcode: game.launchcode,
                    name: game.name,
                    game_provider_id: game.game_provider_id,
                    rtp: game.rtp
                }
                return commit('ADD_GAME', newGame)
            })
        }
    }
})
