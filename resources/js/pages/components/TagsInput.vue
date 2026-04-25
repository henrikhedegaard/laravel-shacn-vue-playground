<script setup lang="ts">
import { ref } from 'vue'
import PageLayout from "@/components/PageLayout.vue"
import {
  TagsInput,
  TagsInputInput,
  TagsInputItem,
  TagsInputItemDelete,
  TagsInputItemText,
} from "@/components/ui/tags-input"

const tags = ref(["React", "Vue", "Angular"])
</script>

<template>
  <PageLayout
    title="Tags Input"
    description="An input field for tags with add/remove functionality"
    show-back-link
  >
    <div class="grid gap-4 max-w-md">
      <TagsInput v-model="tags">
        <TagsInputItem v-for="tag in tags" :key="tag" :value="tag">
          <TagsInputItemText />
          <TagsInputItemDelete />
        </TagsInputItem>
        <TagsInputInput placeholder="Add tag..." />
      </TagsInput>
    </div>
  </PageLayout>
</template>
