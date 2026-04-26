<script setup lang="ts">
import { ref } from "vue";
import PageLayout from "@/components/PageLayout.vue";
import { ToggleGroup, ToggleGroupItem } from "@/components/ui/toggle-group";

const value = ref(["left"]);
</script>

<template>
    <PageLayout title="Toggle Group" description="A group of toggle buttons" show-back-link>
        <ToggleGroup type="multiple" v-model="value">
            <ToggleGroupItem value="left" aria-label="Toggle left"> Left </ToggleGroupItem>
            <ToggleGroupItem value="center" aria-label="Toggle center"> Center </ToggleGroupItem>
            <ToggleGroupItem value="right" aria-label="Toggle right"> Right </ToggleGroupItem>
        </ToggleGroup>
    </PageLayout>
</template>
