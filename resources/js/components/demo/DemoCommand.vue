<script setup lang="ts">
import {
    Command,
    CommandEmpty,
    CommandGroup,
    CommandItem,
    CommandList,
    CommandSeparator,
} from "@/components/ui/command";
import { Kbd } from "@/components/ui/kbd";
</script>

<template>
    <Command class="outline-4 outline-slate-400/20">
        <CommandList>
            <CommandEmpty>No results found.</CommandEmpty>
            <CommandGroup heading="Suggestions">
                <CommandItem value="calendar"> Calendar </CommandItem>
                <CommandItem value="search-emoji"> Search Emoji </CommandItem>
                <CommandItem value="calculator"> Calculator </CommandItem>
            </CommandGroup>
            <CommandSeparator />
            <CommandGroup heading="Settings">
                <CommandItem value="profile"> Profile </CommandItem>
                <CommandItem value="billing"> Billing </CommandItem>
                <CommandItem value="settings"> Settings </CommandItem>
            </CommandGroup>
        </CommandList>
        <div
            class="flex items-center gap-1.5 border-t bg-slate-50 p-4 text-xs font-medium text-slate-600"
        >
            <Kbd class="border bg-muted/50"> -></Kbd>
            Go to page
        </div>
    </Command>
</template>
