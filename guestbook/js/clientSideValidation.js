    document.getElementById("account-form").onsubmit = validate;

    function validate()
    {
        //alert("Validating");

        // Create a flag variable
        let valid = true;

        // Make all errors hidden
        let errors = document.getElementsByClassName("err");
        for (let i=0; i<errors.length; i++)
        {
            errors[i].style.visibility = "hidden";
        }


        // Check first name
        let first = document.getElementById("firstName").value;
        if (first == "")
        {
            let errFirst = document.getElementById("errFName");
            errFirst.style.visibility = "visible";
            valid = false;
        }
        // Check last name
        let last = document.getElementById("lastName").value;
        if (last == "")
        {
            let errLast = document.getElementById("errLName");
            errLast.style.visibility = "visible";
            valid = false;
        }
        // Check How we Met
        let met = document.getElementById("met").value;
        if (met == "")
        {
            let errMet = document.getElementById("errMet");
            errMet.style.visibility = "visible";
            valid = false;
        }
        // Check email
        const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        // If filled out or Mailing List checked
        // must be valid
        let email = document.getElementById("Email").value;
        let mailList = document.getElementById("mailList").checked;
        let countAts = 0;
        let countDots = 0;

        if (email != "" || mailList)
        {
            //let errEmail = document.getElementById("errEmail");
            //errEmail.style.visibility = "visible";
            //valid = false;

            for (let i = 0; i < email.length; i++)
            {
                if (email.charAt(i) == '@') {
                    countAts++;
                }
                if (email.charAt(i) == '.') {
                    countDots++;
                }
            }

            if (countAts != 1 || countDots < 1)
            {
                let errEmail = document.getElementById("errEmail");
                errEmail.style.visibility = "visible";
                valid = false;
            }
        }
        // Checked LinkedIn address
        // valid URL
        let linkedIn = document.getElementById("linkedIn").value;
        if (linkedIn != "")
        {
        if (!is_url(linkedIn))
            {
                let errLinkedIn = document.getElementById("errLinkedIn");
                errLinkedIn.style.visibility = "visible";
                valid = false;
            }
        }

        return valid;
    }

    // other functions
    function is_url(linkedIn)
    {
      regexp =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
            if (regexp.test(linkedIn))
            {
              return true;
            }
            else
            {
              return false;
            }
    }

    // E-mail format buttons visible when mailing list checked
     let formatHidden = document.getElementsByClassName("formatHidden");

         for (let i=0; i<formatHidden.length; i++)
         {
             formatHidden[i].style.visibility = "hidden";
         }

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

        for (let i=0; i<metOther.length; i++)
        {
            metOther[i].style.visibility = "hidden";
        }


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





