<script setup lang="ts">
import { Skeleton } from "@/components/ui/skeleton";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Skeleton"
        description="Use to show a placeholder while content is loading"
        show-back-link
    >
        <div class="space-y-8">
            <Card>
                <CardHeader>
                    <CardTitle>Basic Skeleton</CardTitle>
                    <CardDescription>Simple loading placeholder</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex items-center space-x-4">
                        <Skeleton class="h-12 w-12 rounded-full" />
                        <div class="space-y-2">
                            <Skeleton class="h-4 w-[250px]" />
                            <Skeleton class="h-4 w-[200px]" />
                        </div>
                    </div>
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Card Skeleton</CardTitle>
                    <CardDescription>Skeleton for a card layout</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-col space-y-3">
                        <Skeleton class="h-[125px] w-full rounded-xl" />
                        <div class="space-y-2">
                            <Skeleton class="h-4 w-full" />
                            <Skeleton class="h-4 w-3/4" />
                        </div>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
