<script setup lang="ts">
import type { HTMLAttributes } from "vue";
import { cn } from "@/lib/utils";

interface TimelineItemProps {
    class?: HTMLAttributes["class"];
    step?: number;
}

const props = defineProps<TimelineItemProps>();
</script>

<template>
    <div
        data-slot="timeline-item"
        class="group/timeline-item relative flex gap-4 pb-8 last:pb-0 group-data-[orientation=horizontal]/timeline:flex-col group-data-[orientation=horizontal]/timeline:gap-2 group-data-[orientation=horizontal]/timeline:pb-0 group-data-[orientation=horizontal]/timeline:pr-8 group-data-[orientation=horizontal]/timeline:last:pr-0 group-data-[orientation=horizontal]/timeline:min-w-[160px]"
        :class="props.class"
    >
        <div
            class="relative flex shrink-0 items-start justify-center group-data-[orientation=horizontal]/timeline:items-center"
        >
            <slot name="separator" />
            <slot name="indicator" />
        </div>
        <div class="flex-1 group-data-[orientation=horizontal]/timeline:pt-0">
            <slot name="header" />
            <slot name="content" />
        </div>
    </div>
</template>
