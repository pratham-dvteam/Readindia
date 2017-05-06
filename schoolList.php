<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "readindia";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
					
				 echo "Failed to connect to mysql" . mysqli_connect_error();
				}

			echo '<table class="list appTbl" id=" " style="width:95%" align="center" border="0" cellpadding="0" cellspacing="0"><colgroup span="9"></colgroup>';
			echo '<tr class="headerRow">';
			echo '<thead class="">';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Village</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>School Name</center></font></div></th>';
			echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>School Code</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Program Name</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Report Card Link</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Submission No.</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Completion status</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Last submission date</center></font></div></th>';
            echo '<th class="headerRow #ct" scope="col" colspan="1" id=""><div id=""><font color="#008000" face="calibri" size="3"><center>Baseline Verification Status</center></font></div></th>';
			echo '</tr>';
            echo '</thead>';
                
            $sql = "SELECT villageName, schoolName, schoolCode, program FROM schoolList WHERE block= '".$_REQUEST['block']."' ORDER BY `schoollist`.`schoolCode` ASC ";


            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                     echo "
                                <tr>

                                    <td>" . $row["villageName"]. "</div></td>
                                    <td>" . $row["schoolName"]. "</td>
                                    <td class = schoolCode>" . $row["schoolCode"]. "</td>
                                    <td class = program>" . $row["program"]. "</td>
                                    <td><button type = button class = button onClick=buttonclick('".$row['schoolCode']."')> School Report Card</button></td>
                                </tr>";
                                
                }
                    echo "</table>";
                    } 
                    else {
                             echo "0 results";
                        }
                        $conn->close();

?>