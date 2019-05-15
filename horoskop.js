var date = document.querySelector('#birthday');
var input = document.querySelector('.zodiac');

function makeRequest(url, method, formData, callback){

    var headers;
    
    if(method == "GET" || !formData){
     headers = {
         method: method
        };
    } else {
        headers = {
            method: method,
            body: formData
        };
    }
    
    fetch(url, headers).then((data) => {
        console.log('ygu')
        return data.json();
    }).then((result)=>{
        callback(result);
    }).catch((err)=>{
        console.log(err);
    });
}

// Adds to sessions and checks with the database
function saveHoroscope(){
    var userDate = document.getElementById("birthDay").value;
    var newDate = userDate.slice(5);
    var chosenDate = '';
    
    if(newDate <= "01-19"){
        chosenDate = ("2020-") + newDate;
    } else {
        chosenDate = ("2019-") + newDate;
    }
    
    console.log("1")
     var formData = new FormData();
     formData.set("newHoroskope", chosenDate);
     formData.set("collection", "horoskope");

     makeRequest("addHoroskop.php", "POST", formData, (response)=> {
         console.log(response);
         makeRequest.send(fromData);
         viewHoroskop();
     });

 }

 
    function updateHoroscope() {

        var userDate = document.getElementById("birthDay").value;
        var newDate = userDate.slice(5);
    
        if (newDate <= "01/19") {
            var chosenDate = ("2020-") + newDate;
        } else {
            var chosenDate = ("2019-") + newDate;
        }
    
        var formData = new FormData();
        formData.set("newHoroscope", chosenDate);
        formData.set("action", "update");
    
        makeRequest("updateHoroscope.php", "POST", formData, (data) => {
                console.log(data);
                viewHoroscope();
        });
    }
    

 

 function viewHoroscope() {
    var url = "viewHoroscope.php";
    makeRequest(url, "GET", undefined, (data) => {
        if(data != undefined) {
            var zodiacs = (data[0].horoscopeSign);
            var text = document.getElementById('zodiac');
            text.innerHTML = `Your zodiac is: ${zodiac}`;
        } 
    });
}

function deleteHoroscope(){
    makeRequest("deleteHoroskop.php", "DELETE", undefined, (data)=> {
        console.log(data);
    });
    var text = document.getElementById('zodiac');
    text.innerHTML = "";
}

