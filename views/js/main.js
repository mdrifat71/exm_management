
const button = document.querySelector('#finish');

button.addEventListener('click',function (){
    let ans; //it will store the user answered value
    const form = document.querySelectorAll('form');
    form.forEach((item) =>{
        let question_id = item.querySelector('h2').id; //grab the question id
        let inputList = item.querySelectorAll('input');
        inputList.forEach((input) => {
            if(input.checked)
                ans = input.value //store the value which input is selected by user
            
        })

        //ajax 
        //check if the answer is correct or not
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              console.log(this.responseText)
            }
          };
        xhttp.open("get", "http://localhost:8000/exm_management/examine/check?question_id="+question_id+'&ans='+ans, true);
        xhttp.send();
        //ajax end
    })
});

