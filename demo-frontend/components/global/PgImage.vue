<template>
  <div class="paragraph-image">
    <img :src="src" :alt="alt" :title="name">
    <caption>{{ name }}</caption>
  </div>
</template>

<script>
export default {
  props: {
    src: String,
    alt: String,
    name: String
  }
}
</script>

<style lang="css" scoped>
.paragraph-image {
  margin: 1em;
}
</style>
