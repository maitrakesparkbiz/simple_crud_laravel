<html>

<head>
  <title>Job Application Form</title>
  <style>
    fieldset {
      background-color: #c1b9a3;
    }

    body {
      background-color: #cccccc;
    }

    h1 {
      text-align: center;
      font-family: Cursive;
      font-size: xxx-large;
      font-weight: bolder;
    }

    div {
      display: none;
    }
  </style>
</head>

<body onload="country()">
  <h1 style="text-align: center">Job Application Form</h1>
  <form action="/insertJobApp" method="post">
    @csrf
    <div id="basic">
      <fieldset>
        <legend><b>Basic Details</b></legend>
        <button type="button" onclick="basic_next()">NEXT </button>
        <table cellspacing="10" align="center">
          <tr>
            <td>
              <label for="firstname">First Name:</label>
            </td>
            <td>
              <input type="text" name="fname" id="firstname" />
              <p style="color: red;" id="firstname_error"></p>
            </td>

            <td>
              <label for="lastname">Last Name:</label>
            </td>
            <td>
              <input type="text" name="lname" id="lastname" />
              <p style="color: red;" id="lastname_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="designation">Designation:</label>
            </td>
            <td>
              <input type="text" name="designation" id="designation" />
              <p style="color: red;" id="designation_error"></p>
            </td>

            <td>
              <label for="addr1">Address Line 1:</label>
            </td>
            <td>
              <input type="text" name="addr1" id="addr1" />
              <p style="color: red;" id="addr1_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="email">Email:</label>
            </td>
            <td>
              <input type="text" name="email" id="email" />
              <p style="color: red;" id="eamil_error"></p>
            </td>

            <td>
              <label for="addr2">Address Line 2:</label>
            </td>
            <td>
              <input type="text" name="addr2" id="addr2" />
              <p style="color: red;" id="addr2_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="phone">Phone Number:</label>
            </td>
            <td>
              <input type="text" name="phone" id="phone" />
              <p style="color: red;" id="phone_error"></p>
            </td>


            <td>
              <label for="zip">Zip Code: </label>
            </td>
            <td>
              <input type="text" name="zip" id="zip" />
              <p style="color: red;" id="zip_error"></p>
            </td>
          </tr>

          <tr>
            <td rowspan="2">
              <label for="gender">Gender:</label>
            </td>
            <td rowspan="2">
              <input type="radio" id="gender" name="gender" checked value="male" /> Male
              <input type="radio" id="gender" name="gender" value="female" /> Female
              <p style="color: red;" id="gender_error"></p>
            </td>


            <td>
              <label for="county">County: </label>
            </td>
            <td>
              <select name="country_id" id="country" onchange="view_state()">
                <option value="selected" selected disabled>Select</option>
                @foreach($counties as $data)
                <option value="{{$data->id}}">{{$data->country_name}}</option>

                @endforeach
              </select>
              <p style="color: red;" id="country_error"></p>

            </td>
          </tr>

          <tr>
            <td>
              <label for="state">State: </label>
            </td>
            <td>
              <select name="state_id" id="state" onchange="view_city()">
                <option value="selected" selected disabled>Select</option>

              </select>
              <p style="color: red;" id="state_error"></p>
            </td>
          </tr>

          <tr>
            <td>
              <label for="materialStatus">Material status:</label>
            </td>
            <td>
              <select name="material_status" id="materialStatus">
                <option value="select" selected disabled>Select</option>
                <option value="single">Single</option>
                <option value="married">Maried</option>
              </select>
              <p style="color: red;" id="status_error"></p>

            </td>
            <td>
              <label for="City">City: </label>
            </td>
            <td>
              <select name="city_id" id="city">
                <option value="select" selected disabled>Select</option>

              </select>
              <p style="color: red;" id="city_error"></p>

            </td>

          </tr>
          <tr>
            <td>
              <label for="dob">Date of Birth:</label>
            </td>
            <td>
              <input type="date" name="dob" id="dob" />
              <p style="color: red;" id="dob_error"></p>

            </td>
          </tr>
        </table>
      </fieldset>
    </div>
    <br /><br />
    <div id="education">
      <fieldset>
        <legend><b>Education Details</b></legend>
        <table cellspacing="10" id="eductaionTable" align="center">
          <button type="button" onclick="basic_back()">BACK </button>
          <button type="button" onclick="edu_next()">NEXT </button>
          <tr id="edu1">
            <td>
              <label for="courseName1">Course: </label>
              <select name="edu[0][option_id]" id="edu[0][option_id]">
                <option value="select" selected disabled>Select</option>
                @foreach($course as $c_data)
                <option value="{{$c_data->id}}">{{$c_data->name}}</option>
                @endforeach


              </select>
              <p style="color: red;" id="course_error0"></p>

            </td>

            <td>
              <label for="universityName1">University:</label>
              <input type="text" name="edu[0][university]" id="edu[0][university]" />
              <p style="color: red;" id="uniname_error0"></p>

            </td>

            <td>
              <label for="passingYear1">Passing Year: </label>
              <input type="text" name="edu[0][passing_year]" id="edu[0][passing_year]" />
              <p style="color: red;" id="year_error0"></p>

            </td>

            <td>
              <label for="percentage1">Percentage: </label>
              <input type="text" name="edu[0][percentage]" id="edu[0][percentage]" />
              <p style="color: red;" id="percentage_error0"></p>

            </td>

            <!-- remove button -->
            <td colspan="2">
              <input type="button" value="-" name="removeRow1" id="removeRow1" onclick="onRemoveRow('edu1')" />
            </td>
          </tr>
        </table>

        <!-- add button -->
        <table cellspacing="10" align="right">
          <tr>
            <td>
              <input type="button" value="Add Row" name="addRow" id="addRow" onclick="onAddEduRow()" />
            </td>
          </tr>
        </table>
      </fieldset>
    </div>
    <br /><br />
    <div id="work">
      <fieldset>
        <legend><b>Work Experience</b></legend>
        <button type="button" onclick="edu_back()">BACK </button>
        <button type="button" onclick="work_next()">NEXT </button>
        <table id="workExTable" cellspacing="10" align="center">
          <tr id="wx1">
            <td>
              <label for="companyName1">Comapny Name:</label>
              <input type="text" name="work[0][company]" id="work[0][company]" />
              <p style="color: red;" id="company_error0"></p>

            </td>

            <td>
              <label for="designation1">Designation:</label>
              <input type="text" name="work[0][designation]" id="work[0][designation]" />
              <p style="color: red;" id="designation_error0"></p>

            </td>

            <td>
              <label for="from1">From:</label>
              <input type="date" name="work[0][from_date]" id="work[0][from_date]" />
              <p style="color: red;" id="from_error0"></p>

            </td>

            <td>
              <label for="to1">To:</label>
              <input type="date" name="work[0][to_date]" id="work[0][to_date]" />
              <p style="color: red;" id="to_error0"></p>

            </td>

            <!-- remove button -->
            <td colspan="2">
              <input type="button" value="-" name="removeRow1" id="removeRow1" onclick="onRemoveRow('wx1')" />
            </td>
          </tr>
        </table>

        <!-- add button -->
        <table cellspacing="10" align="right">
          <tr>
            <td>
              <input type="button" value="Add Row" name="addRow" id="addRow" onclick="onAddwxRow()" />
            </td>
          </tr>
        </table>
      </fieldset>
    </div>
    <br /><br />
    <div id="combo">
      <table align="center">

        <tr>
          <td>
            <fieldset>
              <legend><b>Language Known</b></legend>
              <button type="button" onclick="work_back()">BACK </button>
              <button type="button" onclick="reff_next()">NEXT </button>

              <table id="lanTable" cellspacing="10" align="center">
                <tr id="lan1">
                  <td>
                    <select name="lang[0][option_id]" id="lang[0][option_id]">
                      <option value="lan_select" selected disabled>
                        Select
                      </option>
                      @foreach($lang as $l_data)
                      <option value="{{$l_data->id}}">{{$l_data->name}}</option>
                      @endforeach

                    </select>
                    <p style="color: red;" id="language_error0"></p>

                  </td>

                  <td>
                    <input type="checkbox" name="lang[0][read]" id="lang[0][read]" value="1" />Read
                    <input type="checkbox" name="lang[0][write]" id="lang[0][write]" value="1" />Write
                    <input type="checkbox" name="lang[0][speak]" id="lang[0][speak]" value="1" />Speak
                    <p style="color: red;" id="known_error0"></p>

                  </td>

                  <!-- remove button -->
                  <td colspan="2">
                    <input type="button" value="-" name="removeRow1" id="removeRow1" onclick="onRemoveRow('lan1')" />
                  </td>
                </tr>
              </table>

              <!-- add button -->
              <table cellspacing="10" align="right">
                <tr>
                  <td>
                    <input type="button" value="Add Row" name="addRow" id="addRow" onclick="onAddLanRow()" />
                  </td>
                </tr>
              </table>
            </fieldset>
          </td>

          <td>
            <fieldset>
              <legend><b>Technology Known</b></legend>
              <table cellspacing="10" align="center" id="techTable">
                <tr id="tech1">
                  <td>
                    <select name="tech[0][option_id]" id="tech[0][option_id]">
                      <option value="select1" selected disabled>Select</option>
                      @foreach($tech as $t_data)
                      <option value="{{$t_data->id}}">{{$t_data->name}}</option>
                      @endforeach

                    </select>
                  </td>

                  <td>
                    <input type="radio" name="tech[0][status]" id="tech[0][status]" value="beginner"> Beginer
                    <input type="radio" name="tech[0][status]" id="tech[0][status]" value="mediocre"> Mediocre
                    <input type="radio" name="tech[0][status]" id="tech[0][status]" value="expert"> Expert
                  </td>

                  <!-- remove button -->
                  <td colspan="2">
                    <input type="button" value="-" name="removeRow1" id="removeRow1" onclick="onRemoveRow('tech1')" />
                  </td>
                </tr>
              </table>

              <!-- add button -->
              <table cellspacing="10" align="right">
                <tr>
                  <td>
                    <input type="button" value="Add Row" name="addRow" id="addRow" onclick="onAddTechRow()" />
                  </td>
                </tr>
              </table>
            </fieldset>
          </td>
        </tr>

      </table>
    </div>
    <br /><br />
    <div id="reff">
      <fieldset>
        <legend><b>References</b></legend>
        <button type="button" onclick="reff_back()">BACK </button>
        <button type="button" onclick="pref_next()">NEXT </button>

        <table cellspacing="10" id="refTable" align="center">
          <tr id="ref1">
            <td>
              <label for="refName">Name:</label>
              <input type="text" name="ref[0][name]" id="ref[0][name]" />
              <p style="color: red;" id="refname0"></p>

            </td>

            <td>
              <label for="refcontact">Contact Number:</label>
              <input type="tel" name="ref[0][contact_no]" id="ref[0][contact_no]" />
              <p style="color: red;" id="refcontact0"></p>

            </td>

            <td>
              <label for="refRelation">Relation:</label>
              <input type="text" name="ref[0][relation]" id="ref[0][relation]" />
              <p style="color: red;" id="refrealtion0"></p>

            </td>

            <!-- remove button -->
            <td colspan="2">
              <input type="button" value="-" name="removeRow1" id="removeRow1" onclick="onRemoveRow('ref1')" />
            </td>
          </tr>
        </table>

        <!-- add row button -->
        <table cellspacing="10" align="right">
          <tr>
            <td>
              <input type="button" value="Add Row" name="addRow" id="addRow" onclick="onAddRefRow()" />
            </td>
          </tr>
        </table>
      </fieldset>
    </div>
    <br /><br />
    <div id="location">
      <fieldset>
        <legend><b>Preference</b></legend>
        <button type="button" onclick="pref_back()">BACK </button>

        <table cellspacing="10" align="center">
          <tr>
            <td rowspan="4">
              <label for="location">Preferred Location:</label>
            </td>

            <td rowspan="4">
              <select name="location[]" id="location" multiple>
                <option value="select" selected disabled>Select</option>
                @foreach($location as $location_data)
                <option value="{{$location_data->id}}">{{$location_data->name}}</option>
                @endforeach


              </select>
              <p style="color: red;" id="location"></p>

            </td>

            <td>
              <label for="noticePeriod">Notice Period:</label>
            </td>

            <td>
              <input type="text" name="notice_period" id="noticePeriod" placeholder="in Months" />
              <p style="color: red;" id="notice_error"></p>

            </td>

            <td rowspan="4">
              <label for="department">Department:</label>
            </td>

            <td rowspan="4">
              <select name="department" id="department">
                <option value="select" selected disabled>Select</option>
                <option value="ba">BA</option>
                <option value="bde">BDE</option>
                <option value="dev">Development</option>
                <option value="hr">HR</option>
                <option value="marketing">Marketing</option>
              </select>
              <p style="color: red;" id="dept_error"></p>

            </td>
          </tr>

          <tr>
            <td>
              <label for="currentCTC">Current CTC:</label>
            </td>

            <td>
              <input type="text" name="current_ctc" id="currentCTC" />
              <p style="color: red;" id="currect_error"></p>

            </td>
          </tr>

          <tr>
            <td>
              <label for="expectedCTC">Expected CTC:</label>
            </td>

            <td>
              <input type="text" name="exp_ctc" id="expectedCTC" />
              <p style="color: red;" id="expected_error"></p>

            </td>
          </tr>

          <tr>
            <td>
              <label for="resume">Upload Resume:</label>
            </td>

            <td>
              <input type="file" name="resume" id="resume" />
            </td>
          </tr>
        </table>
      </fieldset>
      <br /><br />
    </div>

    <table cellspacing="10" align="center">
      <tr>
        <td>
          <input type="submit" name="submit" id="" value="submit" />
        </td>
      </tr>
    </table>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    async function country() {
      var basic = document.getElementById("basic");
      basic.style.display = "block";



      /*   fetch('../job_app/include/country.php')
        .then(response => response.text())
        .then(data => {
         display=data;
          const myArray = data.split("~~");
          console.log(myArray);
          document.getElementById('state').innerHTML="<option value='selected' selected disabled>Select</option>";
          document.getElementById('city').innerHTML="<option value='selected' selected disabled>Select</option>";
          for (let i = 0; i < myArray.length-1; i+=2) {
            let select= document.getElementById('country')
            var opt = document.createElement('option');
            opt.value = myArray[i]
            opt.innerHTML = myArray[i+1]
            select.appendChild(opt);
                
          }

        }) */


    }

    async function view_state() {
      var e = document.getElementById('country');
      var optionSelectedText = e.options[e.selectedIndex].value;
      console.log(optionSelectedText);
      document.getElementById('city').innerHTML = "<option value='selected' selected disabled>Select</option>";
      document.getElementById('state').innerHTML = "<option value='selected' selected disabled>Select</option>";




      $.ajax({url: "/find/state/" + optionSelectedText, success: function(result){
        for (let i = 0; i <= result.length - 1; i++) {
          let select = document.getElementById('state')
          var opt = document.createElement('option');
          opt.value = result[i]['id']
          opt.innerHTML = result[i]['state_name']
          select.appendChild(opt);

            }
      }});
      
    }



    


    async function view_city() {
      var e = document.getElementById('state');
      var optionSelectedText = e.options[e.selectedIndex].value;
      console.log(optionSelectedText);
      document.getElementById('city').innerHTML = "<option value='selected' selected disabled>Select</option>";

      $.ajax({url: "/find/city/" + optionSelectedText, success: function(result){
        console.log(result);
        for (let i = 0; i <= result.length; i++) {
            let select = document.getElementById('city')
            var opt = document.createElement('option');
            opt.value = result[i]['id']
            opt.innerHTML = result[i]['city_name']
            select.appendChild(opt);

          }
      }});


    }

    async function update(country, state, city) {
      var basic = document.getElementById("basic");
      basic.style.display = "block";

      console.log("update");

      const cyr = await country_update(country)

      setTimeout(() => {
        state_update(state, country);

      }, 300);


      setTimeout(() => {
        city_update(city)
      }, 600);

    }


    async function country_update(country) {
      var val;
      fetch('../job_app/include/country.php')
        .then(response => response.text())
        .then(data => {
          display = data;
          const myArray = data.split("~~");
          console.log(myArray);


          for (let i = 0; i < myArray.length - 1; i += 2) {
            let select = document.getElementById('country')
            var opt = document.createElement('option');
            opt.value = myArray[i]
            opt.innerHTML = myArray[i + 1]
            select.appendChild(opt);
            if (parseInt(country) == myArray[i]) {
              val = i / 2
            }

          }
          document.getElementById('country').selectedIndex = val;
        })


    }

    async function state_update(state, country) {
      var val;
      var e = document.getElementById('country');
      var optionSelectedText = e.options[e.selectedIndex].value;
      console.log(optionSelectedText);


      fetch('../job_app/include/state.php?ctry=' + country)
        .then(response => response.text())
        .then(data => {
          display = data;
          const myArray = data.split("~~");

          console.log(myArray);
          for (let i = 0; i < myArray.length - 1; i += 2) {
            let select = document.getElementById('state')
            var opt = document.createElement('option');
            opt.value = myArray[i]
            opt.innerHTML = myArray[i + 1]
            select.appendChild(opt);
            if (parseInt(state) == myArray[i]) {
              val = i / 2
            }


          }
          document.getElementById('state').selectedIndex = val;
        })
    }

    async function city_update(city) {
      var val;
      var e = document.getElementById('state');
      var optionSelectedText = e.options[e.selectedIndex].value;
      console.log(optionSelectedText);


      fetch('../job_app/include/city.php?state=' + optionSelectedText)
        .then(response => response.text())
        .then(data => {
          display = data;
          const myArray = data.split("~~");

          console.log(myArray);
          for (let i = 0; i < myArray.length - 1; i += 2) {
            let select = document.getElementById('city')
            var opt = document.createElement('option');
            opt.value = myArray[i]
            opt.innerHTML = myArray[i + 1]
            select.appendChild(opt);
            if (parseInt(city) == myArray[i]) {
              val = i / 2;
            }

          }
          console.log(val);
          document.getElementById('city').selectedIndex = val;
        })
    }

    function basic_next() {
      var fname = document.getElementById("firstname").value;
      let cnt = 0;
      var lname = document.getElementById("lastname").value;
      var designation = document.getElementById("designation").value;
      var email = document.getElementById("email").value;
      var city = document.getElementById("city").value;
      var zip = document.getElementById("zip").value;
      var addr1 = document.getElementById("addr1").value;
      var addr2 = document.getElementById("addr2").value;

      var phone = document.getElementById("phone").value;
      var gender = document.getElementById("gender").value;
      var country = document.getElementById("country").value;
      var state = document.getElementById("state").value;
      var materialStatus = document.getElementById("materialStatus").value;
      var dob = document.getElementById("dob").value;







      var nameptr = /^[a-zA-Z\s]*$/;

      var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var zipptr = /^[1-9]{1}[0-9]{5}$/
      var addr = /^[a-zA-Z\s1-9]{0,200}$/
      var phoneptr = /^[1-9]{1}[0-9]{9}$/
      var desptr = /^[a-zA-Z\s1-9]*$/;


      if (!fname.match(nameptr) || fname == "") {
        // document.getElementById("firstname_error").innerHTML="First name only consists of alpha numeric number";
        document.getElementById("firstname_error").innerHTML = " Invalid First name";
        cnt++;

      }
      if (!lname.match(nameptr) || fname == "") {
        document.getElementById("lastname_error").innerHTML = " Invalid Last name";


        cnt++;

      }
      if (!designation.match(desptr) || designation == "") {
        document.getElementById("designation_error").innerHTML = " Invalid Designation name";
        cnt++;

      }
      if (!addr1.match(addr) || addr1 == "") {
        document.getElementById("addr1_error").innerHTML = " Invalid address 1";
        cnt++;

      }
      if (!email.match(emailformat)) {
        document.getElementById("eamil_error").innerHTML = " Invalid Email";

        cnt++;

      }

      if (!addr2.match(addr) || addr2 == "") {
        document.getElementById("addr2_error").innerHTML = " Invalid address 2";

        cnt++;

      }
      if (!city.match(desptr)) {
        document.getElementById("firstname_error").innerHTML = " Invalid ";

        cnt++;

      }
      if (!phone.match(phoneptr)) {
        document.getElementById("phone_error").innerHTML = " Invalid Phone No.";

        cnt++;

      }
      if (!zip.match(zipptr)) {
        document.getElementById("zip_error").innerHTML = " Invalid Zip Code";

        cnt++;

      }

      if (gender == "") {
        document.getElementById("gender_error").innerHTML = "Invalid Gender Please Select One Gender";

        cnt++;

      }
      /*  
       if(country=="selected")
       {
         document.getElementById("country_error").innerHTML="Invalid Country Please Select One Country";
       
         cnt++;

       }

       if(state=="selected")
       {
         document.getElementById("state_error").innerHTML=" Invalid State Please Select One State ";
       
         cnt++;

       }
       if(city=="selected")
       {
         document.getElementById("city_error").innerHTML=" Invalid City Please Select One City ";
       
         cnt++;

       }*/
      if (materialStatus == "select") {
        document.getElementById("status_error").innerHTML = " Invalid Material status Please Select one option";

        cnt++;

      }
      if (dob == "") {
        document.getElementById("dob_error").innerHTML = " Invalid Date of Birth";

        cnt++;

      }



      if (cnt == 0) {
        document.getElementById("basic").style.display = 'none';
        document.getElementById("education").style.display = 'block'
      }

    }

    function basic_back() {
      document.getElementById("basic").style.display = 'block';
      document.getElementById("education").style.display = 'none'

    }

    function edu_next() {

      var rows_count = document.getElementById('eductaionTable').getElementsByTagName('tr');

      let cnt = 0;




      var uniptr = /^[a-zA-Z\s]*$/;
      var uniyearptr = /^[1-9]{1}[0-9]{3}$/;
      var uniperptr = /^[0-9]{2}[.][0-9]{2}$/;




      for (i = 0; i < rows_count.length; i++) {


        var course = "edu[" + i + "][option_id]";
        var course_error = "course_error" + i;
        var uniname_error = "uniname_error" + i;
        var year_error = "year_error" + i;
        var percentage_error = "percentage_error" + i;

        var str = "edu[" + i + "][university]";
        var str1 = "edu[" + i + "][passing_year]";
        var str2 = "edu[" + i + "][percentage]";

        var coursename = document.getElementById(course).value;
        var uni = document.getElementById(str).value;
        var uniyear = document.getElementById(str1).value;
        var uniper = document.getElementById(str2).value;
        let number = eval(i + 1)
        console.log(coursename);
        if (coursename == "select") {

          document.getElementById(course_error).innerHTML = " Invalid Course Name Please Select on course";

          cnt++;

        } else {
          document.getElementById(course_error).innerHTML = "";

        }

        if (!uni.match(uniptr) || uni == "") {
          document.getElementById(uniname_error).innerHTML = " Invalid Name";


          cnt++;

        } else {
          document.getElementById(uniname_error).innerHTML = "";

        }

        if (!uniyear.match(uniyearptr)) {
          document.getElementById(year_error).innerHTML = " Invalid Year";


          cnt++;

        } else {
          document.getElementById(year_error).innerHTML = "";

        }
        if (!uniper.match(uniperptr)) {
          document.getElementById(percentage_error).innerHTML = " Invalid percentage";


          cnt++;

        } else {
          document.getElementById(percentage_error).innerHTML = "";
        }

      }

      if (cnt == 0) {
        document.getElementById("education").style.display = 'none';
        document.getElementById("work").style.display = 'block'
      }


    }

    function edu_back() {
      document.getElementById("education").style.display = 'block';
      document.getElementById("work").style.display = 'none'

    }

    function work_next() {

      var rows_count1 = document.getElementById('workExTable').getElementsByTagName('tr');





      var dateptr = /^[1-9]{4}[-][0-9]{2}[-][0-9]{2}$/;

      var desptr = /^[a-zA-Z\s]*$/;


      for (i = 0; i < rows_count1.length; i++) {
        var str2 = "work[" + i + "][company]";
        var str3 = "work[" + i + "][designation]"
        var str1 = "work[" + i + "][from_date]";
        var str = "work[" + i + "][to_date]"
        var company = "company_error" + i;
        var des = "designation_error" + i;
        var from = "from_error" + i;
        var to = "to_error" + i;

        var todate = document.getElementById(str).value;
        var fromdate = document.getElementById(str1).value;
        var compname = document.getElementById(str2).value;
        var desname = document.getElementById(str3).value;
        let number = eval(i + 1)
        var cnt = 0;

        if (!compname.match(desptr) || compname == "") {

          document.getElementById(company).innerHTML = " Invalid Company Name";

          cnt++;

        } else {
          document.getElementById(company).innerHTML = "";

        }
        if (!desname.match(desptr) || desname == "") {

          document.getElementById(des).innerHTML = " Invalid Designation Name";
          cnt++;

        } else {
          document.getElementById(des).innerHTML = "";

        }
        if (todate == "") {
          //todate =new Date(todate);

          //if(!todate.match(dateptr) )
          //{

          document.getElementById(to).innerHTML = "Invalid To Date";

          cnt++;

          //}
        } else {
          document.getElementById(to).innerHTML = "";

        }
        /*     else
            {
              alert(" "+number+" to date false")
              cnt++;

            } */

        if (fromdate == "") {
          //fromdate =new Date(fromdate);

          //if(!fromdate.match(dateptr) )
          //{

          document.getElementById(from).innerHTML = "Invalid From Date";

          cnt++;

          //}
        } else {
          document.getElementById(from).innerHTML = "";

        }
        /*     else
            {
              alert(" "+number+" from date false")
              cnt++;

            } */
      }

      if (cnt == 0) {
        document.getElementById("work").style.display = 'none';
        document.getElementById("combo").style.display = 'block'
      }





    }

    function work_back() {
      document.getElementById("work").style.display = 'block';
      document.getElementById("combo").style.display = 'none'

    }

    function reff_next() {
      var rows_count3 = document.getElementById('lanTable').getElementsByTagName('tr');

      for (i = 0; i < rows_count3.length; i++) {
        var cnt1 = 0;
        var cnt2 = 0;
        var cnt3 = 0;
        var str = "lang[" + i + "][option_id]";
        var str1 = "lang[" + i + "][read]";
        var str2 = "lang[" + i + "][write]";
        var str3 = "lang[" + i + "][speak]";
        var e = document.getElementById(str);
        var optionSelectedText = e.options[e.selectedIndex].value;
        var cnt = 0;
        var lang_select = "language_error" + i;
        var checkbox_select = "known_error" + i;

        var read = document.getElementById(str1);
        var write = document.getElementById(str2);
        var speak = document.getElementById(str3);

        if (optionSelectedText == "lan_select") {

          document.getElementById(lang_select).innerHTML = "Please select a language";

          cnt++;
        } else {
          if (read.checked == false && write.checked == false && speak.checked == false) {

            document.getElementById(checkbox_select).innerHTML = "Need to select one Check Box";

            cnt++;
          }
        }
      }
      if (cnt == 0) {
        document.getElementById("combo").style.display = 'none';
        document.getElementById("reff").style.display = 'block'
      }


    }

    function reff_back() {
      document.getElementById("combo").style.display = 'block';
      document.getElementById("reff").style.display = 'none'

    }

    function pref_next() {
      var rows_count2 = document.getElementById('refTable').getElementsByTagName('tr');
      var nameptr = /^[a-zA-Z\s]*$/;
      var contact = /^[+]{1}[0-9]*$/;
      var desptr = /^[a-zA-Z\s1-9]*$/;
      let cnt = 0;

      for (i = 0; i < rows_count2.length; i++) {
        var str = "ref[" + i + "][name]";
        var str1 = "ref[" + i + "][contact_no]";
        var str2 = "ref[" + i + "][relation]";
        var refname_error = "refname" + i
        var refcontact_error = "refcontact" + i
        var refrealtion_error = "refrealtion" + i
        var name = document.getElementById(str).value;
        var refcontact = document.getElementById(str1).value;
        var relation = document.getElementById(str2).value;
        let number = eval(i + 1);

        if (!name.match(nameptr) || name == "") {

          document.getElementById(refname_error).innerHTML = "Invalid Name";
          cnt++;

        } else {
          document.getElementById(refname_error).innerHTML = "";

        }

        if (!refcontact.match(contact) || refcontact == "") {

          document.getElementById(refcontact_error).innerHTML = "Invalid Contact No.";
          cnt++;

        } else {
          document.getElementById(refcontact_error).innerHTML = "";

        }
        if (!relation.match(desptr) || relation == "") {

          document.getElementById(refrealtion_error).innerHTML = "Invaild Relation";
          cnt++;

        } else {
          document.getElementById(refrealtion_error).innerHTML = "";

        }

      }
      if (cnt == 0) {
        console.log("location");
        document.getElementById("reff").style.display = 'none';
        document.getElementById("location").style.display = 'block'
      }



    }

    function pref_back() {
      document.getElementById("reff").style.display = 'block';
      document.getElementById("location").style.display = 'none'
    }

    //--------------------js for row add
    function onAddEduRow() {
      let table = document.getElementById("eductaionTable");
      var edu_counter = document.getElementById('eductaionTable').getElementsByTagName('tr').length;
      console.log(edu_counter)
      let row = table.insertRow();
      row.id = "edu" + edu_counter;

      let cell1 = row.insertCell();
      let cell2 = row.insertCell();
      let cell3 = row.insertCell();
      let cell4 = row.insertCell();
      let cell5 = row.insertCell();

      cell1.innerHTML =
        "<label for='courseName" +
        edu_counter +
        "'>Course: </label> <select name=edu[" + edu_counter + "][option_id] id='edu[" + edu_counter + "][option_id]'>" +
        "<option value='select' selected disabled>Select</option> <option value='1'>SSC</option> <option value='2'>HSC</option> <option value='3'>Bachelors</option> <option value='4'>Masters</option> </select > <p style='color: red;' id='course_error" + edu_counter + "'></p>";
      cell2.innerHTML =
        "<label for='universityName" +
        edu_counter +
        "'>University</label>" +
        "<input type='text' name=edu[" + edu_counter + "][university]  id='edu[" + edu_counter + "][university]'><p style='color: red;' id='uniname_error" + edu_counter + "'></p>";
      cell3.innerHTML =
        "<label for='passingYear" +
        edu_counter +
        "'>Passing Year: </label>" +
        "<input type='text' name=edu[" + edu_counter + "][passing_year]  id='edu[" + edu_counter + "][passing_year]'><p style='color: red;' id='year_error" + edu_counter + "'></p>";
      cell4.innerHTML =
        "<label for='percentage" +
        edu_counter +
        "'>Percentage: </label>" +
        "<input type='text' name=edu[" + edu_counter + "][percentage]  id='edu[" + edu_counter + "][percentage]'> <p style='color: red;' id='percentage_error" + edu_counter + "'></p>";
      cell5.innerHTML =
        "<input type='button' value='-' name='removeRow" +
        edu_counter +
        "' id='removeRow" +
        edu_counter +
        "' onclick=onRemoveRow('edu" +
        edu_counter +
        "')>";

      edu_counter = edu_counter + 1;
    }

    function onAddwxRow() {
      let table = document.getElementById("workExTable");
      var wx_counter = document.getElementById('workExTable').getElementsByTagName('tr').length;
      let row = table.insertRow();
      row.id = "wx" + wx_counter;

      let cell1 = row.insertCell();
      let cell2 = row.insertCell();
      let cell3 = row.insertCell();
      let cell4 = row.insertCell();
      let cell5 = row.insertCell();


      cell1.innerHTML =
        "<label for='designation" +
        wx_counter +
        "'>Comapny Name:</label> <input type='text' name='work[" + wx_counter + "][company]' id='work[" + wx_counter + "][company]" + "'>    <p style='color: red;' id='company_error" + wx_counter + "'></p>";
      cell2.innerHTML =
        "<label for='designation" +
        wx_counter +
        "'>Designation:</label> <input type='text' name='work[" + wx_counter + "][designation]' id='work[" + wx_counter + "][designation]" + "'><p style='color: red;' id='designation_error" + wx_counter + "'></p>";
      cell3.innerHTML =
        "<label for='from" +
        "'>From:</label> <input type='date' name='work[" + wx_counter + "][from_date]' id='work[" + wx_counter + "][from_date]" + "'> <p style='color: red;' id='from_error" + wx_counter + "'></p>";
      cell4.innerHTML =
        "<label for='to" +
        wx_counter +
        "'>To:</label> <input type='date' name='work[" + wx_counter + "][to_date]' id='work[" + wx_counter + "][to_date]" + "'> <p style='color: red;' id='to_error0" + wx_counter + "'></p>";
      cell5.innerHTML =
        "<input type='button' value='-' name='removeRow" +
        wx_counter +
        "' id='removeRow" +
        wx_counter +
        "' onclick=onRemoveRow('wx" +
        wx_counter +
        "')>";

      wx_counter = wx_counter + 1;
    }

    function onAddLanRow() {
      let table = document.getElementById("lanTable");
      var lan_counter = document.getElementById('lanTable').getElementsByTagName('tr').length;
      let row = table.insertRow();
      row.id = "lan" + lan_counter;

      let cell1 = row.insertCell();
      let cell2 = row.insertCell();
      let cell3 = row.insertCell();

      cell1.innerHTML =
        "<select name='lang[" + lan_counter + "][option_id]' id='lang[" + lan_counter + "][option_id]'>" +
        "<option value='lan_select'" +
        "selected disabled>Select</option>" +
        "<option value='5'" +
        ">english</option>" +
        "<option value='9'" +
        ">hindi</option>" +
        "<option value='13'" +
        ">gujarati</option>" +
        "</select> <p style='color: red;' id='language_error" + lan_counter + "'></p>";
      cell2.innerHTML =
        "<input type='checkbox'  name='lang[" + lan_counter + "][read]'  id='lang[" + lan_counter + "][read]'  value='1' >Read " +
        "<input type='checkbox' name='lang[" + lan_counter + "][write]'  id='lang[" + lan_counter + "][write]''   value='1' >Write " +
        "<input type = 'checkbox' name = 'lang[" + lan_counter + "][speak]' id='lang[" + lan_counter + "][speak]' value='1' >Speak  <p style='color: red;' id='known_error" + lan_counter + "'></p> ";
      cell3.innerHTML =
        "<input type='button' value='-' name='removeRow" +
        lan_counter +
        "' id='removeRow" +
        lan_counter +
        "' onclick=onRemoveRow('lan" +
        lan_counter +
        "')>";

      lan_counter = lan_counter + 1;
    }

    function onAddTechRow() {
      let table = document.getElementById("techTable");
      var tech_counter = document.getElementById('techTable').getElementsByTagName('tr').length;
      let row = table.insertRow();
      row.id = "tech" + tech_counter;

      let cell1 = row.insertCell();
      let cell2 = row.insertCell();
      let cell3 = row.insertCell();

      cell1.innerHTML =
        "<select name='tech[" + tech_counter + "][option_id]' id='tech[" + tech_counter + "][option_id]'>" +
        "<option value='select" +
        tech_counter +
        "' selected disabled>Select</option>" +
        " <option value='javascript'>JavaScript</option>" +
        "<option value='php'>PHP</option>" +
        " <option value='nodejs'>NodeJS</option>" +
        "<option value='Python'>Python</option>" +
        "</select>";
      cell2.innerHTML =
        "<input type='radio' name='tech[" + tech_counter + "][status]'    id=tech[" + tech_counter + "][status] value='beginer' /> Beginer" +
        "<input type='radio' name='tech[" + tech_counter + "][status]'  id=tech[" + tech_counter + "][status] value='mediocre'/> Mediocre" +
        "<input type='radio' name='tech[" + tech_counter + "][status]'  id=tech[" + tech_counter + "][status]  value='expert' /> Expert";
      cell3.innerHTML =
        "<input type='button' value= '-' name='removeRow" +
        tech_counter +
        "'  id='removeRow" +
        tech_counter +
        "' onclick=onRemoveRow('tech" +
        tech_counter +
        "') />";

      tech_counter = tech_counter + 1;
    }

    function onAddRefRow() {
      let table = document.getElementById("refTable");
      var ref_counter = document.getElementById('refTable').getElementsByTagName('tr').length;
      let row = table.insertRow();
      row.id = "ref" + ref_counter;

      let cell1 = row.insertCell();
      let cell2 = row.insertCell();
      let cell3 = row.insertCell();
      let cell4 = row.insertCell();

      cell1.innerHTML =
        "<label for='refName" +
        ref_counter +
        "'>Name:</label> <input type='text' name='ref[" + ref_counter + "][name]' id='ref[" + ref_counter + "][name]'> <p style='color: red;' id='refname" + ref_counter + "'></p>";
      cell2.innerHTML =
        "<label for='refcontact" +
        ref_counter +
        "'>Contact Number:</label> <input type='tel' name='ref[" + ref_counter + "][contact_no]' id='ref[" + ref_counter + "][contact_no]'> <p style='color: red;' id='refcontact" + ref_counter + "'></p>";
      cell3.innerHTML =
        "<label for='refRelation" +
        ref_counter +
        "'>Relation:</label> <input type='text' name='ref[" + ref_counter + "][relation]' id='ref[" + ref_counter + "][relation]'> <p style='color: red;' id='refrealtion" + ref_counter + "'></p>";
      cell4.innerHTML =
        "<td colspan='2'> <input type='button' value='-'' name='removeRow" +
        ref_counter +
        "' id='removeRow" +
        ref_counter +
        "' onclick=onRemoveRow('ref" +
        ref_counter +
        "')> </td>";

      ref_counter = ref_counter + 1;
    }

    function onRemoveRow(rowid) {
      if (confirm("Are you sure you want to delete record?") == true) {
        let row = document.getElementById(rowid);
        row.parentNode.removeChild(row);
      }
    }

    function submit_form() {
      var location = document.getElementById("location").value
      var current_CTC = document.getElementById("currentCTC").value

      var department = document.getElementById("department").value


      var expected_CTC = document.getElementById("expectedCTC").value
      var notice_Period = document.getElementById("noticePeriod").value
      var ctc = /^[0-9a-zA-Z.\s]*$/;
      var noticeptr = /^[0-9\s]*$/;
      console.log(location);
      /*   if(typeof(location)=="undefined")
        {
          alert("please select location") 
            return false;
            

        }
        else */
      if (!notice_Period.match(noticeptr) || notice_Period == "") {
        alert("false notice period")
        document.getElementById("notice_error").innerHTML = "Invalid Notice Period ";
        document.getElementById("currect_error").innerHTML = "";
        document.getElementById("expected_error").innerHTML = "";
        document.getElementById("dept_error").innerHTML = "";

        return false;

      } else if (!current_CTC.match(ctc) || current_CTC == "") {
        alert("false current ctc")
        document.getElementById("notice_error").innerHTML = "";
        document.getElementById("currect_error").innerHTML = "Invalid Current CTC";
        document.getElementById("expected_error").innerHTML = "";
        document.getElementById("dept_error").innerHTML = "";


        return false;

      } else if (!expected_CTC.match(ctc) || expected_CTC == "") {
        alert("false expected ctc")
        document.getElementById("notice_error").innerHTML = "";
        document.getElementById("currect_error").innerHTML = "";
        document.getElementById("expected_error").innerHTML = "Invalid Expected CTC";
        document.getElementById("dept_error").innerHTML = "";


        return false;

      } else if (department == "select") {
        alert("please select department")
        document.getElementById("notice_error").innerHTML = "";
        document.getElementById("currect_error").innerHTML = "";
        document.getElementById("expected_error").innerHTML = "";
        document.getElementById("dept_error").innerHTML = " Please select one department";


        return false;

      } else {
        return true;
      }


    }
  </script>

</body>

</html>