<template>
  <div class="paragraph-quote">
    <blockquote>
      <slot name="text" />
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
    margin-right: 3em;
    text-align: right;
    font-size: smaller;
  }
</style>

<script>
export default {
  props: {
    author: {
      type: String,
      default: ''
    }
  }
}
</script>
