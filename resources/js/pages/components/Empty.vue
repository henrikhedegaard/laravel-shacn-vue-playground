<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue"
import { Button } from "@/components/ui/button"
import {
  Empty,
  EmptyContent,
  EmptyDescription,
  EmptyHeader,
  EmptyMedia,
  EmptyTitle,
} from "@/components/ui/empty"
</script>

<template>
  <PageLayout
    title="Empty"
    description="An empty state component for when there's no content to display"
    show-back-link
  >
    <Empty>
      <EmptyMedia>
        <div class="w-16 h-16 rounded-full bg-muted flex items-center justify-center">
          <span class="text-2xl">📭</span>
        </div>
      </EmptyMedia>
      <EmptyHeader>
        <EmptyTitle>No messages yet</EmptyTitle>
        <EmptyDescription>
          Get started by creating your first message.
        </EmptyDescription>
      </EmptyHeader>
      <EmptyContent>
        <Button>Create Message</Button>
      </EmptyContent>
    </Empty>
  </PageLayout>
</template>
