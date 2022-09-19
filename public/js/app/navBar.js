const client_link = document.querySelector('#client-link')
const clients_sub_nav = document.querySelector('#clients-sub-nav')

client_link.addEventListener('mouseout', ()=>{
    clients_sub_nav.classList.add('hidden')
    client_link.classList.remove('bg-gray-100')
});

client_link.addEventListener('mouseover', ()=>{
    clients_sub_nav.classList.remove('hidden')
    client_link.classList.add('bg-gray-100')
});



const conversation_link = document.querySelector('#conversation-link')
const conversation_sub_nav = document.querySelector('#conversation-sub-nav')

conversation_link.addEventListener('mouseout', ()=>{
        conversation_sub_nav.classList.add('hidden')
        conversation_link.classList.remove('bg-gray-100')
});

conversation_link.addEventListener('mouseover', ()=>{
    conversation_sub_nav.classList.remove('hidden')
    conversation_link.classList.add('bg-gray-100')
});



const marketing_link = document.querySelector('#marketing-link')
const marketing_sub_nav = document.querySelector('#marketing-sub-nav')

marketing_link.addEventListener('mouseout', ()=>{
        marketing_sub_nav.classList.add('hidden')
        marketing_link.classList.remove('bg-gray-100')
});

marketing_link.addEventListener('mouseover', ()=>{
    marketing_sub_nav.classList.remove('hidden')
    marketing_link.classList.add('bg-gray-100')
});


const sales_link = document.querySelector('#sales-link')
const sales_sub_nav = document.querySelector('#sales-sub-nav')

sales_link.addEventListener('mouseout', ()=>{
        sales_sub_nav.classList.add('hidden')
        sales_link.classList.remove('bg-gray-100')
});

sales_link.addEventListener('mouseover', ()=>{
    sales_sub_nav.classList.remove('hidden')
    sales_link.classList.add('bg-gray-100')
});


const services_link = document.querySelector('#services-link')
const serveices_sub_nav = document.querySelector('#serveices-sub-nav')

services_link.addEventListener('mouseout', ()=>{
        serveices_sub_nav.classList.add('hidden')
        services_link.classList.remove('bg-gray-100')
});

services_link.addEventListener('mouseover', ()=>{
    serveices_sub_nav.classList.remove('hidden')
    services_link.classList.add('bg-gray-100')
});


const report_link = document.querySelector('#report-link')
const report_sub_nav = document.querySelector('#report-sub-nav')

report_link.addEventListener('mouseout', ()=>{
        report_sub_nav.classList.add('hidden')
        report_link.classList.remove('bg-gray-100')
});

report_link.addEventListener('mouseover', ()=>{
    report_sub_nav.classList.remove('hidden')
    report_link.classList.add('bg-gray-100')
});




//User card Dropdown function
const user_dropdown_btn = document.querySelector('#user-dropdown')
const user_profile_card = document.querySelector('#user-profile')

user_dropdown_btn.addEventListener('click', ()=>{
    if(user_profile_card.classList.contains('hidden')){
        user_profile_card.classList.remove('hidden')
    }else{
        user_profile_card.classList.add('hidden')
    }
});

