document.querySelector("#gp").addEventListener("click", function() {
    console.log("Grand parent")
}, false)

document.querySelector("#p").addEventListener("click", function() {
    console.log("parent")
}, false)

document.querySelector("#c").addEventListener("click", function() {
    console.log("child")
}, false)