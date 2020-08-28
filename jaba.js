
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

// used to ensure no null entries will be sent by the form 
function check(){
    // var errOut;
    // if(document.getElementsByName('from').value)

    // var str = document.getElementsByName('from');
    // var w = str.options[str.selectedIndex].value;
    // window.alert(w);

    var str = '';

    var from = document.forms["search"]["from"].value;
    var dest = document.forms["search"]["destination"].value;
    if(from == dest){
        str = str.concat("-Select two different airports \n");
        // window.alert("Select two different airports \n asdasd");
        // return false;
    }

    var depart_d = document.forms["search"]["departure_d"].value;
    var depart_t = document.forms["search"]["departure_t"].value;

    if(depart_d == ''){
        str = str.concat("-Input department date \n");
    }
    if(depart_t == ''){
        str = str.concat("-Input department time \n");
    }

    if(str != ''){
        window.alert(str);
        return false;
    }
}

// HELPER FUNCTION (makes values less than 10, a two digit string (i.e. 01, 09, 05...))
function appendZeroIfSingleDigit(x){
    return (x < 10 ? '0':'') + x;
}

// Automatically sets TIME and DATE (current with offset) in department fields
function setDepartment() {
    var time = new Date();
    window.alert(time.getDate()+ 3);
    // Sets date on department
    var dayOffset = (time.getDate() + 3) % 30;
    if(dayOffset == 0) // helps making 0 value to 1 (i.e. 2020-02-00 doesnt make sense but 2020-02-01 is)
        dayOffset = 1;
    var correctJSMonth = appendZeroIfSingleDigit(time.getMonth() + 1); // JS january is zero so need to offset
    // Date format YYYY-MM-DD
    document.getElementById("Dpt_d").value = time.getFullYear() +'-' + correctJSMonth  +'-' + appendZeroIfSingleDigit(dayOffset);
    //window.alert(time.getFullYear() +'-' + correctJSMonth  +'-' + appendZeroIfSingleDigit(dayOffset));
    // document.getElementById('wew').innerHTML = time.getDate() +'v.s.'  time.getDay();
    
    // Sets time on department
    var timeOffset =  ((time.getHours() + 3) % 24); // idk why i offset but yah it offsets by 3hrs
    // time format HH:MM
    document.getElementById("Dpt_t").value =  appendZeroIfSingleDigit(timeOffset) + ':00';
    // document.getElementById('wew').innerHTML = appendZeroIfSingleDigit(timeOffset) + ':00';
    // document.getElementById("Dpt_t").value = (time.getHours() < 10 ? '0':'') + time.getHours() + ':' + (time.getMinutes() < 10 ? '0':'') + time.getMinutes(); // sets current time to element 'dpt_t'   
}

// iframe fit to content function
// a solution from https://stackoverflow.com/questions/34023681/resizing-an-iframe-to-fit-contents-by-obtaining-the-scrollheight-javascript
function resizeIFrame(id_no){
    var sHeight, frame;

    frame = document.getElementById("frame" +id_no);
    frame.style.height = '0px';
    sHeight = document.getElementById('frame' +id_no).contentWindow.document.body.scrollHeight + 80;
    frame.style.height = sHeight + 'px';
}

function noBtnSubmit(name_number){
    form = document.getElementById("formwew");
    form.target = "framename" +name_number;
    form.action = "book.php";
    form.submit();
}

// DEVELOPEMENT FUNCTIONS (ONLY USED FOR QUICK DEVELOPMENT OR DEBUGGING)
function setAll(){
    document.getElementById("CEB").setAttribute("selected", "0");
    document.getElementById("CEB").innerHTML = "wewew";
    document.getElementById("MNL").setAttribute("selected", "0");
    document.getElementById("Dpt_d").value = "2020-02-10";
    document.getElementById("Dpt_t").value =  "12:00:00";
}

function wew(){
    document.getElementById("toggled_dropdown").classList.toggle("dropdown_when_clicked");
}
