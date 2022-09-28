const addAgentWindow = document.querySelector('#addAgentWindow');
const addAgentBtn = document.querySelector('#addAgentBtn');
const closeAgentwindowBtn = document.querySelector('#closeAgentwindowBtn')
const cancelAgentwindowBtn = document.querySelector('#cancelAgentwindowBtn')

addAgentBtn.addEventListener('click', ()=>{
    if(addAgentWindow.classList.contains('hidden'))
    {
        addAgentWindow.classList.remove('hidden')
    }
    else
    {
        addAgentWindow.classList.add('hidden')
    }
});

closeAgentwindowBtn.addEventListener('click', ()=>{
    addAgentWindow.classList.add('hidden')
});

cancelAgentwindowBtn.addEventListener('click', ()=>{
    addAgentWindow.classList.add('hidden')
})
