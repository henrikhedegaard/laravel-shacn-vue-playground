<script setup lang="ts">
import { ref } from "vue";
import PageLayout from "@/components/PageLayout.vue";
import { Button } from "@/components/ui/button";
import {
    Stepper,
    StepperDescription,
    StepperItem,
    StepperSeparator,
    StepperTitle,
    StepperTrigger,
} from "@/components/ui/stepper";

const activeStep = ref(1);
</script>

<template>
    <PageLayout title="Stepper" description="A step-by-step progress indicator" show-back-link>
        <div class="flex w-full justify-start p-6">
            <Stepper v-model="activeStep" orientation="horizontal" class="w-full max-w-md">
                <StepperItem
                    v-for="step in [1, 2, 3, 4]"
                    :key="step"
                    :step="step"
                    class="relative flex w-full flex-col items-center justify-center"
                >
                    <StepperTrigger
                        :class="
                            activeStep >= step
                                ? 'bg-primary text-primary-foreground'
                                : 'bg-muted text-muted-foreground'
                        "
                        class="flex h-10 w-10 items-center justify-center rounded-full border-2 transition-colors"
                    >
                        {{ step }}
                    </StepperTrigger>
                    <StepperSeparator
                        v-if="step !== 4"
                        :class="activeStep > step ? 'bg-primary' : 'bg-muted'"
                        class="absolute left-[calc(50%+20px)] top-[20px] h-[2px] w-[calc(100%-40px)] transition-colors"
                    />
                    <div class="mt-4 text-center">
                        <StepperTitle
                            :class="activeStep >= step ? 'text-primary' : 'text-muted-foreground'"
                            class="text-sm font-semibold transition-colors"
                        >
                            Step {{ step }}
                        </StepperTitle>
                        <StepperDescription
                            :class="activeStep >= step ? 'text-primary' : 'text-muted-foreground'"
                            class="text-xs transition-colors"
                        >
                            Description for step {{ step }}
                        </StepperDescription>
                    </div>
                </StepperItem>
            </Stepper>
        </div>
        <div class="flex gap-2 mt-4">
            <Button :disabled="activeStep === 1" @click="activeStep--" variant="outline">
                Previous
            </Button>
            <Button :disabled="activeStep === 4" @click="activeStep++"> Next </Button>
        </div>
    </PageLayout>
</template>
