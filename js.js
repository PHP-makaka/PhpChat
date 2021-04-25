let body = "SSSS"
let dataobj = document.getElementById("formData")

function showHint(str) {
    // console.log(dataobj.name.value)
    sendRequest()
}

function sendRequest() {
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {
                username: dataobj.name.value,
                lastName: dataobj.lastName.value,
                password: dataobj.password.value
            },
            success: function (data) {
               console.log("Qwq",data);


            }
        })
    // return new Promise((res, rej) => {
    //     const xhr = new XMLHttpRequest
    //
    //     xhr.open(method, url)
    //     xhr.setRequestHeader('Content-Type', 'application/json')
    //     const params = "id_product=" + "aa"+ "&qty_product=" +"ss";
    //
    //     xhr.onload = () => {
    //         if (xhr.status >= 400) {
    //             rej(xhr.response)
    //         } else {
    //             res(xhr.response)
    //         }
    //     }
    //     xhr.onerror = () => {
    //         rej(xhr.response)
    //     }
    //
    //     xhr.send(params)
    // })


}

