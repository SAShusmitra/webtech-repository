<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Regi.css">
    <title>Form</title>
</head>
<body>
<div class="main">
    <form name="myForm" action="#" method="GET" onsubmit="return(validate());">
        <fieldset>
            <legend>Registration</legend>
        <table>
            <tr>
                <td class="lbl"><label>Name :</label></td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td></td>
                <td id="nameR" style="color: red;"></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td class="lbl"><label>Email :</label></td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td></td>
                <td id="emailR" style="color: red;"></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td class="lbl"><label>User Name :</label></td>
                <td><input type="text" name="UName"></td>
            </tr>
            <tr>
                <td></td>
                <td id="unameR" style="color: red;"></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td class="lbl"><label>Password :</label></td>
                <td><input type="password" name="Pass"></td>
            </tr>
            <tr>
                <td></td>
                <td id="passR" style="color: red;"></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td class="lbl"><label>Confirm Password :</label></td>
                <td><input type="password" name="Cpass"></td>
            </tr>
            <tr>
                <td></td>
                <td id="CpassR" style="color: red;"></td>
            </tr>
        </table>
        <hr>
        <div  style="margin-bottom: 15px;">
            <fieldset style="padding: 15px">
                <legend>Gender</legend>
                <input type="radio" name="gen" value="male">
                <label>Male</label>
                <input type="radio" name="gen" value="female">
                <label>Female</label>
                <input type="radio" name="gen" value="other">
                <label>Other</label>
                <label id="genderl" style="color: red;"></label>
            </fieldset>
        </div>
        <hr>
        <div class="gender" style="margin-top: 15px;">
            <fieldset style="padding: 15px">
                <legend>Date Of Birth</legend>
                <input class="brt-inp" type="text" name="dd">
                <label>/</label>
                <input class="brt-inp" type="text" name="mm">
                <label>/</label>
                <input class="brt-inp" type="text" name="yy">
                <label>(dd/mm/yy)</label>
                <label id="bdR" style="color: red;"></label>
            </fieldset>
        </div>
        <hr>
        <div style="margin-top: 15px;">
            <button>Submit</button>
            <button><a href="/index.html">Reset</a></button>
        </div>
    </fieldset>  
    </form>
</div> 
    <script src="index.js" ></script>
</body>
</html>