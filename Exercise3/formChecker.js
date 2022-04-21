let form1 = document.querySelector('form')


form1.addEventListener('submit', (e) => {
    let inputs = document.querySelectorAll('input')
   
   
    if ((inputs[0].value == "" || inputs[1].value == "" )
        ||(!(inputs[2].checked && inputs[3].value != "" || inputs[4].checked  && inputs[5].value != ""|| inputs[6].checked && inputs[7].value != "")) ||
        (!(inputs[8].checked || inputs[9].checked || inputs[10].checked))
    ) {
        e.preventDefault()
        console.log('yep')
    }

    if (inputs[3].value < 0 || inputs[5].value < 0 || inputs[7].value < 0) e.preventDefault()

    if (!isEmail(inputs[0].value)) {
        e.preventDefault()
        console.log(
                'we here'
        )
    }
})

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }