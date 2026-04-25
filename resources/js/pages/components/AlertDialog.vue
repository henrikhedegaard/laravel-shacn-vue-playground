<script setup lang="ts">
import { ref } from 'vue'
import PageLayout from "@/components/PageLayout.vue"
import { Button } from "@/components/ui/button"
import {
  AlertDialog,
  AlertDialogAction,
  AlertDialogCancel,
  AlertDialogContent,
  AlertDialogDescription,
  AlertDialogFooter,
  AlertDialogHeader,
  AlertDialogTitle,
  AlertDialogTrigger,
} from "@/components/ui/alert-dialog"

const open = ref(false)
</script>

<template>
  <PageLayout
    title="Alert Dialog"
    description="A modal dialog that interrupts the user with important content and expects a response"
    show-back-link
  >
    <div class="flex gap-4">
      <AlertDialog v-model:open="open">
        <AlertDialogTrigger as-child>
          <Button variant="destructive">Show Alert Dialog</Button>
        </AlertDialogTrigger>
        <AlertDialogContent>
          <AlertDialogHeader>
            <AlertDialogTitle>Are you absolutely sure?</AlertDialogTitle>
            <AlertDialogDescription>
              This action cannot be undone. This will permanently delete your account and remove your data from our servers.
            </AlertDialogDescription>
          </AlertDialogHeader>
          <AlertDialogFooter>
            <AlertDialogCancel>Cancel</AlertDialogCancel>
            <AlertDialogAction @click="open = false">Continue</AlertDialogAction>
          </AlertDialogFooter>
        </AlertDialogContent>
      </AlertDialog>
    </div>
  </PageLayout>
</template>
