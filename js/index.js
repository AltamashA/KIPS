$(document).ready(function () {
    var x = document.getElementById("one");
    var y = document.getElementById("two");
    x.style.display = "none";
    y.style.display = "none";
//    $("#candiSucess").hide();
//    $("#candiFail").hide();

    var fileId = 1; // used by the addFile() function to keep track of IDs
    $(function () {
        $("#additem").click(function () {
            fileId++;
            var str = '<div class=""><br><select class="form-control" id="prof';
            var string2 = '" style="color: grey"><option>Choose your Required kaarigar type</option><option value="Electrician">Electrician</option><option value="Plumber">Plumber</option><option value="A.C Technician"> A.C Technician</option><option value="Pipe Fitter">Pipe Fitter</option><option value="Carpenter"> Carpenter</option><option value="Wall Painter">Wall Painter</option><option value="Insulator">Insulator</option><option value="Ductman"> Ductman</option><option value="Tailor">Tailor</option><option value="Accountant Basic"> Accountant Basic</option><option value="Helper">Helper</option><option value="Crew member">Crew Member</option><option value="Cook"> Cook</option><option value="Foremen">Foremen</option></select><br></div><div class="pull-left"><input class="form-control" type="text"  id="q';
            var final = str + fileId + string2 + fileId + '"  placeholder="Quantity" required="" /></div>';
//            alert(final);
//            document.write(final);
            $(".dynamic").append(final);
        });
    });

    $("#searchBtn").click(function () {
        $("#spinner").show();
        var x = document.getElementById("table_filter").value;
        var str = 'SearchId.php?q=' + x;
        setTimeout(function () {
            $('#show').load(str);
            $("#spinner").hide();
        }, 2000);
    });

    $("#submitc").click(function () {
        var name = $("#namec").val();
        var email = $("#emailc").val();
        var age = $("#agec").val();
        var prof = $("#profc").val();
        var skill = $("#skillc").val();
        var uid = $("#aadhaarc").val();
        var phone = $("#phonec").val();
        var mail = $("#emailc").val();
        var perm = $("#permc").val();
        var loc = $("#placec").val();
        var sal = $("#salc").val();
        var add1 = $("#add1c").val();
        var add2 = $("#add2c").val();
        var add3 = $("#add3c").val();
        var pin = $("#pinc").val();
        if (name === '' || email === '' || phone === '') {
            alert("Kindly enter the required fields");
        } else {
// Returns successful data submission message when the entered information is stored in database.
            $.post("CandidateSubmit.php", {
                Name: name,
                Email: email,
                Age: age,
                Prof: prof,
                Skilled: skill,
                Uid: uid,
                Phone: phone,
                Permanent: perm,
                Place: loc,
                Sal: sal,
                Add1: add1,
                Add2: add2,
                Add3: add3,
                Pin: pin
            }, function (data, status) {
                $('#candiForm')[0].reset(); // To reset form fields
                $("#spinnerCand").show();
                setTimeout(function () {
                    $("#spinnerCand").hide();
                    //alert("status--------------------------"+status);
                    if (status == "success") {
                        //$("#candiSucess").show();
                        //alert("Congratulations Your have been reqistered");
                        var str ="CandidateMail.php?defaultMail="+Email;
                        $('#candiMailSucess').load(str);
                    } else {
                        //$("#candiFail").show();
                        alert("Sorry But some error occured");
                    }
                }, 6000);
            });
        }
    });

    $("#orgSubmit").click(function () {
        var Org_name = $("#nameo").val();
        var O_Email = $("#emailo").val();
        var O_Phone = $("#phoneo").val();
        var P_name = $("#pnameo").val();
        var O_Loc = $("#loco").val();
        var Day = $("#dayo").val();
        var prof1 = $("#prof1").val();
        var q1 = $("#q1").val();
        //
        var prof2 = $("#prof2").val();
        var q2 = $("#q2").val();
        //
        var prof3 = $("#prof3").val();
        var q3 = $("#q3").val();//
        var prof4 = $("#prof4").val();
        var q4 = $("#q4").val();//
        var prof5 = $("#prof5").val();
        var q5 = $("#q5").val();//
        var prof6 = $("#prof6").val();
        var q6 = $("#q6").val();//
        var prof7 = $("#prof7").val();
        var q7 = $("#q7").val();//
        var prof8 = $("#prof8").val();
        var q8 = $("#q8").val();//
        var prof9 = $("#prof9").val();
        var q9 = $("#q9").val();//
        var prof10 = $("#prof10").val();
        var q10 = $("#q10").val();
        //
        var prof11 = $("#prof11").val();
        var q11 = $("#q11").val();
        //
        var prof12 = $("#prof12").val();
        var q12 = $("#q12").val();

        //
        var prof13 = $("#prof13").val();
        var q13 = $("#q13").val();
        
        var prof14 = $("#prof14").val();
        var q14 = $("#q14").val();
        if (Org_name === '' || O_Email === '' || O_Phone === '') {
            alert("Kindly Fill the required fields");
        } else {
            $.post("OrganisationSubmit.php", {
                Org_name: Org_name,
                O_Email: O_Email,
                O_Phone: O_Phone,
                P_name: P_name,
                O_Loc: O_Loc,
                Day: Day,
                Prof1: prof1,
                Prof2: prof2,
                Prof3: prof3,
                Prof4: prof4,
                Prof5: prof5,
                Prof6: prof6,
                Prof7: prof7,
                Prof8: prof8,
                Prof9: prof9,
                Prof10: prof10,
                Prof11: prof11,
                Prof12: prof12,
                Prof13: prof13,
                Prof14: prof14,
                q1:q1,
                q2:q2,
                q3:q3,
                q4:q4,
                q5:q5,
                q6:q6,
                q7:q7,
                q8:q8,
                q9:q9,
                q10:q10,
                q11:q11,
                q12:q12,
                q13:q13,
                q14:q14
            }, function (data, status) {
                $('#orgForm')[0].reset(); // To reset form fields
                $("#spinnerOrg").show();
                setTimeout(function () {
                    $("#spinnerOrg").hide();
                    //alert("status--------------------------"+status);
                    if (status === "success") {
                        //$("#candiSucess").show();
                        //alert("Congratulations Your have been reqistered");
                        var str ="OrganisationMail.php?defaultMail="+O_Email;
                        $('#orgMailSuccess').load(str);
                    } else {
                        //$("#candiFail").show();
                        alert("Sorry But some error occured");
                    }
                }, 6000);
            });
        }

    });
});


function kaarigarF() {
    var x = document.getElementById("one");
    var y = document.getElementById("two");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    }
    document.getElementById('formjump2').scrollIntoView(true);
//    location.href = "#";
//    window.location.hash = '#onetwo';
//    location.href = "index.php?#onetwo";
}
function orgF() {
    var x = document.getElementById("two");
    var y = document.getElementById("one");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    }
    document.getElementById('formjump2').scrollIntoView(true);
}