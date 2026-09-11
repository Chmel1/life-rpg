import Alpine from 'alpinejs';
import * as bootstrap from 'bootstrap';

window.Alpine = Alpine;
window.bootstrap = bootstrap;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const toastElements = document.querySelectorAll('.notification-toast');

    toastElements.forEach((toastElement) => {
        const toast = new bootstrap.Toast(toastElement);

        toast.show();
    });
});