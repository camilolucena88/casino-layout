<template>
    <div class="md:container md:mx-auto">
        <div class="grid grid-cols-3 gap-4">
          <Card v-on:triggerAction="action($event)" v-for="game in games" v-bind:key="game.launchcode" :launch-code="game.launchcode"/>
        </div>
    </div>
</template>

<script>
import Card from './Card.vue'

export default {
  name: 'Container',
  components: {
    Card
  },
  props: {
    games: {
      type: Array, 
    }
  },
  methods: {
    action(e) {
      this.$emit('triggerAction', e.target.value)
    }
  }
}
</script>

<style scoped>

</style>