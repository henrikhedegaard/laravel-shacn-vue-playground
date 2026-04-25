<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue"
import { Label } from "@/components/ui/label"
import {
  RadioGroup,
  RadioGroupItem,
} from "@/components/ui/radio-group"
</script>

<template>
  <PageLayout
    title="Radio Group"
    description="A group of radio buttons for single selection"
    show-back-link
  >
    <div class="grid gap-4 max-w-sm">
      <RadioGroup default-value="option-one">
        <div class="flex items-center space-x-2">
          <RadioGroupItem value="option-one" id="option-one" />
          <Label for="option-one">Option One</Label>
        </div>
        <div class="flex items-center space-x-2">
          <RadioGroupItem value="option-two" id="option-two" />
          <Label for="option-two">Option Two</Label>
        </div>
        <div class="flex items-center space-x-2">
          <RadioGroupItem value="option-three" id="option-three" />
          <Label for="option-three">Option Three</Label>
        </div>
      </RadioGroup>
    </div>
  </PageLayout>
</template>
