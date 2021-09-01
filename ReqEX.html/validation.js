//two way to create RegExp
// var reg = /[a-z]/ig;

// var reg2 = new RegExp(/[a-z]/.'i');
const inputs = document.querySelectorAll('input');
const patterns = {
    telephone: /^[0-9]{9,11}$/
};

//validation function
function validate(field, regex){
    if(regex.test(field.value)){ //auto create class to any input elements 
        field.className = 'valid';//this will show valid
    }else{
        field.className ='invalid';//this will show invalid
    }
}
inputs.forEach((input)=>{
    input.addEventListener('keyup', (e) => {
        // console.log(e.target.attribute.name.value);
    validate(e.target, patterns[e.target.attributes.name.value])
    //e.target is keyboard events and patterns is an object that we created at the top
    });
});