// E-mail format buttons visible when mailing list checked

let formatHidden = document.getElementsByClassName("formatHidden");
let mailChecked = document.getElementById('mailList');

window.addEventListener("load", function () {
    if (mailChecked.checked == false)
    {
        //formatHidden = document.getElementsByClassName("formatHidden");

        for (let i = 0; i < formatHidden.length; i++)
        {
            formatHidden[i].style.visibility = "hidden";
        }
    }
    else
    {
        for (let i = 0; i < formatHidden.length; i++)
        {
            formatHidden[i].style.visibility = "visible";
        }
    }
})



document.addEventListener('input', function(event)
{
    if (event.target.id !=="mailList") return;
    if (event.target.checked)
    {
        for (let i=0; i<formatHidden.length; i++)
        {
            formatHidden[i].style.visibility = "visible";
        }
    }
    else
    {
        for (let i=0; i<formatHidden.length; i++)
        {
            formatHidden[i].style.visibility = "hidden";
        }
    }
});

// Other textbox visible only with "Other" is checked

let metOther = document.getElementsByClassName("otherHidden");
let met = document.getElementById("met");


window.addEventListener("load", function () {

    if(met.value == "Other (please specify)")
    {
        for (let i = 0; i < metOther.length; i++)
        {
            metOther[i].style.visibility = "visible";
        }
    } else
    {
        for (let i = 0; i < metOther.length; i++)
        {
            metOther[i].style.visibility = "hidden";
        }
    }
})


document.addEventListener('input', function(event)
{
    if (event.target.id !=="met") return;
    if (event.target.value == "Other (please specify)")
    {
        for (let i=0; i<metOther.length; i++)
        {
            metOther[i].style.visibility = "visible";
        }
    }
    else
    {
        for (let i=0; i<metOther.length; i++)
        {
            metOther[i].style.visibility = "hidden";
        }
    }
});