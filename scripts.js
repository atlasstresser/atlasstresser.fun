// FAQ toggle functionality
document.querySelectorAll('.faq-item h3').forEach((faqHeader) => {
    faqHeader.addEventListener('click', () => {
        faqHeader.nextElementSibling.style.display = 
            faqHeader.nextElementSibling.style.display === 'block' ? 'none' : 'block';
    });
});
