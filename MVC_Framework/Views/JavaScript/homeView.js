var radio1 = document.querySelector('#radio1');
var radio2 = document.querySelector('#radio2');
var radio3 = document.querySelector('#radio3');
var radio4 = document.querySelector('#radio4');
var radio5 = document.querySelector('#radio5');

const interval = setInterval(() =>{
    ForwardMove();
}, 3000);

var ForwardMoveInverval;
var BackwardMoveInterval;

function ForwardMove()
{
    if (radio1.checked == true)
    {
        radio2.checked = true;
    }

    else if (radio2.checked == true)
    {
        radio3.checked = true;
    }

    else if (radio3.checked == true)
    {
        radio4.checked = true;
    }

    else if (radio4.checked == true)
    {
        radio5.checked = true;
    }

    else if (radio5.checked == true)
    {
        clearInterval(interval);
        clearInterval(ForwardMoveInverval);
        BackwardMoveInterval = setInterval(() => {
            BackwardMove();
        }, 3000);
    }
}

function BackwardMove()
{
    if (radio5.checked == true)
    {
        radio4.checked = true;
    }

    else if (radio4.checked == true)
    {
        radio3.checked = true;
    }

    else if (radio3.checked == true)
    {
        radio2.checked = true;
    }

    else if (radio2.checked == true)
    {
        radio1.checked = true;
    }

    else if (radio1.checked == true)
    {
        clearInterval(BackwardMoveInterval);
        ForwardMoveInverval = setInterval(() => {
            ForwardMove();
        }, 3000);
    }
}
