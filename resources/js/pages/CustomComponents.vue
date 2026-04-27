<script setup lang="ts">
import ComponentCard from "@/components/demo/ComponentCard.vue";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Custom Components"
        description="Custom components built for this project"
        show-back-link
    >
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <ComponentCard
                title="Timeline"
                description="A visual representation of events in chronological order"
                href="/custom-components/timeline"
            />
        </div>
    </PageLayout>
</template>
