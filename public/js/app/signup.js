const personal_screen = document.querySelector('#personal')
const industry_screen = document.querySelector('#industry')
const jobrole_screen = document.querySelector('#job_role')
const companyname_screen = document.querySelector('#company_name')
const companysize_screen = document.querySelector('#company_size')
const companydomain_screen = document.querySelector('#company_domain')

const industryBtn = document.querySelector('#industryBtn')
const joberoleBtn = document.querySelector('#joberoleBtn')
const cnameBtn = document.querySelector('#cnameBtn')
const csizeBtn = document.querySelector('#csizeBtn')
const cdomainBtn = document.querySelector('#cdomainBtn')


const backBtn_personal = document.querySelector('#backBtn-personal')
const backBtn_industry = document.querySelector('#backBtn-industry')
const backBtn_job_role = document.querySelector('#backBtn-job_role')
const backBtn_company_name = document.querySelector('#backBtn-company_name')
const backBtn_company_size = document.querySelector('#backBtn-company_size')
const progressBar = document.querySelector('#progressBar')

const step = new URLSearchParams(window.location.search)

// Next step event handling
industryBtn.addEventListener('click', ()=>{
    step.set('step', 'industry')
    personal_screen.classList.add('hidden')
    industry_screen.classList.remove('hidden')
    progressBar.classList.remove('hidden')
    progressBar.value += 17;
});

joberoleBtn.addEventListener('click', ()=>{
    step.set('step', 'job_role')
    industry_screen.classList.add('hidden')
    jobrole_screen.classList.remove('hidden')
    progressBar.value += 17;
});

cnameBtn.addEventListener('click', ()=>{
    step.set('step', 'company_name')
    jobrole_screen.classList.add('hidden')
    companyname_screen.classList.remove('hidden')
    progressBar.value += 17;
});

csizeBtn.addEventListener('click', ()=>{
    step.set('step', 'company_size')
    companyname_screen.classList.add('hidden')
    companysize_screen.classList.remove('hidden')
    progressBar.value += 17;
});

cdomainBtn.addEventListener('click', ()=>{
    step.set('step', 'company_domain')
    companysize_screen.classList.add('hidden')
    companydomain_screen.classList.remove('hidden')
    progressBar.value += 17;
});

// back button event handling //
backBtn_personal.addEventListener('click', ()=>{
    personal_screen.classList.remove('hidden')
    industry_screen.classList.add('hidden')
    progressBar.classList.add('hidden')
    progressBar.value -= 17;
});

backBtn_industry.addEventListener('click', ()=>{
    industry_screen.classList.remove('hidden')
    jobrole_screen.classList.add('hidden')
    progressBar.value -= 17;
});

backBtn_job_role.addEventListener('click', ()=>{
    jobrole_screen.classList.remove('hidden')
    companyname_screen.classList.add('hidden')
    progressBar.value -= 17;
});

backBtn_company_name.addEventListener('click', ()=>{
    companyname_screen.classList.remove('hidden')
    companysize_screen.classList.add('hidden')
    progressBar.value -= 17;
});

backBtn_company_size.addEventListener('click', ()=>{
    companysize_screen.classList.remove('hidden')
    companydomain_screen.classList.add('hidden')
    progressBar.value -= 17;
});


/*
The below code set value to the
hidden field of company size in signup
stage
*/
const companySize1 = document.querySelector('#companySize1')
const companySize2 = document.querySelector('#companySize2')
const companySize3 = document.querySelector('#companySize3')
const companySize4 = document.querySelector('#companySize4')
const companySize5 = document.querySelector('#companySize5')
const companySize6 = document.querySelector('#companySize6')
const companySize7 = document.querySelector('#companySize7')
const companySize8 = document.querySelector('#companySize8')
const companySize9 = document.querySelector('#companySize9')

const setCompanySize = document.querySelector('#setCompanySize')

companySize1.addEventListener('click', ()=>{
    setCompanySize.value = "1";
});

companySize2.addEventListener('click', ()=>{
    setCompanySize.value = "2-5";
});

companySize3.addEventListener('click', ()=>{
    setCompanySize.value = "6-10";
});

companySize4.addEventListener('click', ()=>{
    setCompanySize.value = "11-25";
});

companySize5.addEventListener('click', ()=>{
    setCompanySize.value = "26-50";
});

companySize6.addEventListener('click', ()=>{
    setCompanySize.value = "51-200";
});

companySize7.addEventListener('click', ()=>{
    setCompanySize.value = "201-1000";
});

companySize8.addEventListener('click', ()=>{
    setCompanySize.value = "1001-10000";
});

companySize9.addEventListener('click', ()=>{
    setCompanySize.value = "10001 and above";
});

/* End of Company Size value set  */
