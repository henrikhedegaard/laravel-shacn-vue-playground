import { ref } from "vue";

const open = ref(false);

export function useCommandPalette() {
    const toggle = (): void => {
        open.value = !open.value;
    };

    const close = (): void => {
        open.value = false;
    };

    const show = (): void => {
        open.value = true;
    };

    return {
        close,
        open,
        show,
        toggle,
    };
}
