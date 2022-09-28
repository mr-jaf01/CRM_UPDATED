const addClientWindow = document.querySelector('#addClientWindow');
const addClientBtn = document.querySelector('#addClientBtn');
const closeClientwindowBtn = document.querySelector('#closeClientwindowBtn')
const cancelClientwindowBtn = document.querySelector('#cancelClientwindowBtn')

addClientBtn.addEventListener('click', ()=>{
    if(addClientWindow.classList.contains('hidden'))
    {
        addClientWindow.classList.remove('hidden')
    }
    else
    {
        addClientBtn.classList.add('hidden')
    }
});

closeClientwindowBtn.addEventListener('click', ()=>{
    addClientWindow.classList.add('hidden')
});

cancelClientwindowBtn.addEventListener('click', ()=>{
    addClientWindow.classList.add('hidden')
})
