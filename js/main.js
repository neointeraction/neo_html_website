// Custom JavaScript goes here
console.log("main.js loaded");

document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqAnswer = question.nextElementSibling;
            
            // Toggle the 'active' class on the question
            question.classList.toggle('active');
            
            // Toggle the 'active' class on the answer and adjust max-height
            if (faqAnswer.classList.contains('active')) {
                faqAnswer.classList.remove('active');
                faqAnswer.style.maxHeight = null;
            } else {
                faqAnswer.classList.add('active');
                faqAnswer.style.maxHeight = faqAnswer.scrollHeight + "px";
            }
        });
    });
});
