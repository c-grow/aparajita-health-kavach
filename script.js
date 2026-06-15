document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.mobile-menu');
    const navList = document.querySelector('nav ul');
    menuButton?.addEventListener('click', () => {
        navList?.classList.toggle('show');
    });
});

function showPopupModal(title, text, type = 'success') {
    // Check if modal already exists, remove it
    const existingModal = document.getElementById('customPopupModal');
    if (existingModal) existingModal.remove();

    // Create modal elements
    const modal = document.createElement('div');
    modal.id = 'customPopupModal';
    modal.className = `custom-popup-modal ${type}`;

    const modalContent = document.createElement('div');
    modalContent.className = 'custom-popup-content';

    const isSuccess = type === 'success';
    const iconClass = isSuccess ? 'fa-check-circle success' : 'fa-exclamation-circle error';
    const btnClass = isSuccess ? 'success-btn' : 'error-btn';

    modalContent.innerHTML = `
        <div class="custom-popup-icon"><i class="fas ${iconClass}"></i></div>
        <h3>${title}</h3>
        <p>${text}</p>
        <button class="custom-popup-close-btn ${btnClass}">Okay, Got it</button>
    `;

    modal.appendChild(modalContent);
    document.body.appendChild(modal);

    // Fade in
    setTimeout(() => {
        modal.classList.add('active');
    }, 10);

    // Close action
    const closeBtn = modalContent.querySelector('.custom-popup-close-btn');
    const closeModal = () => {
        modal.classList.remove('active');
        setTimeout(() => modal.remove(), 300);
    };

    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
}

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
                message.textContent = '';
                showPopupModal("Request Submitted", "Thank you! We have received your request. Our healthcare team will call you within 15 minutes.");
                form.reset();
            } else {
                const errorMsg = (data && data.error) ? data.error : 'Error submitting form. Please call us directly.';
                message.textContent = errorMsg;
                message.style.color = '#d7263d';
                showPopupModal("Submission Failed", errorMsg, "error");
            }
        } catch (error) {
            const errorMsg = 'Network error. Please check your connection or call us directly.';
            message.textContent = errorMsg;
            message.style.color = '#d7263d';
            showPopupModal("Network Error", errorMsg, "error");
        }

        setTimeout(() => { message.textContent = ''; }, 5000);
    });
}
