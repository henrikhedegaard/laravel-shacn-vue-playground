<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineContentProps {
    class?: HTMLAttributes["class"];
}

const props = defineProps<TimelineContentProps>();
</script>

<template>
    <div :class="cn('mt-2 text-sm text-muted-foreground', props.class)">
        <slot />
    </div>
</template>
