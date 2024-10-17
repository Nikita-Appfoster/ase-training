// let splitButton = document.querySelector(".button")
// splitButton.addEventListener("click", (e) => {
//     let splitNum = document.querySelectorAll("#split")

//     for (i = 0; i < splitNum.length; i++) {
//         let createDiv = document.createElement("div");
//         createDiv.appendChild(document.createTextNode(e))
//         document.querySelector(".button").appendChild(createDiv)

//     }


// }

// let inputNum=document.querySelector("#num")




// let splitTime=document.querySelector("#split")







// )


let splitButton = document.querySelector(".button")
splitButton.addEventListener("click", divCreation)

function divCreation() {
    let number = document.querySelector("#num").value;
    let splitCount = document.querySelector("#split").value;

    // console.log("button is clicked")
   
    let inputDiv = document.querySelector(".container-2");
    inputDiv.innerHTML=" "

    let messageDiv = document.createElement("div");
    messageDiv.classList.add("message"); 
   
   
    
         quotient=Math.floor(number/splitCount)
         remainder=(number % splitCount) 
        //  exactDiv=(quotient+remainder)+quotient+quotient;

        normalWidth=100;
        eachDivWidth=100/number;


    if (splitCount <= 0 || number<=0) {
       messageDiv.textContent="Please enter valid number!";
       inputDiv.appendChild(messageDiv)
    }
    else {
        for (let i = 0; i < splitCount; i++) {
            let createDiv = document.createElement('div');
            let divValue = i < remainder ? quotient + 1 : quotient;               
        createDiv.textContent = divValue;

        let widthPercentage = divValue * eachDivWidth;
        createDiv.style.width = `${widthPercentage}%`;


       
           

            let red = Math.floor(Math.random()
                * 255)
            let green = Math.floor(Math.random()
                * 255)

            let blue = Math.floor(Math.random()
                * 255)
            createDiv.style.backgroundColor = `rgb(${red},${green},${blue})`
           
            inputDiv.appendChild(createDiv)

        }
    }
}

