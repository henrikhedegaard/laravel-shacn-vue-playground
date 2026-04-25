<script setup lang="ts">
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarGroup,
    SidebarGroupContent,
    SidebarGroupLabel,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
    SidebarProvider,
    SidebarTrigger,
} from "@/components/ui/sidebar";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Sidebar" description="A composable, themeable and customizable sidebar component" show-back-link>
        <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Sidebar</CardTitle>
                        <CardDescription>
                            Sidebar with navigation menu items. The sidebar is typically used at the app layout level.
                        </CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="h-[400px] w-full overflow-hidden rounded-lg border">
                            <SidebarProvider>
                                <Sidebar>
                                    <SidebarHeader>
                                        <div class="px-2 py-1 font-semibold">My App</div>
                                    </SidebarHeader>
                                    <SidebarContent>
                                        <SidebarGroup>
                                            <SidebarGroupLabel>Application</SidebarGroupLabel>
                                            <SidebarGroupContent>
                                                <SidebarMenu>
                                                    <SidebarMenuItem>
                                                        <SidebarMenuButton>Dashboard</SidebarMenuButton>
                                                    </SidebarMenuItem>
                                                    <SidebarMenuItem>
                                                        <SidebarMenuButton>Users</SidebarMenuButton>
                                                    </SidebarMenuItem>
                                                    <SidebarMenuItem>
                                                        <SidebarMenuButton>Settings</SidebarMenuButton>
                                                    </SidebarMenuItem>
                                                </SidebarMenu>
                                            </SidebarGroupContent>
                                        </SidebarGroup>
                                    </SidebarContent>
                                    <SidebarFooter>
                                        <div class="px-2 py-1 text-xs text-muted-foreground">v1.0.0</div>
                                    </SidebarFooter>
                                </Sidebar>
                                <main class="flex-1 p-4">
                                    <SidebarTrigger />
                                    <div class="mt-4">Main content area</div>
                                </main>
                            </SidebarProvider>
                        </div>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>Usage Note</CardTitle>
                        <CardDescription>
                            The Sidebar component is best used at the app layout level. This demo shows the components,
                            but for a real implementation, wrap your entire app in SidebarProvider.
                        </CardDescription>
                    </CardHeader>
                </Card>
            </div>
    </PageLayout>
</template>
