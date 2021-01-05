/*let inputs = document.querySelectorAll('.form-control');
let icons = document.querySelectorAll('i');  

icons[0].onclick = function()
{
    icons[0].style.display="none";
    icons[1].style.display="block";
    inputs[2].type="text";   
}

icons[1].onclick = function()
{
    icons[1].style.display="none";
    icons[0].style.display="block";
    inputs[2].type="password";   
}
for(let i =0;i<inputs.length;i++)
{
    inputs[i].onblur = function(e)
    {
        if(e.target.value<3)
        {
            e.target.nextElementSibling.style.display="block";
        }else
        {
            e.target.nextElementSibling.style.display="none";

        }
    }
}*/

/*
    task
    add
    clear
    ul
    li
    show li
    delete 
    done
    day 
    data

*/


let task = document.getElementById('task');
let add = document.getElementById('add');
let clear = document.getElementById('clear');
let ul = document.querySelector('ul');
let datatoday = new Date().toLocaleDateString()
 document.getElementById('data').innerHTML=datatoday;

var todaynum = new Date().getDate();
var days = ['monday','tuesday','wednesday','thurday','friday','sturday','sunday']
var day = days[todaynum]

document.getElementById('day').innerHTML=day



let counter = 0;
add.onclick = function()
{
    if(task.value)
    {   
        var li = document.createElement('li');
        li.setAttribute('id',counter);
        ul.appendChild(li)     
        task.value=" ";
        li.onclick = function()
        {
            li.classList.toggle('done');
        }
    }
}


clear.add =function()
{
   location.reload();
}

document.getElementById('h3').style.display="block";
