<script setup lang="ts">
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Dropdown Menu" description="Displays a menu to the user triggered by a button" show-back-link>
        <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Dropdown</CardTitle>
                        <CardDescription>Simple dropdown menu</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <DropdownMenu>
                            <DropdownMenuTrigger as-child>
                                <Button variant="outline">Open Menu</Button>
                            </DropdownMenuTrigger>
                            <DropdownMenuContent class="w-56">
                                <DropdownMenuLabel>My Account</DropdownMenuLabel>
                                <DropdownMenuSeparator />
                                <DropdownMenuItem>Profile</DropdownMenuItem>
                                <DropdownMenuItem>Billing</DropdownMenuItem>
                                <DropdownMenuItem>Team</DropdownMenuItem>
                                <DropdownMenuItem>Subscription</DropdownMenuItem>
                            </DropdownMenuContent>
                        </DropdownMenu>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>With Separators</CardTitle>
                        <CardDescription>Dropdown menu with grouped items</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <DropdownMenu>
                            <DropdownMenuTrigger as-child>
                                <Button>Actions</Button>
                            </DropdownMenuTrigger>
                            <DropdownMenuContent>
                                <DropdownMenuLabel>Account</DropdownMenuLabel>
                                <DropdownMenuItem>Profile</DropdownMenuItem>
                                <DropdownMenuItem>Settings</DropdownMenuItem>
                                <DropdownMenuSeparator />
                                <DropdownMenuLabel>Team</DropdownMenuLabel>
                                <DropdownMenuItem>Invite Members</DropdownMenuItem>
                                <DropdownMenuItem>Manage Team</DropdownMenuItem>
                                <DropdownMenuSeparator />
                                <DropdownMenuItem class="text-destructive">Log out</DropdownMenuItem>
                            </DropdownMenuContent>
                        </DropdownMenu>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
