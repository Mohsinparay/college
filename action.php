<?php 

$Rollno = $_POST['rollno'];

$student_details = array(
    array("Name"=>"Mohsin", "Roll"=> "220429","Gender"=>"Male","Ph"=>"9682185704","Adress"=> "Paraypora RFD"),
    array("Name"=>"Babar", "Roll"=> "220430","Gender"=>"Male","Ph"=>"9682175504","Adress"=> "Hadipora RFD"),
    array("Name"=>"Shadab", "Roll"=> "220431","Gender"=>"Male","Ph"=>"9682126704","Adress"=> "Sopore"),
    array("Name"=>"Fakhar", "Roll"=> "220432","Gender"=>"Male","Ph"=>"9682124704","Adress"=> "Baramulla "),
    array("Name"=>"Imam ", "Roll"=> "220433","Gender"=>"Male","Ph"=>"9682172754","Adress"=> "Nowpora"),
    array("Name"=>"Naseem", "Roll"=> "220434","Gender"=>"Male","Ph"=>"9684572704","Adress"=> "Rebban RFD"),
    array("Name"=>"Shaheen", "Roll"=> "220435","Gender"=>"Male","Ph"=>"9682452704","Adress"=> "Srinagar "),
    array("Name"=>"Haris", "Roll"=> "220436","Gender"=>"Male","Ph"=>"9625172704","Adress"=> "Bandipora"),
    array("Name"=>"Rizwan", "Roll"=> "220437","Gender"=>"Male","Ph"=>"9682172724","Adress"=> "kupwara"),
    array("Name"=>"Salmaan", "Roll"=> "220438","Gender"=>"Male","Ph"=>"9682172754","Adress"=> "Handwara"),
    array("Name"=>"Waseem", "Roll"=> "220439","Gender"=>"Male","Ph"=>"9682172754","Adress"=> "Lahore"),
    array("Name"=>"Husnain", "Roll"=> "220440","Gender"=>"Male","Ph"=>"9687892754","Adress"=> "Pakistan")
);
$found = false;
foreach ($student_details as $student) {
    if ($student['Roll'] === $Rollno) {
        // If Roll matches, print the student details
        
        $found = true; // Set the flag to true to indicate a match
        break; // Exit the loop since a match is found
    }
  
}
if(!$found){
    echo '<script> alert("Invalid Roll Number")</script>';
    header('Location: http://localhost/crashphp/college/index.php');
}




