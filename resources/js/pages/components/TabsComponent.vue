<script setup lang="ts">
import { ref } from "vue";
import PageLayout from "@/components/PageLayout.vue";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs";

const value = ref("account");
</script>

<template>
    <PageLayout title="Tabs" description="A set of layered sections of content" show-back-link>
        <Tabs v-model="value" default-value="account" class="w-[400px]">
            <TabsList class="grid w-full grid-cols-2">
                <TabsTrigger value="account">Account</TabsTrigger>
                <TabsTrigger value="password">Password</TabsTrigger>
            </TabsList>
            <TabsContent value="account">
                <Card>
                    <CardHeader>
                        <CardTitle>Account</CardTitle>
                        <CardDescription>
                            Make changes to your account here. Click save when you're done.
                        </CardDescription>
                    </CardHeader>
                    <CardContent class="space-y-2">
                        <div class="space-y-1">
                            <label htmlFor="name">Name</label>
                            <input
                                id="name"
                                defaultValue="Pedro Duarte"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                            />
                        </div>
                        <div class="space-y-1">
                            <label htmlFor="username">Username</label>
                            <input
                                id="username"
                                defaultValue="@peduarte"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                            />
                        </div>
                    </CardContent>
                </Card>
            </TabsContent>
            <TabsContent value="password">
                <Card>
                    <CardHeader>
                        <CardTitle>Password</CardTitle>
                        <CardDescription>
                            Change your password here. After saving, you'll be logged out.
                        </CardDescription>
                    </CardHeader>
                    <CardContent class="space-y-2">
                        <div class="space-y-1">
                            <label htmlFor="current">Current password</label>
                            <input
                                id="current"
                                type="password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                            />
                        </div>
                        <div class="space-y-1">
                            <label htmlFor="new">New password</label>
                            <input
                                id="new"
                                type="password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                            />
                        </div>
                    </CardContent>
                </Card>
            </TabsContent>
        </Tabs>
    </PageLayout>
</template>
