
const modal = document.getElementById("addModal")
modal.addEventListener("shown.bs.modal",function (){
    const formSubmit = document.getElementById("add-form-submit")
    formSubmit.addEventListener("click",function (e){
        if(document.getElementById("add-name").value == ""){
            e.preventDefault()
            document.getElementById("name-warn").classList.remove("d-none")
        }else{
            document.getElementById("name-warn").classList.add("d-none")
        }

        if(document.getElementById("add-surname").value == ""){
            e.preventDefault()
            document.getElementById("surname-warn").classList.remove("d-none")
        }else{
            document.getElementById("surname-warn").classList.add("d-none")
        }

        if(document.getElementById("add-phone").value == ""){
            e.preventDefault()
            document.getElementById("phone-warn").classList.remove("d-none")
        }else{
            document.getElementById("phone-warn").classList.add("d-none")
        }

        if(document.getElementById("add-email").value == ""){
            e.preventDefault()
            document.getElementById("email-warn").classList.remove("d-none")
        }else{
            document.getElementById("email-warn").classList.add("d-none")
        }

        if(document.getElementById("add-gender").value == ""){
            e.preventDefault()
            document.getElementById("gender-warn").classList.remove("d-none")
        }else{
            document.getElementById("gender-warn").classList.add("d-none")
        }
    })
})


// const modal2 = document.getElementById("editModal")
// modal2.addEventListener("shown.bs.modal",function (){
//     const formSubmit = document.getElementById("edit-form-submit")
//     formSubmit.addEventListener("click",function (e){
//         if(document.getElementById("edit-name").value == ""){
//             e.preventDefault()
//             document.getElementById("edit-warn").classList.remove("d-none")
//         }else{
//             document.getElementById("edit-warn").classList.add("d-none")
//         }
//     })
// })

$('.delete-user').click(function(e){
    e.preventDefault() // Don't post the form, unless confirmed
    if (confirm('Are you sure?')) {
        // Post the form
        $(e.target).closest('form').submit() // Post the surrounding form
    }
});
