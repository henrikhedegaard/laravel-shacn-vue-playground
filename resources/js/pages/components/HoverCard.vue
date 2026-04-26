<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue";
import { Button } from "@/components/ui/button";
import { HoverCard, HoverCardContent, HoverCardTrigger } from "@/components/ui/hover-card";
</script>

<template>
    <PageLayout
        title="Hover Card"
        description="A card that appears when hovering over an element"
        show-back-link
    >
        <HoverCard>
            <HoverCardTrigger as-child>
                <Button variant="link">@shadcn-vue</Button>
            </HoverCardTrigger>
            <HoverCardContent class="w-80">
                <div class="flex justify-between space-x-4">
                    <div class="space-y-1">
                        <h4 class="text-sm font-semibold">@shadcn-vue</h4>
                        <p class="text-sm">
                            Beautifully designed components built with Radix Vue and Tailwind CSS.
                        </p>
                    </div>
                    <div class="h-10 w-10 rounded-full bg-muted" />
                </div>
            </HoverCardContent>
        </HoverCard>
    </PageLayout>
</template>
