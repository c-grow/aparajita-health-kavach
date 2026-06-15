document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.mobile-menu');
    const navList = document.querySelector('nav ul');
    menuButton?.addEventListener('click', () => {
        navList?.classList.toggle('show');
    });
});

function handleAjaxForm(formId, messageId) {
    const form = document.getElementById(formId);
    const message = document.getElementById(messageId);
    if (!form || !message) return;

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        message.textContent = 'Sending...';
        message.style.color = '#1e3c72';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form)
            });
            const rawText = await response.text();
            let data = null;
            try { data = rawText ? JSON.parse(rawText) : null; } catch(e) {}

            if (data && data.ok) {
                message.textContent = 'Thank you! We will contact you soon.';
                message.style.color = '#18864b';
                form.reset();
            } else {
                message.textContent = (data && data.error) ? data.error : 'Error. Please call us directly.';
                message.style.color = '#d7263d';
            }
        } catch (error) {
            message.textContent = 'Network error. Try again.';
            message.style.color = '#d7263d';
        }

        setTimeout(() => { message.textContent = ''; }, 5000);
    });
}
