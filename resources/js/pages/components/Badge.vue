<script setup lang="ts">
import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Badge"
        description="Displays a badge or a component that looks like a badge"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Variants -->
            <Card>
                <CardHeader>
                    <CardTitle>Variants</CardTitle>
                    <CardDescription>Different badge styles</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Badge>Default</Badge>
                        <Badge variant="secondary">Secondary</Badge>
                        <Badge variant="destructive">Destructive</Badge>
                        <Badge variant="outline">Outline</Badge>
                    </div>
                </CardContent>
            </Card>

            <!-- With Text -->
            <Card>
                <CardHeader>
                    <CardTitle>Status Badges</CardTitle>
                    <CardDescription>Common status indicators</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Badge>New</Badge>
                        <Badge variant="secondary">Updated</Badge>
                        <Badge variant="outline">Archived</Badge>
                        <Badge variant="destructive">Deleted</Badge>
                    </div>
                </CardContent>
            </Card>

            <!-- With Icons -->
            <Card>
                <CardHeader>
                    <CardTitle>With Icons</CardTitle>
                    <CardDescription>Badges with icons</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-wrap items-center gap-4">
                        <Badge>
                            <span class="mr-2">✓</span>
                            Verified
                        </Badge>
                        <Badge variant="secondary">
                            <span class="mr-2">⚡</span>
                            Pro
                        </Badge>
                        <Badge variant="outline">
                            <span class="mr-2">★</span>
                            Featured
                        </Badge>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
