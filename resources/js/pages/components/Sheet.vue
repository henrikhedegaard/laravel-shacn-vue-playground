<script setup lang="ts">
import {
    Sheet,
    SheetContent,
    SheetDescription,
    SheetFooter,
    SheetHeader,
    SheetTitle,
    SheetTrigger,
} from "@/components/ui/sheet";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Sheet" description="Extends the Dialog component to display content from any edge of the screen" show-back-link>
        <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Sheet Sides</CardTitle>
                        <CardDescription>Sheet that opens from different sides</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap gap-2">
                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Top</Button>
                                </SheetTrigger>
                                <SheetContent side="top">
                                    <SheetHeader>
                                        <SheetTitle>Top Sheet</SheetTitle>
                                        <SheetDescription>Opens from the top</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>

                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Right</Button>
                                </SheetTrigger>
                                <SheetContent side="right">
                                    <SheetHeader>
                                        <SheetTitle>Right Sheet</SheetTitle>
                                        <SheetDescription>Opens from the right</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>

                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Bottom</Button>
                                </SheetTrigger>
                                <SheetContent side="bottom">
                                    <SheetHeader>
                                        <SheetTitle>Bottom Sheet</SheetTitle>
                                        <SheetDescription>Opens from the bottom</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>

                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Left</Button>
                                </SheetTrigger>
                                <SheetContent side="left">
                                    <SheetHeader>
                                        <SheetTitle>Left Sheet</SheetTitle>
                                        <SheetDescription>Opens from the left</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>
                        </div>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>Form in Sheet</CardTitle>
                        <CardDescription>Sheet with form content</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Sheet>
                            <SheetTrigger as-child>
                                <Button>Edit Profile</Button>
                            </SheetTrigger>
                            <SheetContent>
                                <SheetHeader>
                                    <SheetTitle>Edit profile</SheetTitle>
                                    <SheetDescription>
                                        Make changes to your profile here. Click save when you're done.
                                    </SheetDescription>
                                </SheetHeader>
                                <div class="grid gap-4 py-4">
                                    <div class="grid grid-cols-4 items-center gap-4">
                                        <Label for="sheet-name" class="text-right">Name</Label>
                                        <Input id="sheet-name" value="Pedro Duarte" class="col-span-3" />
                                    </div>
                                </div>
                                <SheetFooter>
                                    <Button type="submit">Save changes</Button>
                                </SheetFooter>
                            </SheetContent>
                        </Sheet>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
