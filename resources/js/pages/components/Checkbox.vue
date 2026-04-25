<script setup lang="ts">
import { Checkbox } from "@/components/ui/checkbox";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Checkbox" description="Displays a checkbox that can be checked or unchecked" show-back-link>
        <div class="space-y-8">
                <!-- Basic -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Checkbox</CardTitle>
                        <CardDescription>Simple checkbox</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-2">
                            <Checkbox id="terms" />
                            <Label for="terms">Accept terms and conditions</Label>
                        </div>
                    </CardContent>
                </Card>

                <!-- Disabled -->
                <Card>
                    <CardHeader>
                        <CardTitle>Disabled Checkbox</CardTitle>
                        <CardDescription>Checkbox in disabled state</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-2">
                            <Checkbox id="disabled" disabled />
                            <Label for="disabled" class="text-muted-foreground">
                                Disabled option
                            </Label>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Label -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Label</CardTitle>
                        <CardDescription>Checkbox with associated label</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-2">
                            <Checkbox id="subscribe" />
                            <Label for="subscribe">Subscribe to newsletter</Label>
                        </div>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
