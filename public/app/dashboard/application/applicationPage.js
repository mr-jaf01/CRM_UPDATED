const addApplicationWindow = document.querySelector('#addApplicationWindow');
const addApplicationBtn = document.querySelector('#addApplicationBtn');
const closeApplicationwindowBtn = document.querySelector('#closeApplicationwindowBtn')
const cancelApplicationwindowBtn = document.querySelector('#cancelApplicationwindowBtn')

addApplicationBtn.addEventListener('click', ()=>{
    if(addApplicationWindow.classList.contains('hidden'))
    {
        addApplicationWindow.classList.remove('hidden')
    }
    else
    {
        addApplicationWindow.classList.add('hidden')
    }
});

closeApplicationwindowBtn.addEventListener('click', ()=>{
    addApplicationWindow.classList.add('hidden')
});

cancelApplicationwindowBtn.addEventListener('click', ()=>{
    addApplicationWindow.classList.add('hidden')
})
