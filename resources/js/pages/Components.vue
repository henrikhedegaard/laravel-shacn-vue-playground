<script setup lang="ts">
import ComponentCard from "@/components/demo/ComponentCard.vue";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Components"
        description="Browse and explore shadcn component demos"
        show-back-link
    >
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <ComponentCard
                title="Alert Dialog"
                description="A modal dialog that interrupts the user with important content"
                href="/components/alert-dialog"
            />
            <ComponentCard
                title="Avatar"
                description="An image element with a fallback for representing the user"
                href="/components/avatar"
            />
            <ComponentCard
                title="Badge"
                description="Displays a badge or component that looks like a badge"
                href="/components/badge"
            />
            <ComponentCard
                title="Breadcrumb"
                description="Displays the path to the current resource"
                href="/components/breadcrumb"
            />
            <ComponentCard
                title="Button"
                description="Displays a button or a component that looks like a button"
                href="/components/button"
            />
            <ComponentCard
                title="Button Group"
                description="A group of buttons that work together as a single unit"
                href="/components/button-group"
            />
            <ComponentCard
                title="Card"
                description="Displays a card with header, content, and footer"
                href="/components/card"
            />
            <ComponentCard
                title="Carousel"
                description="A carousel component for sliding content"
                href="/components/carousel"
            />
            <ComponentCard
                title="Chart"
                description="Chart components for data visualization"
                href="/components/chart"
            />
            <ComponentCard
                title="Checkbox"
                description="Displays a checkbox that can be checked or unchecked"
                href="/components/checkbox"
            />
            <ComponentCard
                title="Collapsible"
                description="An interactive component which expands/collapses a panel"
                href="/components/collapsible"
            />
            <ComponentCard
                title="Combobox"
                description="A searchable select component"
                href="/components/combobox"
            />
            <ComponentCard
                title="Command"
                description="Fast, composable, unstyled command menu"
                href="/components/command"
            />
            <ComponentCard
                title="Context Menu"
                description="A contextual menu that appears when right-clicking"
                href="/components/context-menu"
            />
            <ComponentCard
                title="Dialog"
                description="A window overlaid on either the primary window or another dialog window"
                href="/components/dialog"
            />
            <ComponentCard
                title="Dropdown Menu"
                description="Displays a menu to the user triggered by a button"
                href="/components/dropdown-menu"
            />
            <ComponentCard
                title="Empty"
                description="An empty state component for when there's no content"
                href="/components/empty"
            />
            <ComponentCard
                title="Field"
                description="A form field with label, description, and error handling"
                href="/components/field"
            />
            <ComponentCard
                title="Form"
                description="A form with validation and error handling"
                href="/components/form"
            />
            <ComponentCard
                title="Hover Card"
                description="A card that appears when hovering over an element"
                href="/components/hover-card"
            />
            <ComponentCard
                title="Input"
                description="Displays a form input field"
                href="/components/input"
            />
            <ComponentCard
                title="Input Group"
                description="Display additional information or actions to an input or textarea"
                href="/components/input-group"
            />
            <ComponentCard
                title="Item"
                description="A versatile component for displaying content with media, title, and description"
                href="/components/item"
            />
            <ComponentCard
                title="Kbd"
                description="Displays a keyboard shortcut or key"
                href="/components/kbd"
            />
            <ComponentCard
                title="Label"
                description="Renders an accessible label associated with controls"
                href="/components/label"
            />
            <ComponentCard
                title="Navigation Menu"
                description="A collection of links for navigating websites"
                href="/components/navigation-menu"
            />
            <ComponentCard
                title="Pin Input"
                description="Accessible pin input component for OTP and verification codes"
                href="/components/pin-input"
            />
            <ComponentCard
                title="Progress"
                description="Displays an indicator showing the completion progress of a task"
                href="/components/progress"
            />
            <ComponentCard
                title="Radio Group"
                description="A group of radio buttons for single selection"
                href="/components/radio-group"
            />
            <ComponentCard
                title="Scroll Area"
                description="A scrollable area with custom scrollbars"
                href="/components/scroll-area"
            />
            <ComponentCard
                title="Select"
                description="A dropdown select component"
                href="/components/select"
            />
            <ComponentCard
                title="Separator"
                description="Visually separates content"
                href="/components/separator"
            />
            <ComponentCard
                title="Sheet"
                description="Extends the Dialog component to display content from any edge"
                href="/components/sheet"
            />
            <ComponentCard
                title="Sidebar"
                description="A composable, themeable and customizable sidebar component"
                href="/components/sidebar"
            />
            <ComponentCard
                title="Skeleton"
                description="Use to show a placeholder while content is loading"
                href="/components/skeleton"
            />
            <ComponentCard
                title="Sonner"
                description="A toast notification component"
                href="/components/sonner"
            />
            <ComponentCard
                title="Spinner"
                description="Displays an animated loading indicator"
                href="/components/spinner"
            />
            <ComponentCard
                title="Stepper"
                description="A step-by-step progress indicator"
                href="/components/stepper"
            />
            <ComponentCard
                title="Switch"
                description="A toggle switch component"
                href="/components/switch"
            />
            <ComponentCard
                title="Table"
                description="A table component for displaying structured data"
                href="/components/table-component"
            />
            <ComponentCard
                title="Tabs"
                description="A set of layered sections of content"
                href="/components/tabs-component"
            />
            <ComponentCard
                title="Tags Input"
                description="An input field for tags with add/remove functionality"
                href="/components/tags-input"
            />
            <ComponentCard
                title="Toggle"
                description="A toggle button component"
                href="/components/toggle"
            />
            <ComponentCard
                title="Toggle Group"
                description="A group of toggle buttons"
                href="/components/toggle-group"
            />
        </div>
    </PageLayout>
</template>
