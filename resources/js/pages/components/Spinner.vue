<script setup lang="ts">
import { Spinner } from "@/components/ui/spinner";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Spinner" description="Displays an animated loading indicator" show-back-link>
        <div class="space-y-8">
                <!-- Sizes -->
                <Card>
                    <CardHeader>
                        <CardTitle>Sizes</CardTitle>
                        <CardDescription>Different spinner sizes</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <Spinner class="size-3" />
                            <Spinner class="size-4" />
                            <Spinner class="size-5" />
                            <Spinner class="size-6" />
                            <Spinner class="size-8" />
                        </div>
                    </CardContent>
                </Card>

                <!-- Colors -->
                <Card>
                    <CardHeader>
                        <CardTitle>Colors</CardTitle>
                        <CardDescription>Different spinner colors</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <Spinner class="size-6 text-red-500" />
                            <Spinner class="size-6 text-green-500" />
                            <Spinner class="size-6 text-blue-500" />
                            <Spinner class="size-6 text-yellow-500" />
                            <Spinner class="size-6 text-purple-500" />
                        </div>
                    </CardContent>
                </Card>

                <!-- In Badge -->
                <Card>
                    <CardHeader>
                        <CardTitle>In Badge</CardTitle>
                        <CardDescription>Spinner inside a badge</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-2">
                            <Badge>
                                <Spinner />
                                Syncing
                            </Badge>
                            <Badge variant="secondary">
                                <Spinner />
                                Updating
                            </Badge>
                            <Badge variant="outline">
                                <Spinner />
                                Processing
                            </Badge>
                        </div>
                    </CardContent>
                </Card>

                <!-- In Button -->
                <Card>
                    <CardHeader>
                        <CardTitle>In Button</CardTitle>
                        <CardDescription>Spinner inside a button</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-2">
                            <Button disabled>
                                <Spinner />
                                Processing booking
                            </Button>
                            <Button variant="outline" disabled>
                                <Spinner />
                                Saving...
                            </Button>
                        </div>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
