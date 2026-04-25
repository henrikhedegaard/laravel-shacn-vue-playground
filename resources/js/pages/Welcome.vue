<script setup lang="ts">
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
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
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Progress } from "@/components/ui/progress";
import { Spinner } from "@/components/ui/spinner";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout title="Welcome" description="A playground for shadcn-vue components">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <Card class="md:col-span-2">
                <CardHeader>
                    <CardTitle>Spinner</CardTitle>
                    <CardDescription
                        >An indicator that can be used to show a loading state.</CardDescription
                    >
                </CardHeader>
                <CardContent class="space-y-4">
                    <div class="flex items-center gap-2">
                        <Spinner class="size-3" />
                        <Spinner class="size-4" />
                        <Spinner class="size-5" />
                        <Spinner class="size-6" />
                    </div>

                    <div class="flex items-center gap-2">
                        <Spinner class="size-4 text-red-500" />
                        <Spinner class="size-4 text-green-500" />
                        <Spinner class="size-4 text-blue-500" />
                        <Spinner class="size-4 text-yellow-500" />
                        <Spinner class="size-4 text-purple-500" />
                    </div>

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

                    <div>
                        <Button disabled>
                            <Spinner />
                            Processing booking
                        </Button>
                    </div>

                    <Item variant="outline">
                        <ItemMedia variant="icon">
                            <Spinner />
                        </ItemMedia>
                        <ItemContent>
                            <ItemTitle>Downloading...</ItemTitle>
                            <ItemDescription>129 MB / 1000 MB</ItemDescription>
                        </ItemContent>
                        <ItemActions class="hidden sm:flex">
                            <Button variant="outline" size="sm"> Cancel </Button>
                        </ItemActions>
                        <ItemFooter>
                            <Progress :model-value="75" />
                        </ItemFooter>
                    </Item>
                </CardContent>
            </Card>

            <Card class="md:col-span-2">
                <CardContent class="pt-6">
                    <Item variant="outline" class="bg-muted/20">
                        <ItemMedia> <Spinner /> </ItemMedia>
                        <ItemContent>
                            <ItemTitle>Loading...</ItemTitle>
                        </ItemContent>
                    </Item>
                </CardContent>
            </Card>

            <div class="md:col-span-4">
                <Card>
                    <CardHeader>
                        <CardTitle>Item - All Primitives</CardTitle>
                        <CardDescription>Demo using all Item component primitives</CardDescription>
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
                                        <ItemDescription
                                            >Software Engineer • San Francisco</ItemDescription
                                        >
                                    </ItemContent>
                                    <ItemActions>
                                        <Button variant="ghost" size="sm">View Profile</Button>
                                        <Button variant="outline" size="sm">Message</Button>
                                    </ItemActions>
                                </ItemHeader>
                                <ItemFooter>
                                    <div
                                        class="flex items-center gap-4 text-xs text-muted-foreground"
                                    >
                                        <span>Member since Jan 2024</span>
                                        <Badge variant="secondary">Pro</Badge>
                                    </div>
                                </ItemFooter>
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
                                        <ItemDescription>Designer • New York</ItemDescription>
                                    </ItemContent>
                                    <ItemActions>
                                        <Button variant="ghost" size="sm">View Profile</Button>
                                        <Button variant="outline" size="sm">Message</Button>
                                    </ItemActions>
                                </ItemHeader>
                                <ItemFooter>
                                    <div
                                        class="flex items-center gap-4 text-xs text-muted-foreground"
                                    >
                                        <span>Member since Mar 2024</span>
                                        <Badge variant="outline">Free</Badge>
                                    </div>
                                </ItemFooter>
                            </Item>
                        </ItemGroup>
                    </CardContent>
                </Card>
            </div>
        </div>
    </PageLayout>
</template>
