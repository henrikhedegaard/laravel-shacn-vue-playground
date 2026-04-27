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
        shortcut: "⌘A",
    },
    {
        description: "A modal dialog that interrupts the user with important content",
        href: "/components/alert-dialog",
        name: "Alert Dialog",
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
        description: "Groups multiple button actions together",
        href: "/components/button-group",
        name: "Button Group",
    },
    {
        description: "A carousel for cycling through elements",
        href: "/components/carousel",
        name: "Carousel",
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
        description: "Visual representations of data using various chart types",
        href: "/components/chart",
        name: "Chart",
    },
    {
        description: "An input with a popover list of options",
        href: "/components/combobox",
        name: "Combobox",
    },
    {
        description: "Displays a menu to the user triggered by a right-click",
        href: "/components/context-menu",
        name: "Context Menu",
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
        shortcut: "⌘I",
    },
    {
        description: "Display additional information or actions to an input or textarea",
        href: "/components/input-group",
        name: "Input Group",
        shortcut: "⌘G",
    },
    {
        description:
            "A versatile component for displaying content with media, title, and description",
        href: "/components/item",
        name: "Item",
    },
    {
        description: "A placeholder for empty states with optional actions",
        href: "/components/empty",
        name: "Empty",
    },
    {
        description: "A form field wrapper with label, error, and help text",
        href: "/components/field",
        name: "Field",
    },
    {
        description: "Building blocks for creating accessible forms",
        href: "/components/form",
        name: "Form",
    },
    {
        description: "A popover that appears when hovering over an element",
        href: "/components/hover-card",
        name: "Hover Card",
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
        description: "A floating element for displaying rich content",
        href: "/components/popover",
        name: "Popover",
    },
    {
        description: "Accessible pin input component for OTP and verification codes",
        href: "/components/pin-input",
        name: "Pin Input",
    },
    {
        description: "A set of radio buttons for selecting a single option",
        href: "/components/radio-group",
        name: "Radio Group",
    },
    {
        description: "Displays an indicator showing the completion progress of a task",
        href: "/components/progress",
        name: "Progress",
    },
    {
        description: "A custom scrollbar for scrolling content",
        href: "/components/scroll-area",
        name: "Scroll Area",
    },
    {
        description: "Displays a list of options for the user to pick from",
        href: "/components/select",
        name: "Select",
    },
    {
        description: "Visually separates content",
        href: "/components/separator",
        name: "Separator",
    },
    {
        description: "A toast notification system for displaying alerts",
        href: "/components/sonner",
        name: "Sonner",
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
        description: "A step-by-step navigation component",
        href: "/components/stepper",
        name: "Stepper",
    },
    {
        description: "A toggle switch for binary options",
        href: "/components/switch",
        name: "Switch",
    },
    {
        description: "A responsive table for displaying tabular data",
        href: "/components/table",
        name: "Table",
    },
    {
        description: "A set of layered sections for organizing content",
        href: "/components/tabs",
        name: "Tabs",
    },
    {
        description: "An input for entering multiple tags",
        href: "/components/tags-input",
        name: "Tags Input",
    },
    {
        description: "A two-state button that can be on or off",
        href: "/components/toggle",
        name: "Toggle",
    },
    {
        description: "A group of toggle buttons for multiple selection",
        href: "/components/toggle-group",
        name: "Toggle Group",
    },
    {
        description: "A floating element for displaying contextual information",
        href: "/components/tooltip",
        name: "Tooltip",
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
const handleKeydown = (event: KeyboardEvent): void => {
    if ((event.metaKey || event.ctrlKey) && event.key === "k") {
        event.preventDefault();
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
            <div class="flex items-center border-b">
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
                        <Link :href="component.href" @click="close()" class="flex items-center">
                            <span class="w-fit min-w-32">{{ component.name }}</span>
                            <span class="ml-2 flex-1 truncate text-xs text-muted-foreground">
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
