<script setup lang="ts">
import { ref } from 'vue'
import PageLayout from "@/components/PageLayout.vue"
import { Toggle } from "@/components/ui/toggle"

const pressed = ref(false)
</script>

<template>
  <PageLayout
    title="Toggle"
    description="A toggle button component"
    show-back-link
  >
    <Toggle v-model:pressed="pressed" aria-label="Toggle bold">
      B
    </Toggle>
  </PageLayout>
</template>
