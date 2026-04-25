<script setup lang="ts">
import ComponentCard from "@/components/demo/ComponentCard.vue";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Components" description="Browse and explore shadcn component demos" show-back-link>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
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
                    title="Card"
                    description="Displays a card with header, content, and footer"
                    href="/components/card"
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
                    title="Command"
                    description="Fast, composable, unstyled command menu"
                    href="/components/command"
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
                    title="Input"
                    description="Displays a form input field"
                    href="/components/input"
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
                    title="Spinner"
                    description="Displays an animated loading indicator"
                    href="/components/spinner"
                />
            </div>
    </PageLayout>
</template>
