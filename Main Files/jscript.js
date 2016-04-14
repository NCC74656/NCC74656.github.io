// JavaScript File

function search(username, password) {
    var sId, sPin, uName;

    if (readdata(username, password)) {
        setCache(sID, sPin, uName)
        return true;
    }
    else {
        return false;
    }
}

//Taken from http://stackoverflow.com/questions/16630413/how-can-i-read-an-excel-file-with-javascript-without-activexobject
//Frankly you don't need ^, it's assumed that 99.999% of all your code is "taken" from StackOverflow. Tis the spirit of programming! :D
function readdata(x,y) {
    var xval = x;
    var yval = y;
    var yon = false;
    try {
        var excel = new ActiveXObject("Excel.Application");
        excel.Visible = false;
        var excel_file = excel.Workbooks.Open("\\Accountinfo.xlsx");// alert(excel_file.worksheets.count);
        var excel_sheet = excel_file.Worksheets("Sheet1");
        
        for(var i=0;i<100000;i++) //I don't like this. Could we change it up? If you want an infin. for loop, simply make it so.
        {
           var temp = excel_sheet.Cells(1,i).Value;
           
            if (temp == null) {
                break
            }
            else {
                
                var temp2 = excel_sheet.Cells(2,i).Value;
                if (x == temp && y == temp2){
                    yon = true;
                    break;
                }
            }
        }
    return yon;
    }
    catch (ex) {
        alert(ex);
    }
}

function readCashe() {
    var a = false;
    var b = 2010000;
    var c = "uName";
    var d = 1111;
    var all = [a, b, c, d];
    
    
    if (typeof(Storage) !== "undefined") {
        // Store
        localStorage.setItem("studentID", sID);
        localStorage.setItem("username", uName);
        localStorage.setItem("studentPin", spin);
        
        all[0] = document.getItemById("result").innerHTML = localStorage.getItem("loggedIn");
        all[1] = document.getItemById("result").innerHTML = localStorage.getItem("studentID");
        all[2] = document.getItemById("result").innerHTML = localStorage.getItem("username");
        all[3] = document.getItemById("result").innerHTML = localStorage.getItem("studentPin");
    }
    else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }
    
    
    return all;
}


function setCache(studentID, studentPin, userName) {
    var sID = studentID;
    var uName = userName;
    var sPin = studentPin;
    
    
    
    window.sessionStorage;
    if (typeof(Storage) !== "undefined") {
        // Store
        localStorage.setItem("loggedIn", true);
        localStorage.setItem("studentID", sID);
        localStorage.setItem("username", uName);
        localStorage.setItem("studentPin", spin);
    }
    else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }
}