<script setup lang="ts">
import { Kbd } from "@/components/ui/kbd";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Kbd" description="Displays a keyboard shortcut or key" show-back-link>
        <div class="space-y-8">
                <!-- Basic Example -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Kbd</CardTitle>
                        <CardDescription>Simple keyboard key display</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-2">
                            <Kbd>⌘</Kbd>
                            <span>+</span>
                            <Kbd>K</Kbd>
                        </div>
                    </CardContent>
                </Card>

                <!-- Different Keys -->
                <Card>
                    <CardHeader>
                        <CardTitle>Common Keys</CardTitle>
                        <CardDescription>Various keyboard shortcuts</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex items-center gap-2">
                                <Kbd>⌘</Kbd>
                                <Kbd>C</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⌘</Kbd>
                                <Kbd>V</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⌘</Kbd>
                                <Kbd>⇧</Kbd>
                                <Kbd>Z</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⌫</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>↵</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⇥</Kbd>
                            </div>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Text -->
                <Card>
                    <CardHeader>
                        <CardTitle>In Context</CardTitle>
                        <CardDescription>Used in UI hints</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between rounded border bg-white p-3 dark:bg-neutral-900">
                                <span class="text-sm">Press</span>
                                <div class="flex items-center gap-2">
                                    <Kbd>⌘</Kbd>
                                    <Kbd>K</Kbd>
                                </div>
                            </div>
                            <div class="flex items-center justify-between rounded border bg-white p-3 dark:bg-neutral-900">
                                <span class="text-sm">to search</span>
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
