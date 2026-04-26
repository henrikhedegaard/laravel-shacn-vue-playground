<script setup lang="ts">
import { ref } from "vue";
import PageLayout from "@/components/PageLayout.vue";
import { Label } from "@/components/ui/label";
import { Switch } from "@/components/ui/switch";

const checked = ref(false);
</script>

<template>
    <PageLayout title="Switch" description="A toggle switch component" show-back-link>
        <div class="flex items-center space-x-2">
            <Switch v-model:checked="checked" id="notifications" />
            <Label for="notifications">Enable notifications</Label>
        </div>
    </PageLayout>
</template>
