<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Avatar"
        description="An image element with a fallback for representing the user"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Basic Example -->
            <Card>
                <CardHeader>
                    <CardTitle>Basic Avatar</CardTitle>
                    <CardDescription>Simple avatar with image and fallback</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex items-center gap-4">
                        <Avatar>
                            <AvatarImage src="https://github.com/shadcn.png" alt="@shadcn" />
                            <AvatarFallback>CN</AvatarFallback>
                        </Avatar>
                        <Avatar>
                            <AvatarFallback>JD</AvatarFallback>
                        </Avatar>
                    </div>
                </CardContent>
            </Card>

            <!-- Size Variants -->
            <Card>
                <CardHeader>
                    <CardTitle>Size Variants</CardTitle>
                    <CardDescription>Different avatar sizes</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex items-center gap-4">
                        <Avatar class="size-8">
                            <AvatarFallback>SM</AvatarFallback>
                        </Avatar>
                        <Avatar class="size-10">
                            <AvatarFallback>MD</AvatarFallback>
                        </Avatar>
                        <Avatar class="size-12">
                            <AvatarFallback>LG</AvatarFallback>
                        </Avatar>
                        <Avatar class="size-16">
                            <AvatarFallback>XL</AvatarFallback>
                        </Avatar>
                    </div>
                </CardContent>
            </Card>

            <!-- With Badge -->
            <Card>
                <CardHeader>
                    <CardTitle>Avatar with Badge</CardTitle>
                    <CardDescription>Avatar combined with status indicator</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <Avatar>
                                <AvatarImage src="https://github.com/shadcn.png" alt="@shadcn" />
                                <AvatarFallback>CN</AvatarFallback>
                            </Avatar>
                            <div
                                class="absolute bottom-0 right-0 size-3 rounded-full border-2 border-white bg-green-500"
                            />
                        </div>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
