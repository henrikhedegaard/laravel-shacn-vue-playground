<script setup lang="ts">
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Button"
        description="Displays a button or a component that looks like a button"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Variants -->
            <Card>
                <CardHeader>
                    <CardTitle>Variants</CardTitle>
                    <CardDescription>Different button styles</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Button>Default</Button>
                        <Button variant="secondary">Secondary</Button>
                        <Button variant="destructive">Destructive</Button>
                        <Button variant="outline">Outline</Button>
                        <Button variant="ghost">Ghost</Button>
                        <Button variant="link">Link</Button>
                    </div>
                </CardContent>
            </Card>

            <!-- Sizes -->
            <Card>
                <CardHeader>
                    <CardTitle>Sizes</CardTitle>
                    <CardDescription>Different button sizes</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Button size="default">Default</Button>
                        <Button size="sm">Small</Button>
                        <Button size="lg">Large</Button>
                        <Button size="icon">
                            <span>+</span>
                        </Button>
                    </div>
                </CardContent>
            </Card>

            <!-- With Icon -->
            <Card>
                <CardHeader>
                    <CardTitle>With Icons</CardTitle>
                    <CardDescription>Buttons with icons</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Button>
                            <span class="mr-2">→</span>
                            Continue
                        </Button>
                        <Button variant="outline">
                            <span class="mr-2">✕</span>
                            Cancel
                        </Button>
                    </div>
                </CardContent>
            </Card>

            <!-- States -->
            <Card>
                <CardHeader>
                    <CardTitle>States</CardTitle>
                    <CardDescription>Different button states</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Button>Default</Button>
                        <Button disabled>Disabled</Button>
                        <Button loading>Loading</Button>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
