<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue"
import { Button } from "@/components/ui/button"
import { toast } from "vue-sonner"

function showToast(): void {
  toast.success("Event has been created", {
    description: "Monday, January 3rd at 6:00pm",
  })
}
</script>

<template>
  <PageLayout
    title="Sonner"
    description="A toast notification component"
    show-back-link
  >
    <div class="flex gap-4">
      <Button @click="showToast">Show Toast</Button>
    </div>
  </PageLayout>
</template>
