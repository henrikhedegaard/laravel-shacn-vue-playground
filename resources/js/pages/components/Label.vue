<script setup lang="ts">
import { Label } from "@/components/ui/label";
import { Input } from "@/components/ui/input";
import { Checkbox } from "@/components/ui/checkbox";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Label"
        description="Renders an accessible label associated with controls"
        show-back-link
    >
        <div class="space-y-8">
            <Card>
                <CardHeader>
                    <CardTitle>Label with Input</CardTitle>
                    <CardDescription>Label associated with an input field</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="space-y-2">
                        <Label for="email-input">Email</Label>
                        <Input id="email-input" type="email" placeholder="m@example.com" />
                    </div>
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Label with Checkbox</CardTitle>
                    <CardDescription>Label associated with a checkbox</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex items-center space-x-2">
                        <Checkbox id="terms-label" />
                        <Label for="terms-label">Accept terms and conditions</Label>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
