/*
$(document).ready(function(){
  */  
function getDepartment(){
    var xmlHttp = new XMLHttpRequest();
    console.log("Got here 1");
    xmlHttp.onload = function(){
        if(xmlHttp.status == 200 && xmlHttp.readyState == 4)
            {
                var xmlDoc = xmlHttp.responseXML;
                console.dir(xmlDoc);
                var output = "<div class='cardHolder teachersDept'><br><br><ol>";
                console.dir(xmlDoc);
                console.log("Got here 2");
                var dept = xmlDoc.getElementsByTagName("department");
                console.dir(dept);
                for(var i=0; i< dept.length; i++)
                    {
                        console.log("Got here 3");
                        output+="<li>"+ dept[i].children[0].innerHTML + " teaches " + dept[i].children[1].innerHTML+" in "+dept[i].children[2].innerHTML+"</li>";
                    }
                output+="</ol></div>";
                $("#container3").empty();
                $("#container3").append(output);
            }
    };
  xmlHttp.open("GET","department.xml",true);
  xmlHttp.send();  
}



function getDept(){
    var xmlHttp = new XMLHttpRequest();
    console.log("Got here 1");
    xmlHttp.onload = function(){
        if(xmlHttp.status == 200 && xmlHttp.readyState == 4)
            {
                var xmlDoc = xmlHttp.responseXML;
                console.dir(xmlDoc);
                var output = "<div class='cardHolder teachersDept'><br><br><ol class='list-group'>";
                console.dir(xmlDoc);
                console.log("Got here 2");
                var dept = xmlDoc.getElementsByTagName("department");
                console.dir(dept);
                for(var i=0; i< dept.length; i++)
                    {
                        console.log("Got here 3");
                        output+='<li class="list-group-item list-group-item-secondary">'+ dept[i].children[0].innerHTML + " teaches " + dept[i].children[1].innerHTML+" in <span class='badge bg-primary rounded-pill'>"+dept[i].children[2].innerHTML+"</span></li>";
                    }
                output+="</ol></div>";
                $("#container3").empty();
                $("#container3").append(output);
            }
    };
  xmlHttp.open("GET","department.xml",true);
  xmlHttp.send();  
}
    /*
  
});
*/