/*
*   ---- Ekmek Teknesi Veresiye Defteri App ----
*
* @author Can Delibas <candelibas00@gmail.com>
* 
* @blog candelibas.wordpress.com
* @git  github.com/candelibas
* 
*/

$(function(){

// add customer
$("form#add_customer button").click(function(){
    
    if($("input[name=musteri_adi]").val() == "")
    {
        alert("Müşteri adı girilmek zorunda!");
    }
    else
    {
        var values = $("form#add_customer").serialize();

        $.ajax({
            url:"musteri_ekle.php",
            dataType : "text",
            type: "POST",
            data: values,
            success:function(result){
                
                alert(result);
                
            }


        });
    }
    
    return false;
    
});


$("#add_veresiyeBtn").click(function(){
    
    if($("#veresiye_veri").val() == "")
    {
        alert("Bilgiler doğru formatta girilmek zorunda!");
    }
    else
    {
        var values = $("form#veresiye_ekle").serialize();

        $.ajax({
            url:"veresiye_ekle.php",
            dataType : "text",
            type: "POST",
            data: values,
            success:function(result){
                
                alert(result);
                
            }


        });
    }
    
    return false;
    
});


 // Capitalize first letter of name
 String.prototype.ucfirst = function()
 {
    return this.charAt(0).toUpperCase() + this.substr(1);
 }


// first of all check if browser supports webkitSpeechRecognition API
if (!('webkitSpeechRecognition' in window)) 
{
  console.log("Your browser doesn't support Web Speech API!Please install the latest version of Google Chrome");
} 
else // then fire!
{ 

  // let's create the object
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = false; // we want to end process when user stop for talking. NOTE: default value is "FALSE" 
  //recognition.interimResults = true; // providing feedback. NOTE: default value is "FALSE"
  recognition.lang = "tr-TR"; // user will talk Turkish so the language is "tr-TR"


  recognition.onstart = function() { 
    // animate the microphone graphic
    
    $("#start_img").attr("src", "img/mic-animate.gif");
  
  };
 


  recognition.onresult = function(event) {

    
    for (var i = event.resultIndex; i < event.results.length; i++) {

        if (event.results[i].isFinal) {
            $("textarea#veresiye_veri").val(event.results[i][0].transcript.ucfirst()); 
            $("#start_img").attr("src", "img/mic.gif");
        }
        else{
            $("textarea#veresiye_veri").val(event.results[i][0].transcript.ucfirst()); 
        }
        
    }
   };

  recognition.onerror = function(event) {
    console.log('Recognition error: ' + event.message);
  };


  
  
  $("#start_button").click(function(){
      
        recognition.start();
        
        return false;       
      
  });
  
  
  
  
  
  //recognition.onresult = function(event) { ... }
  //recognition.onerror = function(event) { ... }
  //recognition.onend = function() { ... }
  
}


});
