(function($){window.highlightPartnerCategoryLogos=function(target){const categories=target.closest('.categories')
if(categories){categories.querySelectorAll('button').forEach(button=>button.classList.remove('active'))
target.classList.add('active')
const category=target.getAttribute('alt')
const container=document.querySelector('.logos')
if(container)container.querySelectorAll('.row a > img').forEach(logo=>logo.classList[(!category||(logo.getAttribute('alt')&&logo.getAttribute('alt').includes(category)))?'remove':'add']('disabled'))}}})(jQuery);