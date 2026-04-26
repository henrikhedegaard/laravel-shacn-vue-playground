<script setup lang="ts">
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Card"
        description="Displays a card with header, content, and footer"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Basic -->
            <Card>
                <CardHeader>
                    <CardTitle>Card Title</CardTitle>
                    <CardDescription>Card description goes here</CardDescription>
                </CardHeader>
                <CardContent>
                    <p>Card content goes here. This is the main body of the card.</p>
                </CardContent>
                <CardFooter>
                    <Button>Action</Button>
                </CardFooter>
            </Card>

            <!-- Minimal -->
            <Card>
                <CardContent class="pt-6">
                    <p>Minimal card without header or footer</p>
                </CardContent>
            </Card>

            <!-- With Image -->
            <Card>
                <div class="h-48 bg-muted" />
                <CardHeader>
                    <CardTitle>Card with Image</CardTitle>
                    <CardDescription>Card with an image area</CardDescription>
                </CardHeader>
                <CardContent>
                    <p>This card includes an image area above the header.</p>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
