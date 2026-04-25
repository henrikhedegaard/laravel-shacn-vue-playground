<script setup lang="ts">
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Input" description="Displays a form input field" show-back-link>
        <div class="space-y-8">
                <!-- Basic -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Input</CardTitle>
                        <CardDescription>Simple text input</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="email">Email</Label>
                            <Input id="email" type="email" placeholder="m@example.com" />
                        </div>
                    </CardContent>
                </Card>

                <!-- With Label -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Label</CardTitle>
                        <CardDescription>Input with associated label</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="name">Name</Label>
                            <Input id="name" placeholder="Enter your name" />
                        </div>
                    </CardContent>
                </Card>

                <!-- Disabled -->
                <Card>
                    <CardHeader>
                        <CardTitle>Disabled Input</CardTitle>
                        <CardDescription>Input in disabled state</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="disabled">Disabled</Label>
                            <Input id="disabled" disabled placeholder="Disabled input" />
                        </div>
                    </CardContent>
                </Card>

                <!-- File Input -->
                <Card>
                    <CardHeader>
                        <CardTitle>File Input</CardTitle>
                        <CardDescription>File upload input</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="file">File</Label>
                            <Input id="file" type="file" />
                        </div>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
