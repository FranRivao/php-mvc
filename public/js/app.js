// var session = window.localStorage.getItem('session');

// if(JSON.parse(session) == '1'){
//     const btn = $("#changeModeBtn");
    
//     var actualColor = window.localStorage.getItem('color');
    
//     if(JSON.parse(actualColor) == null){
//         window.localStorage.removeItem('color');
//         window.localStorage.setItem('color', '1');
//     }
//     else{
//         if(JSON.parse(actualColor) == 1 || JSON.parse(session) == null){
//             $("body").get(0).style.setProperty("--body-bg-color", "#BBC8BA");
//             $("body").get(0).style.setProperty("--nav-footer-bg-color", "#4d4fe080");
//             $("body").get(0).style.setProperty("--text-color", "black");
//             $("nav").removeClass("navbar-dark").addClass("navbar-light");
//             $(".bg-dark").removeClass("bg-dark").addClass("bg-light");
        
//             window.localStorage.removeItem('color');
//             window.localStorage.setItem('color', '1');
//         }
//         else{
//             $("body").get(0).style.setProperty("--body-bg-color", "rgb(51, 51, 51)");
//             $("body").get(0).style.setProperty("--nav-footer-bg-color", "#994de080");
//             $("body").get(0).style.setProperty("--text-color", "rgb(160, 160, 160)");
//             $("nav").removeClass("navbar-light").addClass("navbar-dark");
//             $(".bg-light").removeClass("bg-light").addClass("bg-dark");
        
//             window.localStorage.removeItem('color');
//             window.localStorage.setItem('color', '2');
//         }
//     }
    
    
//     btn.click(() => {
//         setTimeout(() => {
//             let actualColor = window.localStorage.getItem('color');
            
//             if(JSON.parse(actualColor) != null){
//                 if(JSON.parse(actualColor) == 1){
//                     $("body").get(0).style.setProperty("--body-bg-color", "rgb(51, 51, 51)");
//                     $("body").get(0).style.setProperty("--nav-footer-bg-color", "#994de080");
//                     $("body").get(0).style.setProperty("--text-color", "rgb(160, 160, 160)");
//                     $("nav").removeClass("navbar-light").addClass("navbar-dark");
//                     $(".bg-light").removeClass("bg-light").addClass("bg-dark");
                
//                     window.localStorage.removeItem('color');
//                     window.localStorage.setItem('color', '2');
//                 }
//                 else{
//                     $("body").get(0).style.setProperty("--body-bg-color", "#BBC8BA");
//                     $("body").get(0).style.setProperty("--nav-footer-bg-color", "#4d4fe080");
//                     $("body").get(0).style.setProperty("--text-color", "black");
//                     $("nav").removeClass("navbar-dark").addClass("navbar-light");
//                     $(".bg-dark").removeClass("bg-dark").addClass("bg-light");
                
//                     window.localStorage.removeItem('color');
//                     window.localStorage.setItem('color', '1');
//                 }
//             }
//         }, 1000)

//         btn.attr('id', 'changeModeBtn');
//     })
// }