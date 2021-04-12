<template>
  <div class="paragraph-quote">
    <blockquote>
      <slot />
    </blockquote>
    <div class="author">
      {{ author }}
    </div>
  </div>
</template>

<style lang="css" scoped>
  .paragraph-quote {
    margin: 1em;
    color: dimgrey;
  }
  .author {
    margin-left: 3em;
    font-size: smaller;
  }
</style>

<script>
export default {
  props: {
    author: String
  }
}
</script>
