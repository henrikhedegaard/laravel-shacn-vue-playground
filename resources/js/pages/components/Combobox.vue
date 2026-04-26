<script setup lang="ts">
import { ref } from "vue";
import PageLayout from "@/components/PageLayout.vue";
import {
    Combobox,
    ComboboxAnchor,
    ComboboxEmpty,
    ComboboxGroup,
    ComboboxInput,
    ComboboxItem,
    ComboboxList,
    ComboboxSeparator,
    ComboboxTrigger,
} from "@/components/ui/combobox";

const value = ref("");
const frameworks = [
    { label: "Next.js", value: "next.js" },
    { label: "SvelteKit", value: "sveltekit" },
    { label: "Nuxt", value: "nuxt" },
    { label: "Remix", value: "remix" },
    { label: "Astro", value: "astro" },
];
</script>

<template>
    <PageLayout title="Combobox" description="A searchable select component" show-back-link>
        <div class="grid gap-4 max-w-sm">
            <Combobox v-model="value">
                <ComboboxAnchor class="w-[200px]">
                    <ComboboxInput placeholder="Search framework..." />
                    <ComboboxTrigger />
                </ComboboxAnchor>
                <ComboboxList>
                    <ComboboxEmpty>No results found</ComboboxEmpty>
                    <ComboboxGroup>
                        <ComboboxItem
                            v-for="framework in frameworks"
                            :key="framework.value"
                            :value="framework.value"
                        >
                            {{ framework.label }}
                        </ComboboxItem>
                    </ComboboxGroup>
                </ComboboxList>
            </Combobox>
        </div>
    </PageLayout>
</template>
