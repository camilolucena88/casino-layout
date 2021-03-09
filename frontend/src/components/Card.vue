<template>
  <div v-on:click="action($event)">
    <img :src="'https://stage.whgstage.com/scontent/images/games/'+launchCode+'.jpg'" :alt="launchCode">
  </div>
</template>

<script>
export default {
  name: "Card",
  props: {
    launchCode: {
      type: String,
      default: 'NYXMADMADMONKEY'
    },
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