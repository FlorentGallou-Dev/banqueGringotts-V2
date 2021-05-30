/*------------------------------- VARS -------------------------------*/
let accountSelected = document.getElementById("accountSelected");

/*------------------------------- FUNCTIONS -------------------------------*/


/*------------------------------- EVENTS EXECUTIONS -------------------------------*/

accountSelected.addEventListener("change", function(){

    let nomComptes = ["comptecourant", "pel", "livreta"];
    let accountSelectedValue = accountSelected.value;
    accountSelectedValue = accountSelectedValue.replace(/\s+/g, '').toLowerCase();
    
    nomComptes.forEach(compte => {
        if (!document.getElementsByClassName(compte)[0].classList.contains("d-none")){
            document.getElementsByClassName(compte)[0].classList.toggle("d-none");
        }
        
        if(accountSelectedValue == compte) {
            document.getElementsByClassName(compte)[0].classList.toggle("d-none");
        }
    });
    
});