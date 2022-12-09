  let buttonNav = document.getElementById("buttonNav");
    let navVertical = document.getElementById('navVertical');
    let navVertical2 = document.getElementById('navVertical2');
    let navIndexVertical = document.getElementById('navIndexVertical');
    let bodyIndex = document.getElementById('bodyIndex');
    let verticalNav = document.getElementById('verticalNav');
    buttonNav.onclick = function(){
        if(navVertical.classList.contains("displayBlock")){
            navVertical.classList.remove("displayBlock");
            navVertical.classList.add("displayNone");
            navVertical2.classList.remove("displayNone");
            navVertical2.classList.add("displayBlock");
            navIndexVertical.classList.remove("col-2");
            navIndexVertical.classList.add("col-1");
            bodyIndex.classList.remove("col-10");
            bodyIndex.classList.add("col-11");
            verticalNav.classList.remove("verticalNav");
            verticalNav.classList.add("verticalNav2");
        }else{
            navVertical.classList.remove("displayNone");
            navVertical.classList.add("displayBlock");
            navVertical2.classList.remove("displayBlock");
            navVertical2.classList.add("displayNone");
            navIndexVertical.classList.remove("col-1");
            navIndexVertical.classList.add("col-2");
            bodyIndex.classList.remove("col-11");
            bodyIndex.classList.add("col-10");
            verticalNav.classList.remove("verticalNav2");
            verticalNav.classList.add("verticalNav");

        }
    }
