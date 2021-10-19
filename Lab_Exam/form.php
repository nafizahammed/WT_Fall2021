<!DOCTYPE html>
<html>
<head>
        <title>Form</title>
        <link rel="stylesheet" href="">
</head>
<body>
        <h3>Registration Form</h3><hr>
 
        <form action="Aiub.php" method="POST">
                First Name: <input type="text" name="fname"><br> <br>
 
                Last Name: <input type="text" name="lname">  <br> <br>
                
 
                Email: <input type="text" name="age"> <br> <br>
                
           
            Gender: 
            <input type="radio" id="ml" name="Gender" value="Male">
                  <label for="ml">Male</label>
            <input type="radio" id="fl" name="Gender" value="Female">
                  <label for="fl">Female</label>
                  <br> <br>

                Mobile Number: <input type="number" name="mnum">  <br> <br>
                
                Date of birth: <input type="date" name="dob">  <br> <br>
                
                HSC results: <input type="text" name="hr">  <br> <br>

                Ssc results: <input type="text" name="sr">  <br> <br>

               <label for="course">Select a course you want to enroll:</label>

               <select id="course">
               <option value="cse">Cse</option>
               <option value="eee">Eee</option>
               <option value="law">Law</option>
               <option value="bba">Bba</option>
               <option value="english">English</option>
               </select>
               <br> <br>

            <label for="year">Choose a year enrolling year:</label>

              <select id="year">
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              </select>
              <br> <br>


              <label for="semester">Choose a year enrolling year:</label>

              <select id="semester">
              <option value="summer">Summer</option>
              <option value="fall">Fall</option>
              <option value="spring">Spring</option>

              </select>
              <br> <br>
 
        <button type="insert" name="insert">Insert</button>
        </form>
 
 
       
</body>
</html>