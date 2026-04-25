<script setup lang="ts">
import { ref, onMounted, onUnmounted } from "vue";
import { Link } from "@inertiajs/vue3";
import {
    Command,
    CommandDialog,
    CommandEmpty,
    CommandGroup,
    CommandInput,
    CommandItem,
    CommandList,
    CommandSeparator,
    CommandShortcut,
} from "@/components/ui/command";
import { Search } from "lucide-vue-next";

const open = ref(false);

interface Component {
    description: string;
    href: string;
    name: string;
    shortcut?: string;
}

const components: Component[] = [
    {
        description: "An image element with a fallback for representing the user",
        href: "/components/avatar",
        name: "Avatar",
        shortcut: "A",
    },
    {
        description:
            "A versatile component for displaying content with media, title, and description",
        href: "/components/item",
        name: "Item",
        shortcut: "I",
    },
];

const filteredComponents = ref<Component[]>(components);

const filterComponents = (query: string): void => {
    if (!query) {
        filteredComponents.value = components;
        return;
    }
    const lowerQuery = query.toLowerCase();
    filteredComponents.value = components.filter(
        (component) =>
            component.name.toLowerCase().includes(lowerQuery) ||
            component.description.toLowerCase().includes(lowerQuery),
    );
};

// Keyboard shortcut handler
const handleKeydown = (e: KeyboardEvent): void => {
    if ((e.metaKey || e.ctrlKey) && e.key === "k") {
        e.preventDefault();
        open.value = !open.value;
    }
};

// Add keyboard listener on mount
onMounted(() => {
    globalThis.addEventListener("keydown", handleKeydown);
});

// Remove keyboard listener on unmount
onUnmounted(() => {
    globalThis.removeEventListener("keydown", handleKeydown);
});
</script>

<template>
    <CommandDialog v-model:open="open">
        <Command class="rounded-lg border shadow-md">
            <div class="flex items-center border-b px-3">
                <Search class="mr-2 size-4 shrink-0 opacity-50" />
                <CommandInput
                    placeholder="Search components..."
                    @update:model-value="filterComponents"
                />
            </div>
            <CommandList>
                <CommandEmpty>No components found.</CommandEmpty>
                <CommandGroup heading="Components">
                    <CommandItem
                        v-for="component in filteredComponents"
                        :key="component.href"
                        :value="component.name"
                        as-child
                    >
                        <Link :href="component.href" @click="open = false">
                            <span>{{ component.name }}</span>
                            <span class="ml-2 text-sm text-muted-foreground">
                                {{ component.description }}
                            </span>
                            <CommandShortcut v-if="component.shortcut">
                                {{ component.shortcut }}
                            </CommandShortcut>
                        </Link>
                    </CommandItem>
                </CommandGroup>
            </CommandList>
        </Command>
    </CommandDialog>
</template>
