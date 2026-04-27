<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineIndicatorProps {
    class?: HTMLAttributes["class"];
}

const props = defineProps<TimelineIndicatorProps>();
</script>

<template>
    <div
        data-slot="timeline-indicator"
        :class="
            cn(
                'relative z-10 flex size-5 shrink-0 items-center justify-center rounded-full border-2 border-foreground bg-background',
                props.class,
            )
        "
    >
        <slot />
    </div>
</template>
