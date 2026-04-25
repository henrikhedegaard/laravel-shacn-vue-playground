<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import {
  Field,
  FieldContent,
  FieldDescription,
  FieldError,
  FieldGroup,
  FieldLabel,
  FieldLegend,
  FieldSeparator,
  FieldSet,
  FieldTitle,
} from "@/components/ui/field"
</script>

<template>
  <PageLayout
    title="Field"
    description="A form field with label, description, and error handling"
    show-back-link
  >
    <div class="grid gap-4 max-w-sm">
      <Field>
        <FieldLabel for="email">Email</FieldLabel>
        <FieldContent>
          <Input id="email" type="email" placeholder="m@example.com" />
        </FieldContent>
        <FieldDescription>This is your public email address.</FieldDescription>
      </Field>

      <Field>
        <FieldLabel for="password">Password</FieldLabel>
        <FieldContent>
          <Input id="password" type="password" />
        </FieldContent>
        <FieldError>Password is required</FieldError>
      </Field>
    </div>
  </PageLayout>
</template>
