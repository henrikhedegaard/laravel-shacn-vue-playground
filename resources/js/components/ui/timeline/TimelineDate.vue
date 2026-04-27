<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineDateProps {
    class?: HTMLAttributes["class"];
}

const props = defineProps<TimelineDateProps>();
</script>

<template>
    <div :class="cn('text-sm text-muted-foreground', props.class)">
        <slot />
    </div>
</template>
