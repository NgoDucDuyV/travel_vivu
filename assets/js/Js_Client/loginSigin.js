// checked
const checkkeds  = document.querySelectorAll('.checkpasswrod');
const passwordInputs = document.querySelectorAll('input[type="password"]');
if (checkkeds || passwordInputs) {
    function checkedPass(){
    passwordInputs.forEach(input => {
        if(this.checked){
            input.type = 'text';
        }else{
            input.type = 'password';
        }
    });
} 
checkkeds.forEach( el => {
    el.addEventListener('click', checkedPass);
});
}
// note Sigon

const notes = document.querySelector('.note');
const rectionSigins = document.querySelectorAll('.Hovernote');
if(notes && rectionSigins){

    function hovenote(){
        this.children[2].classList.add('Hovernote');
    }
    function nohovenote(){
        this.children[2].classList.remove('Hovernote');
    }
    rectionSigins.forEach(el => {
        el.addEventListener('mouseover', hovenote);
        el.addEventListener('mouseout', nohovenote);
    })

}