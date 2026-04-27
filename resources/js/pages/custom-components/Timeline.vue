<script setup lang="ts">
import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import {
    Timeline,
    TimelineContent,
    TimelineDate,
    TimelineHeader,
    TimelineIndicator,
    TimelineItem,
    TimelineSeparator,
    TimelineTitle,
} from "@/components/ui/timeline";
import PageLayout from "@/components/PageLayout.vue";
import { Check, Circle, GitBranch, Package, Rocket, Settings, Star, Zap } from "lucide-vue-next";
</script>

<template>
    <PageLayout
        title="Timeline"
        description="A visual representation of events in chronological order"
        show-back-link
    >
        <div class="space-y-8">
            <!-- Basic Timeline -->
            <Card>
                <CardHeader>
                    <CardTitle>Basic Timeline</CardTitle>
                    <CardDescription
                        >A simple vertical timeline with dates and titles</CardDescription
                    >
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>March 2024</TimelineDate>
                                    <TimelineTitle>Project Initialized</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Successfully set up the project repository and initial
                                    architecture.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>April 2024</TimelineDate>
                                    <TimelineTitle>Design Phase</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Completed UI/UX design and created design system documentation.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>May 2024</TimelineDate>
                                    <TimelineTitle>Development</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Started core development with focus on component library.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- With Icons -->
            <Card>
                <CardHeader>
                    <CardTitle>With Icons</CardTitle>
                    <CardDescription>Timeline with custom icons in indicators</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Rocket class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>March 2024</TimelineDate>
                                    <TimelineTitle>Project Started</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Project initialization and repository setup completed.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Zap class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>April 2024</TimelineDate>
                                    <TimelineTitle>Features Added</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Implemented core features and functionality.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Check class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>May 2024</TimelineDate>
                                    <TimelineTitle>Launched</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Successfully launched the product to production.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- With Custom Indicators -->
            <Card>
                <CardHeader>
                    <CardTitle>With Custom Indicators</CardTitle>
                    <CardDescription>Timeline with styled indicators</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator class="bg-blue-500 border-blue-500">
                                    <span class="text-sm font-bold text-white">1</span>
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Q1 2024</TimelineDate>
                                    <TimelineTitle>Planning</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Initial planning and requirements gathering phase.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator class="bg-green-500 border-green-500">
                                    <span class="text-sm font-bold text-white">2</span>
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Q2 2024</TimelineDate>
                                    <TimelineTitle>Development</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Active development and implementation phase.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator class="bg-purple-500 border-purple-500">
                                    <span class="text-sm font-bold text-white">3</span>
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Q3 2024</TimelineDate>
                                    <TimelineTitle>Testing</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Quality assurance and user testing phase.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- Pipeline Steps -->
            <Card>
                <CardHeader>
                    <CardTitle>Pipeline Steps</CardTitle>
                    <CardDescription>Timeline representing CI/CD pipeline stages</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <GitBranch class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Step 1</TimelineDate>
                                    <TimelineTitle>Source Checkout</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    <Badge variant="secondary">Completed</Badge>
                                    <p class="mt-2 text-sm text-muted-foreground">
                                        Source code checkout from repository
                                    </p>
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Package class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Step 2</TimelineDate>
                                    <TimelineTitle>Install Dependencies</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    <Badge variant="secondary">Completed</Badge>
                                    <p class="mt-2 text-sm text-muted-foreground">
                                        Installing project dependencies
                                    </p>
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Settings class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Step 3</TimelineDate>
                                    <TimelineTitle>Build</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    <Badge>Running</Badge>
                                    <p class="mt-2 text-sm text-muted-foreground">
                                        Building application artifacts
                                    </p>
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Rocket class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>Step 4</TimelineDate>
                                    <TimelineTitle>Deploy</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    <Badge variant="outline">Pending</Badge>
                                    <p class="mt-2 text-sm text-muted-foreground">
                                        Deploy to production environment
                                    </p>
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- Dot Indicators -->
            <Card>
                <CardHeader>
                    <CardTitle>Dot Indicators</CardTitle>
                    <CardDescription>Simple dot-style timeline indicators</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator class="h-3 w-3 rounded-full bg-primary" />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>10:00 AM</TimelineDate>
                                    <TimelineTitle>Meeting Started</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Daily standup meeting with the team.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator class="h-3 w-3 rounded-full bg-primary" />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>11:00 AM</TimelineDate>
                                    <TimelineTitle>Code Review</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Reviewing pull requests from the team.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator class="h-3 w-3 rounded-full bg-primary" />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>2:00 PM</TimelineDate>
                                    <TimelineTitle>Feature Development</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Working on new feature implementation.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- Horizontal Orientation -->
            <Card>
                <CardHeader>
                    <CardTitle>Horizontal Orientation</CardTitle>
                    <CardDescription>Timeline displayed horizontally</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline orientation="horizontal">
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Circle class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator orientation="horizontal" />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>2024</TimelineDate>
                                    <TimelineTitle>Start</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent class="pb-0"> Project kickoff </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Star class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator orientation="horizontal" />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>2025</TimelineDate>
                                    <TimelineTitle>Growth</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent class="pb-0"> Rapid expansion </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Zap class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator orientation="horizontal" />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>2026</TimelineDate>
                                    <TimelineTitle>Scale</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent class="pb-0"> Global reach </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Rocket class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator orientation="horizontal" />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>2027</TimelineDate>
                                    <TimelineTitle>Future</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent class="pb-0"> Next generation </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- Alternating Layout -->
            <Card>
                <CardHeader>
                    <CardTitle>Alternating Layout</CardTitle>
                    <CardDescription>Timeline with alternating content positions</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Circle class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>January 2024</TimelineDate>
                                    <TimelineTitle>Phase 1: Research</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Market research and competitor analysis completed.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Star class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>February 2024</TimelineDate>
                                    <TimelineTitle>Phase 2: Design</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Created wireframes and high-fidelity mockups.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Zap class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>March 2024</TimelineDate>
                                    <TimelineTitle>Phase 3: Development</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Built the application with modern technologies.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator>
                                    <Rocket class="size-4" />
                                </TimelineIndicator>
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader>
                                    <TimelineDate>April 2024</TimelineDate>
                                    <TimelineTitle>Phase 4: Launch</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Successfully launched to production environment.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>

            <!-- With Left-Aligned Dates -->
            <Card>
                <CardHeader>
                    <CardTitle>With Left-Aligned Dates</CardTitle>
                    <CardDescription>Timeline with dates positioned to the left</CardDescription>
                </CardHeader>
                <CardContent>
                    <Timeline>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader class="flex-row items-center gap-4">
                                    <TimelineDate class="min-w-[120px]"
                                        >March 15, 2024</TimelineDate
                                    >
                                    <TimelineTitle>Project Kickoff</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Initial project planning and team assembly.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader class="flex-row items-center gap-4">
                                    <TimelineDate class="min-w-[120px]"
                                        >April 20, 2024</TimelineDate
                                    >
                                    <TimelineTitle>Milestone 1</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Completed first major development milestone.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                        <TimelineItem>
                            <template #indicator>
                                <TimelineIndicator />
                            </template>
                            <template #separator>
                                <TimelineSeparator />
                            </template>
                            <template #header>
                                <TimelineHeader class="flex-row items-center gap-4">
                                    <TimelineDate class="min-w-[120px]">May 30, 2024</TimelineDate>
                                    <TimelineTitle>Milestone 2</TimelineTitle>
                                </TimelineHeader>
                            </template>
                            <template #content>
                                <TimelineContent>
                                    Achieved second development milestone.
                                </TimelineContent>
                            </template>
                        </TimelineItem>
                    </Timeline>
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
