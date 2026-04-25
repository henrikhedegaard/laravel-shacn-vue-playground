<script setup lang="ts">
import { ref } from "vue";
import { PinInput, PinInputGroup, PinInputSlot } from "@/components/ui/pin-input";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";

const pinValue = ref<string[]>([]);
const pin6 = ref<string[]>([]);
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Pin Input" description="Accessible pin input component for OTP and verification codes" show-back-link>
        <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>4-Digit Pin</CardTitle>
                        <CardDescription>Basic 4-digit pin input</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <PinInput v-model="pinValue" id="pin-4">
                            <PinInputGroup>
                                <PinInputSlot :index="0" />
                                <PinInputSlot :index="1" />
                                <PinInputSlot :index="2" />
                                <PinInputSlot :index="3" />
                            </PinInputGroup>
                        </PinInput>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>6-Digit Pin</CardTitle>
                        <CardDescription>OTP verification with 6 digits</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <PinInput v-model="pin6" id="pin-6">
                            <PinInputGroup>
                                <PinInputSlot :index="0" />
                                <PinInputSlot :index="1" />
                                <PinInputSlot :index="2" />
                                <PinInputSlot :index="3" />
                                <PinInputSlot :index="4" />
                                <PinInputSlot :index="5" />
                            </PinInputGroup>
                        </PinInput>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