$opted_subjects = array(
    array("Major"=>"DATA STRUCTURES USING C", "Dept"=>"Computer", "Roll"=> "220429","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=>"INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C", "Dept"=>"Computer", "Roll"=> "220430","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C", "Dept"=>"Computer" ,"Roll"=> "220431","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C", "Dept"=>"Computer" ,"Roll"=> "220432","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C", "Dept"=>"Computer" ,"Roll"=> "220433","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C",  "Dept"=>"Computer","Roll"=> "220434","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C",  "Dept"=>"Computer","Roll"=> "220435","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C", "Dept"=>"Computer" ,"Roll"=> "220437","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C",  "Dept"=>"Computer","Roll"=> "220438","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C",  "Dept"=>"Computer","Roll"=> "220439","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    array("Major"=>"DATA STRUCTURES USING C",  "Dept"=>"Computer","Roll"=> "220440","Minor"=>"DIGITAL ELECTRONICS","MD"=>"BASIC STATISTIC","SEC"=> "INTRODUCTION TO PHP AND MYSQL" ,"AEC"=>"ENGLISH LANGUAGE","VAC"=>"HEALTH AND WELLNESS, "),
    );
    foreach ($opted_subjects as $Subject ) {
        if ($Subject['Roll'] === $Rollno) {
            // echo "Major Subject : ". $Subject['Major']."<br>";
            // echo "Minor Subject : ". $Subject['Minor']."<br>";
            // echo "MD Subject : ". $Subject['MD']."<br>";
            // echo "SEC Subject : ". $Subject['SEC']."<br>";
            // echo "AEC Subject : ". $Subject['AEC']."<br>";
            // echo "VAC Subject : ". $Subject['VAC']."<br>";
            
        }
    }






    $opted_subjects_for_sem4 = array(
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220429","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220430","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220431","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220432","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220433","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220433","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220434","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220435","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220436","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220437","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220438","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220439","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        array("Major"=>"SOFTWARE ENGINEERING", "Roll"=> "220440","Minor"=>"COMPUTER ORGANIZATION & ARCHITECTURE","Major2"=>"DATA COMMUNICATION AND NETWORKS","Minor2"=> "INTRODUCTION TO DATABASE SYSTEM"),
        
        );
        foreach ($opted_subjects_for_sem4 as $Subject4 ) {
            if ($Subject4['Roll'] === $Rollno) {
                // echo "Major Subject : ". $Subject['Major']."<br>";
                // echo "Minor Subject : ". $Subject['Minor']."<br>";
                // echo "MD Subject : ". $Subject['MD']."<br>";
                // echo "SEC Subject : ". $Subject['SEC']."<br>";
                // echo "AEC Subject : ". $Subject['AEC']."<br>";
                // echo "VAC Subject : ". $Subject['VAC']."<br>";
                
            }
        }


?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSE ALLOCATION FORM FOR Semester 3 & 4 , BATCH 2022</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <!-- Navbar top -->
    <div class="navbar-top">

        <center>
            <h2>Government Degree College Baramulla<br>
                (Autonomous)</h2>
            <small>(Re-Accredited by NAAC Grade A)
                College with Potential for Excellence (CPE) Status </small>
        </center>


        <!-- Navbar -->

        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Personal Detail</a>
                <hr align="center">
            </div>

        </div>
        <div class="profile">


            <div class="name">
                Name: <?php echo $student['Name']; ?>
            </div>
            <div class="job">
                Roll no.: <?php echo $student['Roll']; ?>
            </div>
            <div class="job">
                PH no.: <?php echo $student['Ph']; ?>
            </div>
            <div class="job">
                Adress: <?php echo $student['Adress']; ?>
            </div>
        </div>


    </div>
    <!-- End -->

    <!-- Main -->

    <div class="main" style="border:1px solid black">
        <h4 align="center">COURSE ALLOCATION FORM FOR Semester 3 & 4 , BATCH 2022</h4><br>
        <br>
        <h2 align="center">Course/Subjects Opted for Semester - 3</h2>
        <div class="card">
            <div class="card-body">

                <table>
                    <tbody>
                        <tr>

                            <td> &nbsp;&nbsp;<b>Course Type</b> </td>
                            <td> &nbsp;&nbsp;<b>Paper Title</b></td>
                            <td> &nbsp;&nbsp;<b>Offering Department</b></td>

                        </tr>
                        <tr>

                            <td>&nbsp;&nbsp;&nbsp;Major</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject['Major']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>

                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;Minor</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject['Minor']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;MD</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject['MD']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Statistics</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;SEC</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject['SEC']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>

                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;AEC</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject['AEC']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;English</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;VAC</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject['VAC']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Physical Education</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <h2 align="center">Course/Subjects Opted for Semester - 4</h2>
        <div class="card">
            <div class="card-body">

                <table>
                    <tbody>
                        <tr>

                            <td> &nbsp;&nbsp;<b>Course Type</b> </td>
                            <td> &nbsp;&nbsp;<b>Paper Title</b></td>
                            <td> &nbsp;&nbsp;<b>Offering Department</b></td>

                        </tr>
                        <tr>

                            <td>&nbsp;&nbsp;&nbsp;Major</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject4['Major']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>

                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;Minor</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject4['Minor']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;Major</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject4['Major2']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;Minor</td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;<?php echo $Subject4['Minor2']; ?></td>
                            <!-- <td>&nbsp;</td> -->
                            <td>&nbsp;&nbsp;Computer Science</td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>



    </div>
    <!-- End -->
</body>

</html>