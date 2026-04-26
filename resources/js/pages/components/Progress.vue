<script setup lang="ts">
import { Progress } from "@/components/ui/progress";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Progress"
        description="Displays an indicator showing the completion progress of a task"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Basic -->
            <Card>
                <CardHeader>
                    <CardTitle>Basic Progress</CardTitle>
                    <CardDescription>Simple progress indicator</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="space-y-4">
                        <Progress :model-value="0" />
                        <Progress :model-value="25" />
                        <Progress :model-value="50" />
                        <Progress :model-value="75" />
                        <Progress :model-value="100" />
                    </div>
                </CardContent>
            </Card>

            <!-- With Label -->
            <Card>
                <CardHeader>
                    <CardTitle>With Labels</CardTitle>
                    <CardDescription>Progress with percentage labels</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span>Uploading...</span>
                                <span>25%</span>
                            </div>
                            <Progress :model-value="25" />
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span>Processing...</span>
                                <span>75%</span>
                            </div>
                            <Progress :model-value="75" />
                        </div>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
