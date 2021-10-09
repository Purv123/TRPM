function handleCountDown(target){const{finishTime}=target.dataset
if(finishTime){let remainingSeconds=Math.floor((new Date(finishTime).getTime()-new Date().getTime())/1000)
let timer
const frequencies=[30,24,60,60]
function wipeOut(){removeInterval(timer)
const container=parent.closest('.count-down-container')
container.parentNode.removeChild(container)}
function calculateProgress(value,frequency){const radius=16.5
const percentage=value/frequency*100
const perimeter=Math.PI*radius*2
const length=perimeter*percentage/100
return `${length} ${perimeter-length}`}
function setValues(elements){const values=[Math.floor((remainingSeconds/60/60/24)),Math.floor((remainingSeconds/60/60)%24),Math.floor((remainingSeconds/60)%60),remainingSeconds%60]
elements.forEach((element,index)=>{element.querySelector('.value text').innerHTML=values[index]
element.querySelector('.value .progress').setAttribute('stroke-dasharray',calculateProgress(values[index],frequencies[index]))})}
if(remainingSeconds>0){const elements=Array.from(target.children)
timer=setInterval(()=>{setValues(elements)
remainingSeconds--},1000)}else wipeOut()}}
jQuery(document).ready(function(){const selector='.count-down'
document.querySelectorAll(selector).forEach(item=>handleCountDown(item))})