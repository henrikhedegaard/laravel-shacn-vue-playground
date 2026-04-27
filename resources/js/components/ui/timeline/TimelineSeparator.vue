<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineSeparatorProps {
    class?: HTMLAttributes["class"];
    orientation?: "vertical" | "horizontal";
}

const props = withDefaults(defineProps<TimelineSeparatorProps>(), {
    orientation: "vertical",
});
</script>

<template>
    <div
        data-slot="timeline-separator"
        :class="
            cn(
                'absolute bg-border group-last/timeline-item:hidden',
                orientation === 'vertical'
                    ? 'left-1/2 top-0 h-full w-px -translate-x-1/2'
                    : 'top-1/2 left-0 h-px w-full -translate-y-1/2',
                props.class,
            )
        "
    />
</template>
