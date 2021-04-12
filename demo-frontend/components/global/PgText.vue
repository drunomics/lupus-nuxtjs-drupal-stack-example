<template>
  <div class="paragraph-text">
    <h3>{{ title }}</h3>
    <slot />
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String
    }
  }
}
</script>

<style lang="css" scoped>
.paragraph-text {
  margin: 1em;
}
</style>
