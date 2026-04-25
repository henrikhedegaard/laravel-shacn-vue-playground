<script setup lang="ts">
import { Separator } from "@/components/ui/separator";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Separator" description="Visually separates content" show-back-link>
        <div class="space-y-8">
                <!-- Horizontal -->
                <Card>
                    <CardHeader>
                        <CardTitle>Horizontal</CardTitle>
                        <CardDescription>Horizontal separator</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sm">Section 1</p>
                                <Separator />
                                <p class="text-sm">Section 2</p>
                            </div>
                        </div>
                    </CardContent>
                </Card>

                <!-- Vertical -->
                <Card>
                    <CardHeader>
                        <CardTitle>Vertical</CardTitle>
                        <CardDescription>Vertical separator</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <span class="text-sm">Item 1</span>
                            <Separator orientation="vertical" />
                            <span class="text-sm">Item 2</span>
                            <Separator orientation="vertical" />
                            <span class="text-sm">Item 3</span>
                        </div>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
