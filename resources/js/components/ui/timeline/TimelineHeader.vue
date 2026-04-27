<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineHeaderProps {
    class?: HTMLAttributes["class"];
}

const props = defineProps<TimelineHeaderProps>();
</script>

<template>
    <div :class="cn('flex flex-col gap-0.5', props.class)">
        <slot />
    </div>
</template>
