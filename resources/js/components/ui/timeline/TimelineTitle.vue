<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineTitleProps {
    class?: HTMLAttributes["class"];
}

const props = defineProps<TimelineTitleProps>();
</script>

<template>
    <div :class="cn('text-base font-semibold', props.class)">
        <slot />
    </div>
</template>
