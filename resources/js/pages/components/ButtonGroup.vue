<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue";
import { Button } from "@/components/ui/button";
import { ButtonGroup } from "@/components/ui/button-group";
</script>

<template>
    <PageLayout
        title="Button Group"
        description="A group of buttons that work together as a single unit"
        show-back-link
    >
        <ButtonGroup>
            <Button variant="outline">Left</Button>
            <Button variant="outline">Center</Button>
            <Button variant="outline">Right</Button>
        </ButtonGroup>
    </PageLayout>
</template>
