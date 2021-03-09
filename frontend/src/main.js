import Vue from 'vue'
import App from './App.vue'
import './index.css'
import store from './store'
import axios from 'axios'

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  el: '#app',
  components: {App},
  template: '<App/>',
  store: store,
  mounted() {
    const games = localStorage.getItem('games')
    if (games) {
      store.dispatch('setGamesFromApi', JSON.parse(games)).then(r => console.log(r))
    } else {
      axios.get('http://localhost:81/api/games')
          .then(response => {
              console.log(response.data)
            store.dispatch('setGamesFromApi', response.data.data).then(
                () => {
                  localStorage.setItem('games', JSON.stringify(response.data))
                }
            )
          })
          .catch(error => {
            console.log(error.response.data)
            this.errored = true
          })
          .finally(() => this.loading = false)
    }
  }
})
