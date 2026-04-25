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
    CommandShortcut,
} from "@/components/ui/command";
import { Search } from "lucide-vue-next";
import { useCommandPalette } from "@/composables/useCommandPalette";

const { open, close } = useCommandPalette();

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
    },
    {
        description: "Displays a badge or component that looks like a badge",
        href: "/components/badge",
        name: "Badge",
    },
    {
        description: "Displays the path to the current resource",
        href: "/components/breadcrumb",
        name: "Breadcrumb",
    },
    {
        description: "Displays a button or a component that looks like a button",
        href: "/components/button",
        name: "Button",
    },
    {
        description: "Displays a card with header, content, and footer",
        href: "/components/card",
        name: "Card",
    },
    {
        description: "Displays a checkbox that can be checked or unchecked",
        href: "/components/checkbox",
        name: "Checkbox",
    },
    {
        description: "An interactive component which expands/collapses a panel",
        href: "/components/collapsible",
        name: "Collapsible",
    },
    {
        description: "Fast, composable, unstyled command menu",
        href: "/components/command",
        name: "Command",
    },
    {
        description: "A window overlaid on either the primary window or another dialog window",
        href: "/components/dialog",
        name: "Dialog",
    },
    {
        description: "Displays a menu to the user triggered by a button",
        href: "/components/dropdown-menu",
        name: "Dropdown Menu",
    },
    {
        description: "Displays a form input field",
        href: "/components/input",
        name: "Input",
    },
    {
        description:
            "A versatile component for displaying content with media, title, and description",
        href: "/components/item",
        name: "Item",
    },
    {
        description: "Displays a keyboard shortcut or key",
        href: "/components/kbd",
        name: "Kbd",
    },
    {
        description: "Renders an accessible label associated with controls",
        href: "/components/label",
        name: "Label",
    },
    {
        description: "A collection of links for navigating websites",
        href: "/components/navigation-menu",
        name: "Navigation Menu",
    },
    {
        description: "Accessible pin input component for OTP and verification codes",
        href: "/components/pin-input",
        name: "Pin Input",
    },
    {
        description: "Displays an indicator showing the completion progress of a task",
        href: "/components/progress",
        name: "Progress",
    },
    {
        description: "Visually separates content",
        href: "/components/separator",
        name: "Separator",
    },
    {
        description: "Extends the Dialog component to display content from any edge",
        href: "/components/sheet",
        name: "Sheet",
    },
    {
        description: "A composable, themeable and customizable sidebar component",
        href: "/components/sidebar",
        name: "Sidebar",
    },
    {
        description: "Use to show a placeholder while content is loading",
        href: "/components/skeleton",
        name: "Skeleton",
    },
    {
        description: "Displays an animated loading indicator",
        href: "/components/spinner",
        name: "Spinner",
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
                        <Link :href="component.href" @click="close()">
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
