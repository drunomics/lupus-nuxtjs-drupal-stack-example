<template>
  <div class="node">
    <h2>{{ title }}</h2>
    <div v-if="author">
      by {{ author }}
    </div>
    <slot name="paragraphs" />
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    author: String
  }
}
</script>
