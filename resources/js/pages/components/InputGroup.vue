<script setup lang="ts">
import {
    Search,
    Mail,
    CreditCard,
    Check,
    Star,
    Info,
    HelpCircle,
    Braces,
    Copy,
    CornerDownLeft,
    RefreshCw,
    Loader,
} from "lucide-vue-next";
import { ref } from "vue";
import {
    InputGroup,
    InputGroupAddon,
    InputGroupButton,
    InputGroupInput,
    InputGroupText,
    InputGroupTextarea,
} from "@/components/ui/input-group";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Spinner } from "@/components/ui/spinner";
import {
    Tooltip,
    TooltipContent,
    TooltipProvider,
    TooltipTrigger,
} from "@/components/ui/tooltip";
import {
    Popover,
    PopoverContent,
    PopoverTrigger,
} from "@/components/ui/popover";
import PageLayout from "@/components/PageLayout.vue";

const isFavorite = ref(false);
const copied = ref(false);

const copyText = (): void => {
    copied.value = true;
    setTimeout(() => {
        copied.value = false;
    }, 2000);
};
</script>

<template>
    <PageLayout title="Input Group" description="Display additional information or actions to an input or textarea" show-back-link>
        <div class="space-y-8">
            <!-- Icon & Text -->
            <Card>
                <CardHeader>
                    <CardTitle>Icon & Text</CardTitle>
                    <CardDescription>Add icons and text to inputs</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="grid w-full max-w-sm gap-6">
                        <InputGroup>
                            <InputGroupInput placeholder="Search..." />
                            <InputGroupAddon>
                                <Search :size="16" />
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup>
                            <InputGroupInput type="email" placeholder="Enter your email" />
                            <InputGroupAddon>
                                <Mail :size="16" />
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup>
                            <InputGroupInput placeholder="Card number" />
                            <InputGroupAddon>
                                <CreditCard :size="16" />
                            </InputGroupAddon>
                            <InputGroupAddon align="inline-end">
                                <Check :size="16" />
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup>
                            <InputGroupAddon>
                                <InputGroupText>$</InputGroupText>
                            </InputGroupAddon>
                            <InputGroupInput placeholder="0.00" />
                            <InputGroupAddon align="inline-end">
                                <InputGroupText>USD</InputGroupText>
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup>
                            <InputGroupAddon>
                                <InputGroupText>https://</InputGroupText>
                            </InputGroupAddon>
                            <InputGroupInput placeholder="example.com" class="!pl-0.5" />
                            <InputGroupAddon align="inline-end">
                                <InputGroupText>.com</InputGroupText>
                            </InputGroupAddon>
                        </InputGroup>
                    </div>
                </CardContent>
            </Card>

            <!-- Button -->
            <Card>
                <CardHeader>
                    <CardTitle>Button Actions</CardTitle>
                    <CardDescription>Add buttons to perform actions within the input group</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="grid w-full max-w-sm gap-6">
                        <InputGroup>
                            <InputGroupInput placeholder="https://x.com/shadcn" read-only />
                            <InputGroupAddon align="inline-end">
                                <InputGroupButton
                                    aria-label="Copy"
                                    title="Copy"
                                    size="icon-xs"
                                    @click="copyText"
                                >
                                    <Copy v-if="!copied" :size="14" />
                                    <Check v-else :size="14" />
                                </InputGroupButton>
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup>
                            <InputGroupInput placeholder="Type to search..." />
                            <InputGroupAddon align="inline-end">
                                <InputGroupButton variant="secondary">
                                    Search
                                </InputGroupButton>
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup class="[--radius:9999px]">
                            <Popover>
                                <PopoverTrigger as-child>
                                    <InputGroupAddon>
                                        <InputGroupButton variant="secondary" size="icon-xs">
                                            <Info :size="14" />
                                        </InputGroupButton>
                                    </InputGroupAddon>
                                </PopoverTrigger>
                                <PopoverContent align="start" class="flex flex-col gap-1 text-sm rounded-xl">
                                    <p class="font-medium">Your connection is not secure.</p>
                                    <p>You should not enter any sensitive information on this site.</p>
                                </PopoverContent>
                            </Popover>
                            <InputGroupAddon class="text-muted-foreground pl-1.5"> https:// </InputGroupAddon>
                            <InputGroupInput />
                            <InputGroupAddon align="inline-end">
                                <InputGroupButton size="icon-xs" @click="isFavorite = !isFavorite">
                                    <Star
                                        :size="14"
                                        :class="{ 'fill-blue-600 stroke-blue-600': isFavorite }"
                                    />
                                </InputGroupButton>
                            </InputGroupAddon>
                        </InputGroup>
                    </div>
                </CardContent>
            </Card>

            <!-- Tooltip -->
            <Card>
                <CardHeader>
                    <CardTitle>Tooltip</CardTitle>
                    <CardDescription>Add tooltips to provide additional context</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="grid w-full max-w-sm gap-4">
                        <InputGroup>
                            <InputGroupInput placeholder="Enter password" type="password" />
                            <InputGroupAddon align="inline-end">
                                <TooltipProvider>
                                    <Tooltip>
                                        <TooltipTrigger as-child>
                                            <InputGroupButton variant="ghost" aria-label="Info" size="icon-xs">
                                                <Info :size="14" />
                                            </InputGroupButton>
                                        </TooltipTrigger>
                                        <TooltipContent>
                                            <p>Password must be at least 8 characters</p>
                                        </TooltipContent>
                                    </Tooltip>
                                </TooltipProvider>
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup>
                            <InputGroupInput placeholder="Your email address" />
                            <InputGroupAddon align="inline-end">
                                <TooltipProvider>
                                    <Tooltip>
                                        <TooltipTrigger as-child>
                                            <InputGroupButton variant="ghost" aria-label="Help" size="icon-xs">
                                                <HelpCircle :size="14" />
                                            </InputGroupButton>
                                        </TooltipTrigger>
                                        <TooltipContent>
                                            <p>We'll use this to send you notifications</p>
                                        </TooltipContent>
                                    </Tooltip>
                                </TooltipProvider>
                            </InputGroupAddon>
                        </InputGroup>
                    </div>
                </CardContent>
            </Card>

            <!-- Textarea -->
            <Card>
                <CardHeader>
                    <CardTitle>Textarea</CardTitle>
                    <CardDescription>Input groups work with textarea using block-start/block-end alignment</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="grid w-full max-w-md gap-4">
                        <InputGroup>
                            <InputGroupTextarea
                                placeholder="console.log('Hello, world!');"
                                class="min-h-[200px]"
                            />
                            <InputGroupAddon align="block-end" class="border-t">
                                <InputGroupText>Line 1, Column 1</InputGroupText>
                                <InputGroupButton size="sm" class="ml-auto" variant="default">
                                    Run
                                    <CornerDownLeft :size="14" class="ml-1" />
                                </InputGroupButton>
                            </InputGroupAddon>
                            <InputGroupAddon align="block-start" class="border-b">
                                <InputGroupText class="font-mono font-medium">
                                    <Braces :size="14" class="mr-1" />
                                    script.js
                                </InputGroupText>
                                <InputGroupButton class="ml-auto" size="icon-xs">
                                    <RefreshCw :size="12" />
                                </InputGroupButton>
                                <InputGroupButton variant="ghost" size="icon-xs">
                                    <Copy :size="12" />
                                </InputGroupButton>
                            </InputGroupAddon>
                        </InputGroup>
                    </div>
                </CardContent>
            </Card>

            <!-- Spinner -->
            <Card>
                <CardHeader>
                    <CardTitle>Spinner</CardTitle>
                    <CardDescription>Show loading indicators while processing input</CardDescription>
                </CardHeader>
                <CardContent>
                    <div class="grid w-full max-w-sm gap-4">
                        <InputGroup data-disabled>
                            <InputGroupInput placeholder="Searching..." disabled />
                            <InputGroupAddon align="inline-end">
                                <Spinner />
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup data-disabled>
                            <InputGroupInput placeholder="Processing..." disabled />
                            <InputGroupAddon>
                                <Spinner />
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup data-disabled>
                            <InputGroupInput placeholder="Saving changes..." disabled />
                            <InputGroupAddon align="inline-end">
                                <InputGroupText>Saving...</InputGroupText>
                                <Spinner />
                            </InputGroupAddon>
                        </InputGroup>
                        <InputGroup data-disabled>
                            <InputGroupInput placeholder="Refreshing data..." disabled />
                            <InputGroupAddon>
                                <Loader :size="16" class="animate-spin" />
                            </InputGroupAddon>
                            <InputGroupAddon align="inline-end">
                                <InputGroupText class="text-muted-foreground">Please wait...</InputGroupText>
                            </InputGroupAddon>
                        </InputGroup>
                    </div>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
