<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineProps {
    class?: HTMLAttributes["class"];
    orientation?: "vertical" | "horizontal";
}

const props = withDefaults(defineProps<TimelineProps>(), {
    orientation: "vertical",
});
</script>

<template>
    <div
        data-slot="timeline"
        :data-orientation="orientation"
        :class="
            cn(
                'group/timeline relative flex',
                orientation === 'vertical' ? 'flex-col' : 'flex-row items-start overflow-x-auto',
                props.class,
            )
        "
    >
        <slot />
    </div>
</template>
