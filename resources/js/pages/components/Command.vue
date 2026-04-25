<script setup lang="ts">
import {
    Command,
    CommandEmpty,
    CommandGroup,
    CommandInput,
    CommandItem,
    CommandList,
    CommandSeparator,
    CommandShortcut,
} from "@/components/ui/command";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Kbd } from "@/components/ui/kbd";
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Command" description="Fast, composable, unstyled command menu" show-back-link>
        <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Inline Command</CardTitle>
                        <CardDescription>Inline command menu with groups</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Command class="rounded-lg border shadow-md">
                            <CommandInput placeholder="Type a command or search..." />
                            <CommandList>
                                <CommandEmpty>No results found.</CommandEmpty>
                                <CommandGroup heading="Suggestions">
                                    <CommandItem>
                                        <span>Calendar</span>
                                    </CommandItem>
                                    <CommandItem>
                                        <span>Search Emoji</span>
                                    </CommandItem>
                                    <CommandItem>
                                        <span>Calculator</span>
                                    </CommandItem>
                                </CommandGroup>
                                <CommandSeparator />
                                <CommandGroup heading="Settings">
                                    <CommandItem>
                                        <span>Profile</span>
                                        <CommandShortcut>⌘P</CommandShortcut>
                                    </CommandItem>
                                    <CommandItem>
                                        <span>Billing</span>
                                        <CommandShortcut>⌘B</CommandShortcut>
                                    </CommandItem>
                                    <CommandItem>
                                        <span>Settings</span>
                                        <CommandShortcut>⌘S</CommandShortcut>
                                    </CommandItem>
                                </CommandGroup>
                            </CommandList>
                        </Command>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
