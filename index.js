$('#submit').click(() => {
    $("#response").text("")

    const value01 = $('#value01').val()
    const value02 = $('#value02').val()

    $.ajax({
        method: "POST",
        url: "./index.php",
        data: { value01, value02 }

    }).done(data => {
        const response = $.parseJSON(data)
        imcTable(response.imc)
    })
})
$('#clear').click(() => {
    $('#value01').val('')
    $('#value02').val('')
    clearTable()
})

let responseField = document.getElementById('response')

const imcTable = (imc) => {

    clearTable()
    if (imc <= 1) {
        responseField.innerHTML = "invalid input";
        return
    }

    if (imc < 18.5) {
        document.getElementById('abaixo').classList.add('table-info')
    } else if (imc >= 18.5 && imc <= 25.9) {
        document.getElementById('normal').classList.add('table-success')
    } else if (imc >= 25 && imc <= 29.9) {
        document.getElementById('sobrepeso').classList.add('table-warning')
    } else if (imc >= 30 && imc <= 34.9) {
        document.getElementById('obesidadeI').classList.add('table-danger')
    } else if (imc >= 35 && imc <= 39.9) {
        document.getElementById('obesidadeII').classList.add('table-danger')
    } else {
        document.getElementById('morbida').classList.add('table-dark')
    }

    responseField.innerHTML = `Imc: ${imc}`
}

const clearTable = () => {
    const table = [...document.querySelectorAll('tr')]
    table.map(item => {
        item.removeAttribute('class')
    })

    responseField.innerHTML = ''
}
