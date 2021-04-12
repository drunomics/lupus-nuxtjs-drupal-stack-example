<template>
  <div class="paragraph-text">
    <h2>{{ title }}</h2>
    <slot name="text" />
  </div>
</template>

<style lang="css" scoped>
  .paragraph-text {
    margin: 1em;
  }
</style>

<script>
export default {
  props: {
    title: {
      type: String
    }
  }
}
</script>
