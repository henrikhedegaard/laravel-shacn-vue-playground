<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import {
  FormControl,
  FormDescription,
  FormField,
  FormItem,
  FormLabel,
  FormMessage,
} from "@/components/ui/form"
</script>

<template>
  <PageLayout
    title="Form"
    description="A form with validation and error handling"
    show-back-link
  >
    <div class="grid gap-4 max-w-sm">
      <div class="grid gap-2">
        <Label for="username">Username</Label>
        <Input id="username" placeholder="Enter username" />
      </div>
    </div>
  </PageLayout>
</template>
