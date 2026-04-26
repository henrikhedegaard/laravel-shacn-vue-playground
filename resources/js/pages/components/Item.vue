<script setup lang="ts">
import {
    Item,
    ItemGroup,
    ItemSeparator,
    ItemMedia,
    ItemContent,
    ItemTitle,
    ItemDescription,
    ItemActions,
    ItemHeader,
    ItemFooter,
} from "@/components/ui/item";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { Progress } from "@/components/ui/progress";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Spinner } from "@/components/ui/spinner";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Item"
        description="A versatile component for displaying content with media, title, and description"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Basic Example -->
            <Card>
                <CardHeader>
                    <CardTitle>Basic Item</CardTitle>
                    <CardDescription
                        >Simple item with media, title, and description</CardDescription
                    >
                </CardHeader>
                <CardContent>
                    <Item variant="outline">
                        <ItemMedia>
                            <div
                                class="flex size-10 items-center justify-center rounded-full bg-primary text-primary-foreground"
                            >
                                JD
                            </div>
                        </ItemMedia>
                        <ItemContent>
                            <ItemTitle>John Doe</ItemTitle>
                            <ItemDescription>Software Engineer</ItemDescription>
                        </ItemContent>
                    </Item>
                </CardContent>
            </Card>

            <!-- With Actions -->
            <Card>
                <CardHeader>
                    <CardTitle>Item with Actions</CardTitle>
                    <CardDescription>Item with action buttons</CardDescription>
                </CardHeader>
                <CardContent>
                    <Item variant="outline">
                        <ItemMedia>
                            <div
                                class="flex size-10 items-center justify-center rounded-full bg-secondary text-secondary-foreground"
                            >
                                AS
                            </div>
                        </ItemMedia>
                        <ItemContent>
                            <ItemTitle>Alice Smith</ItemTitle>
                            <ItemDescription>Designer</ItemDescription>
                        </ItemContent>
                        <ItemActions>
                            <Button variant="ghost" size="sm">View Profile</Button>
                            <Button variant="outline" size="sm">Message</Button>
                        </ItemActions>
                    </Item>
                </CardContent>
            </Card>

            <!-- With Header and Footer -->
            <Card>
                <CardHeader>
                    <CardTitle>Item with Header and Footer</CardTitle>
                    <CardDescription
                        >Complete item structure with header and footer sections</CardDescription
                    >
                </CardHeader>
                <CardContent>
                    <Item variant="outline">
                        <ItemHeader>
                            <ItemMedia>
                                <div
                                    class="flex size-10 items-center justify-center rounded-full bg-primary text-primary-foreground"
                                >
                                    JD
                                </div>
                            </ItemMedia>
                            <ItemContent>
                                <ItemTitle>John Doe</ItemTitle>
                                <ItemDescription>Software Engineer • San Francisco</ItemDescription>
                            </ItemContent>
                            <ItemActions>
                                <Button variant="ghost" size="sm">View Profile</Button>
                                <Button variant="outline" size="sm">Message</Button>
                            </ItemActions>
                        </ItemHeader>
                        <ItemFooter>
                            <div class="flex items-center gap-4 text-xs text-muted-foreground">
                                <span>Member since Jan 2024</span>
                                <Badge variant="secondary">Pro</Badge>
                            </div>
                        </ItemFooter>
                    </Item>
                </CardContent>
            </Card>

            <!-- Item Group -->
            <Card>
                <CardHeader>
                    <CardTitle>Item Group</CardTitle>
                    <CardDescription
                        >Multiple items grouped together with separators</CardDescription
                    >
                </CardHeader>
                <CardContent>
                    <ItemGroup class="flex flex-col gap-5">
                        <Item variant="outline">
                            <ItemHeader>
                                <ItemMedia>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full bg-primary text-primary-foreground"
                                    >
                                        JD
                                    </div>
                                </ItemMedia>
                                <ItemContent>
                                    <ItemTitle>John Doe</ItemTitle>
                                    <ItemDescription>Software Engineer</ItemDescription>
                                </ItemContent>
                                <ItemActions>
                                    <Button variant="ghost" size="sm">View Profile</Button>
                                </ItemActions>
                            </ItemHeader>
                        </Item>

                        <ItemSeparator />

                        <Item variant="outline">
                            <ItemHeader>
                                <ItemMedia>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full bg-secondary text-secondary-foreground"
                                    >
                                        AS
                                    </div>
                                </ItemMedia>
                                <ItemContent>
                                    <ItemTitle>Alice Smith</ItemTitle>
                                    <ItemDescription>Designer</ItemDescription>
                                </ItemContent>
                                <ItemActions>
                                    <Button variant="ghost" size="sm">View Profile</Button>
                                </ItemActions>
                            </ItemHeader>
                        </Item>
                    </ItemGroup>
                </CardContent>
            </Card>

            <!-- With Progress -->
            <Card>
                <CardHeader>
                    <CardTitle>Item with Progress</CardTitle>
                    <CardDescription>Item with progress indicator in footer</CardDescription>
                </CardHeader>
                <CardContent>
                    <Item variant="outline">
                        <ItemMedia variant="icon">
                            <Spinner />
                        </ItemMedia>
                        <ItemContent>
                            <ItemTitle>Downloading...</ItemTitle>
                            <ItemDescription>129 MB / 1000 MB</ItemDescription>
                        </ItemContent>
                        <ItemActions class="hidden sm:flex">
                            <Button variant="outline" size="sm">Cancel</Button>
                        </ItemActions>
                        <ItemFooter>
                            <Progress :model-value="75" />
                        </ItemFooter>
                    </Item>
                </CardContent>
            </Card>

            <!-- Size Variants -->
            <Card>
                <CardHeader>
                    <CardTitle>Size Variants</CardTitle>
                    <CardDescription>Different item sizes</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="flex flex-col gap-4">
                        <Item variant="outline" size="sm">
                            <ItemMedia class="size-8">
                                <div
                                    class="flex size-full items-center justify-center rounded-full bg-primary text-primary-foreground text-xs"
                                >
                                    SM
                                </div>
                            </ItemMedia>
                            <ItemContent>
                                <ItemTitle class="text-sm">Small Item</ItemTitle>
                                <ItemDescription class="text-xs">Compact size</ItemDescription>
                            </ItemContent>
                        </Item>

                        <Item variant="outline" size="default">
                            <ItemMedia class="size-10">
                                <div
                                    class="flex size-full items-center justify-center rounded-full bg-primary text-primary-foreground"
                                >
                                    MD
                                </div>
                            </ItemMedia>
                            <ItemContent>
                                <ItemTitle>Default Item</ItemTitle>
                                <ItemDescription>Standard size</ItemDescription>
                            </ItemContent>
                        </Item>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
